<?php include 'includes/header.php'; ?>

<!-- Page Title -->
<section style="background: url('https://images.unsplash.com/photo-1550745165-9bc0b252726f?auto=format&fit=crop&q=80') center/cover; padding: 150px 0 100px; position: relative;">
    <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, rgba(10,10,10,0.7), var(--bg-dark));"></div>
    <div class="container" style="position: relative; z-index: 1; text-align: center;">
        <h1 style="font-size: 3.5rem; margin-bottom: 10px;">About Me</h1>
        <p class="text-muted"><a href="index.php">Home</a> / About</p>
    </div>
</section>

<!-- About Details -->
<section>
    <div class="container grid-2" style="align-items: center;">
        <div style="position: relative;">
            <div style="background: linear-gradient(145deg, #00D084, #007bb5); border-radius: var(--radius-md); width: 100%; height: 500px; position: absolute; top: 10px; left: 10px; z-index: -1;"></div>
            <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&q=80" alt="About Shahzad" style="width: 100%; height: 500px; object-fit: cover; border-radius: var(--radius-md);">
            
            <div style="position: absolute; top: -20px; left: -20px; background: var(--bg-card); padding: 15px; border-radius: var(--radius-sm); box-shadow: 0 10px 30px rgba(0,0,0,0.5);">
                <i class="fab fa-react" style="color: #61DAFB; font-size: 2.5rem;"></i>
            </div>
            <div style="position: absolute; bottom: 30px; left: -20px; background: var(--bg-card); padding: 20px; border-radius: var(--radius-sm); display: flex; align-items: center; gap: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.5);">
                <div style="background: rgba(0,208,132,0.2); color: var(--primary); width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; border-radius: 50%; font-weight: bold; font-size: 1.2rem;">04+</div>
                <div>
                    <div style="font-weight: bold; font-size: 1.1rem;">Projects</div>
                    <div class="text-muted" style="font-size: 0.9rem;">Completed</div>
                </div>
            </div>
        </div>
        
        <div>
            <h2 style="font-size: 2.5rem; margin-bottom: 20px;">My Advantage</h2>
            <p class="text-muted" style="margin-bottom: 30px;">Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account the system and expound the actual teachings of the great explorer.</p>
            
            <div class="grid-3" style="gap: 20px;">
                <!-- Full Skill breakdown according to prompt -->
                <div style="background: var(--bg-lighter); padding: 20px; border-radius: var(--radius-sm); text-align: center; border: 1px solid var(--border-color);">
                    <h3 style="color: #F7DF1E; margin-bottom: 5px;">95%</h3>
                    <p class="text-muted" style="font-size: 0.9rem;">JavaScript</p>
                </div>
                <div style="background: var(--bg-lighter); padding: 20px; border-radius: var(--radius-sm); text-align: center; border: 1px solid var(--border-color);">
                    <h3 style="color: #47A248; margin-bottom: 5px;">92%</h3>
                    <p class="text-muted" style="font-size: 0.9rem;">MongoDB</p>
                </div>
                <div style="background: var(--bg-lighter); padding: 20px; border-radius: var(--radius-sm); text-align: center; border: 1px solid var(--border-color);">
                    <h3 style="color: #339933; margin-bottom: 5px;">90%</h3>
                    <p class="text-muted" style="font-size: 0.9rem;">Node.JS</p>
                </div>
                <div style="background: var(--bg-lighter); padding: 20px; border-radius: var(--radius-sm); text-align: center; border: 1px solid var(--border-color);">
                    <h3 style="color: #3776AB; margin-bottom: 5px;">72%</h3>
                    <p class="text-muted" style="font-size: 0.9rem;">Python</p>
                </div>
                <div style="background: var(--bg-lighter); padding: 20px; border-radius: var(--radius-sm); text-align: center; border: 1px solid var(--border-color);">
                    <h3 style="color: var(--primary); margin-bottom: 5px;">43%</h3>
                    <p class="text-muted" style="font-size: 0.9rem;">AI/ML</p>
                </div>
                <div style="background: var(--bg-lighter); padding: 20px; border-radius: var(--radius-sm); text-align: center; border: 1px solid var(--border-color);">
                    <h3 style="color: #E34F26; margin-bottom: 5px;">37%</h3>
                    <p class="text-muted" style="font-size: 0.9rem;">Tools</p>
                </div>
            </div>
            
            <a href="contact.php" class="btn btn-primary" style="margin-top: 30px;">Download CV</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
