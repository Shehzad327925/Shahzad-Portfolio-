import os
import re

def build_static_site():
    print("Building static HTML files...")
    
    # Read includes
    header_content = ""
    if os.path.exists('includes/header.php'):
        with open('includes/header.php', 'r', encoding='utf-8') as hf:
            header_content = hf.read()
            
    footer_content = ""
    if os.path.exists('includes/footer.php'):
        with open('includes/footer.php', 'r', encoding='utf-8') as ff:
            footer_content = ff.read()

    pages = ['index.php', 'about.php', 'portfolio.php', 'blog.php', 'contact.php']
    
    for php_file in pages:
        if not os.path.exists(php_file):
            continue
            
        print(f"Processing {php_file}...")
        with open(php_file, 'r', encoding='utf-8') as f:
            content = f.read()

        html_file = php_file.replace('.php', '.html')
        
        # Process header
        current_header = header_content
        current_header = re.sub(r'<\?php\s+// Function to check active.*?return \'\';\n}\n\?>\n*', '', current_header, flags=re.DOTALL)
        
        for p in pages:
            active_str = 'active' if p == php_file else ''
            # we also need to change the links in the header from .php to .html
            p_html = p.replace('.php', '.html')
            
            # First replace the active call
            current_header = current_header.replace(f"<?php echo is_active('{p}'); ?>", active_str)
            # Then replace the hrefs inside the header
            current_header = current_header.replace(f'href="{p}"', f'href="{p_html}"')
            
        # Replace includes in main content
        content = content.replace("<?php include 'includes/header.php'; ?>", current_header)
        content = content.replace("<?php include 'includes/footer.php'; ?>", footer_content)
        
        # Replace remaining .php links within the body
        for p in pages:
            content = content.replace(f'href="{p}"', f'href="{p.replace(".php", ".html")}"')
        
        # Clean up any leftover php tags
        content = re.sub(r'<\?php.*?\?>', '', content, flags=re.DOTALL)
        
        with open(html_file, 'w', encoding='utf-8') as f:
            f.write(content)
            
        print(f"Generated {html_file}")
        
        # Optionally remove the original php file
        os.remove(php_file)
        
    print("Build complete. Removing includes and dev-server...")
    
    # clean up dev server and includes since it's pure HTML now
    if os.path.exists('dev-server.py'):
        try: os.remove('dev-server.py')
        except: pass
        
    import shutil
    if os.path.exists('includes'):
        shutil.rmtree('includes', ignore_errors=True)

if __name__ == '__main__':
    build_static_site()
