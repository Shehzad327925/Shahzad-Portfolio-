<?php include 'includes/header.php'; ?>

<!-- Page Title -->
<section style="background: url('https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&q=80') center/cover; padding: 150px 0 100px; position: relative;">
    <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, rgba(10,10,10,0.7), var(--bg-dark));"></div>
    <div class="container" style="position: relative; z-index: 1; text-align: center;">
        <h1 style="font-size: 3.5rem; margin-bottom: 10px;">Portfolio</h1>
        <p class="text-muted"><a href="index.php">Home</a> / Portfolio</p>
    </div>
</section>

<!-- Portfolio Section -->
<section>
    <div class="container">
        <!-- Filters -->
        <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 15px; margin-bottom: 50px;">
            <button class="btn btn-primary filter-btn active" data-filter="all">All Product</button>
            <button class="btn btn-outline filter-btn" data-filter="branding">Branding</button>
            <button class="btn btn-outline filter-btn" data-filter="illustrator">Illustrator</button>
            <button class="btn btn-outline filter-btn" data-filter="3d">3D</button>
            <button class="btn btn-outline filter-btn" data-filter="marketing">Marketing</button>
        </div>

        <!-- Grid -->
        <div class="grid-3">
            <!-- Project 1 -->
            <div class="portfolio-item branding illustrator" style="border-radius: var(--radius-md); overflow: hidden; background: var(--bg-card); transition: var(--transition);">
                <div style="height: 250px; background: url('https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&q=80') center/cover; position: relative;">
                    <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.7); opacity: 0; transition: var(--transition); display: flex; align-items: center; justify-content: center;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0'">
                        <a href="#" class="btn btn-primary">View Work <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div style="padding: 25px;">
                    <h3 style="margin-bottom: 10px; font-size: 1.2rem;">AI Chatbots & NotesGen.ai</h3>
                    <p class="text-muted" style="font-size: 0.9rem;">Branding / AI</p>
                </div>
            </div>
            
            <!-- Project 2 -->
            <div class="portfolio-item marketing 3d" style="border-radius: var(--radius-md); overflow: hidden; background: var(--bg-card); transition: var(--transition);">
                <div style="height: 250px; background: url('https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&q=80') center/cover; position: relative;">
                    <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.7); opacity: 0; transition: var(--transition); display: flex; align-items: center; justify-content: center;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0'">
                        <a href="#" class="btn btn-primary">View Work <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div style="padding: 25px;">
                    <h3 style="margin-bottom: 10px; font-size: 1.2rem;">Hotel Management System</h3>
                    <p class="text-muted" style="font-size: 0.9rem;">Marketing / 3D</p>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="portfolio-item illustrator branding" style="border-radius: var(--radius-md); overflow: hidden; background: var(--bg-card); transition: var(--transition);">
                <div style="height: 250px; background: url('https://images.unsplash.com/photo-1587145820266-a5951ee6f620?auto=format&fit=crop&q=80') center/cover; position: relative;">
                    <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.7); opacity: 0; transition: var(--transition); display: flex; align-items: center; justify-content: center;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0'">
                        <a href="#" class="btn btn-primary">View Work <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div style="padding: 25px;">
                    <h3 style="margin-bottom: 10px; font-size: 1.2rem;">Calculator App</h3>
                    <p class="text-muted" style="font-size: 0.9rem;">Illustrator / App</p>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="portfolio-item 3d marketing" style="border-radius: var(--radius-md); overflow: hidden; background: var(--bg-card); transition: var(--transition);">
                <div style="height: 250px; background: url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80') center/cover; position: relative;">
                    <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.7); opacity: 0; transition: var(--transition); display: flex; align-items: center; justify-content: center;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0'">
                        <a href="#" class="btn btn-primary">View Work <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div style="padding: 25px;">
                    <h3 style="margin-bottom: 10px; font-size: 1.2rem;">Static & Dynamic Websites</h3>
                    <p class="text-muted" style="font-size: 0.9rem;">3D / Web</p>
                </div>
            </div>

            <!-- Project 5 -->
            <div class="portfolio-item branding" style="border-radius: var(--radius-md); overflow: hidden; background: var(--bg-card); transition: var(--transition);">
                <div style="height: 250px; background: url('https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&q=80') center/cover; position: relative;">
                    <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.7); opacity: 0; transition: var(--transition); display: flex; align-items: center; justify-content: center;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0'">
                        <a href="#" class="btn btn-primary">View Work <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div style="padding: 25px;">
                    <h3 style="margin-bottom: 10px; font-size: 1.2rem;">Creative Dashboard UI</h3>
                    <p class="text-muted" style="font-size: 0.9rem;">Branding / Analytics</p>
                </div>
            </div>

            <!-- Project 6 -->
            <div class="portfolio-item marketing illustrator" style="border-radius: var(--radius-md); overflow: hidden; background: var(--bg-card); transition: var(--transition);">
                <div style="height: 250px; background: url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80') center/cover; position: relative;">
                    <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.7); opacity: 0; transition: var(--transition); display: flex; align-items: center; justify-content: center;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0'">
                        <a href="#" class="btn btn-primary">View Work <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div style="padding: 25px;">
                    <h3 style="margin-bottom: 10px; font-size: 1.2rem;">E-Commerce Platform</h3>
                    <p class="text-muted" style="font-size: 0.9rem;">Marketing / Design</p>
                </div>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 50px;">
            <button class="btn btn-outline" style="min-width: 200px;">Load More</button>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
