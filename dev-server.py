import http.server
import socketserver
import os
import re

PORT = 8000

class PHPMockHandler(http.server.SimpleHTTPRequestHandler):
    def do_GET(self):
        if self.path == '/' or self.path == '':
            self.path = '/index.php'
            
        file_path = self.path.lstrip('/')
        if '?' in file_path:
            file_path = file_path.split('?')[0]
            
        # Serve static files normally
        if not file_path.endswith('.php'):
            if os.path.exists(file_path):
                return super().do_GET()
            else:
                self.send_error(404, "File not found")
                return

        # Serve PHP files dynamically
        if not os.path.exists(file_path):
            self.send_error(404, "File not found")
            return
            
        self.send_response(200)
        self.send_header('Content-type', 'text/html')
        self.end_headers()
        
        with open(file_path, 'r', encoding='utf-8') as f:
            content = f.read()
            
        # 1. Load header and footer
        header_content = ""
        if os.path.exists('includes/header.php'):
            with open('includes/header.php', 'r', encoding='utf-8') as hf:
                header_content = hf.read()
        
        footer_content = ""
        if os.path.exists('includes/footer.php'):
            with open('includes/footer.php', 'r', encoding='utf-8') as ff:
                footer_content = ff.read()
        
        # 2. Process active links in header
        page_name = os.path.basename(file_path)
        # Remove the PHP function definition in header
        header_content = re.sub(r'<\?php\s+// Function to check active.*?return \'\';\n}\n\?>\n', '', header_content, flags=re.DOTALL)
        
        # Replace the active class echo statements
        pages = ['index.php', 'about.php', 'portfolio.php', 'blog.php', 'contact.php']
        for p in pages:
            active_str = 'active' if p == page_name else ''
            header_content = header_content.replace(f"<?php echo is_active('{p}'); ?>", active_str)
            
        # 3. Replace include statements in main content
        content = content.replace("<?php include 'includes/header.php'; ?>", header_content)
        content = content.replace("<?php include 'includes/footer.php'; ?>", footer_content)
        
        # fallback just in case
        content = re.sub(r'<\?php.*?\?>', '', content, flags=re.DOTALL)
        
        self.wfile.write(content.encode('utf-8'))

with socketserver.TCPServer(("", PORT), PHPMockHandler) as httpd:
    print(f"Mock PHP Server running at http://localhost:{PORT}")
    print("This server will process your header/footer includes without needing PHP installed.")
    try:
        httpd.serve_forever()
    except KeyboardInterrupt:
        pass
