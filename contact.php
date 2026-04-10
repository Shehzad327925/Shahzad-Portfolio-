<?php include 'includes/header.php'; ?>

<!-- Page Title -->
<section style="background: url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&q=80') center/cover; padding: 150px 0 100px; position: relative;">
    <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, rgba(10,10,10,0.7), var(--bg-dark));"></div>
    <div class="container" style="position: relative; z-index: 1; text-align: center;">
        <h1 style="font-size: 3.5rem; margin-bottom: 10px;">Contact</h1>
        <p class="text-muted"><a href="index.php">Home</a> / Contact</p>
    </div>
</section>

<!-- Contact Info Cards -->
<section style="padding-top: 50px;">
    <div class="container grid-3" style="margin-bottom: 80px;">
        <div style="background: var(--bg-card); padding: 50px 30px; border-radius: var(--radius-md); text-align: center; border: 1px solid var(--border-color);">
            <div style="width: 60px; height: 60px; border-radius: 50%; border: 1px dashed var(--primary); display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                <i class="fas fa-map-marker-alt" style="color: var(--primary); font-size: 1.5rem;"></i>
            </div>
            <h3 style="margin-bottom: 15px;">Address</h3>
            <p class="text-muted" style="font-size: 0.9rem;">Nahaqi Daudzai, Charsadda Road, Peshawar</p>
        </div>
        
        <div style="background: var(--bg-card); padding: 50px 30px; border-radius: var(--radius-md); text-align: center; border: 1px solid var(--border-color);">
            <div style="width: 60px; height: 60px; border-radius: 50%; border: 1px dashed #f7df1e; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                <i class="far fa-envelope" style="color: #f7df1e; font-size: 1.5rem;"></i>
            </div>
            <h3 style="margin-bottom: 15px;">Email Us</h3>
            <p class="text-muted" style="font-size: 0.9rem;">s8045030@gmail.com</p>
        </div>
        
        <div style="background: var(--bg-card); padding: 50px 30px; border-radius: var(--radius-md); text-align: center; border: 1px solid var(--border-color);">
            <div style="width: 60px; height: 60px; border-radius: 50%; border: 1px dashed #e34f26; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                <i class="fas fa-phone-alt" style="color: #e34f26; font-size: 1.5rem;"></i>
            </div>
            <h3 style="margin-bottom: 15px;">Call Now</h3>
            <p class="text-muted" style="font-size: 0.9rem;">0316-8969151</p>
        </div>
    </div>
    
    <!-- Contact Form Section -->
    <div class="container">
        <div style="text-align: center; margin-bottom: 50px;">
            <h2 class="section-title">Have Any Question?</h2>
            <p class="section-subtitle">It is a long established fact that a reader will be distracted content of a page when looking.</p>
        </div>
        
        <div style="max-width: 800px; margin: 0 auto; background: var(--bg-card); padding: 50px; border-radius: var(--radius-md); position: relative; z-index: 10;">
            <form action="#" method="POST">
                <div class="grid-2" style="gap: 20px; margin-bottom: 20px;">
                    <input type="text" placeholder="Your Name*" required style="width: 100%; padding: 15px 20px; background: transparent; border: 1px solid var(--border-color); border-radius: var(--radius-sm); color: var(--text-main); outline: none;">
                    <input type="email" placeholder="Your Email*" required style="width: 100%; padding: 15px 20px; background: transparent; border: 1px solid var(--border-color); border-radius: var(--radius-sm); color: var(--text-main); outline: none;">
                </div>
                
                <div class="grid-2" style="gap: 20px; margin-bottom: 20px;">
                    <input type="text" placeholder="Address" style="width: 100%; padding: 15px 20px; background: transparent; border: 1px solid var(--border-color); border-radius: var(--radius-sm); color: var(--text-main); outline: none;">
                    <select style="width: 100%; padding: 15px 20px; background: var(--bg-card); border: 1px solid var(--border-color); border-radius: var(--radius-sm); color: var(--text-muted); outline: none; appearance: none;">
                        <option value="" disabled selected>Services</option>
                        <option value="web">Web Development</option>
                        <option value="ai">AI/ML</option>
                        <option value="programming">Programming</option>
                    </select>
                </div>
                
                <textarea placeholder="Message..." rows="6" required style="width: 100%; padding: 15px 20px; background: transparent; border: 1px solid var(--border-color); border-radius: var(--radius-sm); color: var(--text-main); outline: none; margin-bottom: 30px; resize: none;"></textarea>
                
                <div style="text-align: center;">
                    <button type="submit" class="btn btn-outline" style="min-width: 200px;">Get In Touch</button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Map Section -->
<section style="padding: 0; margin-top: -150px; position: relative; z-index: 1;">
    <!-- Google Maps Embed -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d105809.52467232236!2d71.4552438814713!3d34.02027221808027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38d917b90f0e79cf%3A0xa816b2637558a412!2sPeshawar%2C%20Khyber%20Pakhtunkhwa%2C%20Pakistan!5e0!3m2!1sen!2s!4v1709403814833!5m2!1sen!2s" width="100%" height="600" style="border:0; filter: grayscale(100%) invert(92%) contrast(83%); opacity: 0.8;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; background: rgba(10,10,10,0.5);"></div>
</section>

<!-- Partners section (same as home) -->
<section style="padding: 40px 0; border-top: 1px solid var(--border-color); border-bottom: 1px solid var(--border-color); background: var(--bg-dark);">
    <div class="container" style="display: flex; justify-content: space-around; align-items: center; flex-wrap: wrap; gap: 30px; opacity: 0.5;">
        <h3 style="font-family: serif; font-style: italic; margin: 0;">HOT DOG</h3>
        <h3 style="font-family: sans-serif; font-weight: 800; letter-spacing: 2px; margin: 0;">AMERICAN</h3>
        <h3 style="font-family: serif; font-weight: 300; margin: 0;">THE CUPCAKE</h3>
        <h3 style="font-family: sans-serif; font-weight: 200; letter-spacing: 5px; margin: 0;">CALIFORNIA</h3>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
