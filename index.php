<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero" style="min-height: 100vh; display: flex; align-items: center; position: relative; overflow: hidden; padding-top: 120px;">
    <!-- Abstract Gradient Background -->
    <div style="position: absolute; top: -20%; left: -10%; width: 50%; height: 60%; background: radial-gradient(circle, rgba(0,208,132,0.15) 0%, rgba(10,10,10,0) 70%); z-index: -1;"></div>
    <div style="position: absolute; bottom: -20%; right: -10%; width: 50%; height: 60%; background: radial-gradient(circle, rgba(100,50,200,0.1) 0%, rgba(10,10,10,0) 70%); z-index: -1;"></div>

    <div class="container grid-2" style="align-items: center;">
        <div class="hero-content">
            <h4 class="text-primary" style="margin-bottom: 10px; font-weight: 600;">Hello,</h4>
            <h1 style="font-size: 4rem; margin-bottom: 10px;">I Am Shahzad Habib.</h1>
            <h3 class="text-primary" style="font-size: 1.5rem; margin-bottom: 20px;">Web Developer</h3>
            <p class="text-muted" style="margin-bottom: 30px; font-size: 1.1rem; max-width: 500px;">
                Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you.
            </p>
            <a href="#contact" class="btn btn-primary">Hire Me</a>
        </div>
        
        <div class="hero-image" style="position: relative;">
            <div style="background: linear-gradient(145deg, #00D084, #007bb5); border-radius: 50%; width: 450px; height: 450px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: -1;"></div>
            <img src="assets/images/profile.jpg" alt="Shahzad Habib" style="width: 100%; border-radius: 50%; object-fit: cover; aspect-ratio: 1/1;">
            
            <!-- Floating Elements -->
            <div style="position: absolute; top: 10%; right: 10%; background: var(--bg-card); padding: 10px; border-radius: var(--radius-sm); box-shadow: 0 10px 30px rgba(0,0,0,0.5);">
                <i class="fab fa-react" style="color: #61DAFB; font-size: 2rem;"></i>
            </div>
            <div style="position: absolute; bottom: 10%; left: 10%; background: var(--bg-card); padding: 15px; border-radius: var(--radius-sm); display: flex; align-items: center; gap: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.5);">
                <div style="background: rgba(0,208,132,0.2); color: var(--primary); width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; border-radius: 50%; font-weight: bold;">04</div>
                <div>
                    <div style="font-weight: bold;">04 Years</div>
                    <div class="text-muted" style="font-size: 0.8rem;">Experience</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- My Advantage Section -->
<section style="background-color: var(--bg-card);">
    <div class="container grid-2" style="align-items: center;">
        <div>
            <div style="background: var(--bg-lighter); padding: 50px; border-radius: var(--radius-md); position: relative;">
                <h2 style="font-size: 4rem; color: var(--primary); margin-bottom: 0;">04</h2>
                <h4 style="margin-bottom: 20px;">Years of experience</h4>
                <div style="display: flex; align-items: center; gap: 15px; background: rgba(0,208,132,0.1); padding: 15px 20px; border-radius: var(--radius-sm); border: 1px solid rgba(0,208,132,0.2); width: fit-content;">
                    <span style="color: var(--primary); font-weight: bold; font-size: 1.2rem;">100%</span>
                    <span class="text-muted" style="font-size: 0.9rem;">Client<br>Satisfaction</span>
                </div>
            </div>
        </div>
        
        <div>
            <h2 style="font-size: 2.5rem; margin-bottom: 20px;">My Advantage</h2>
            <p class="text-muted" style="margin-bottom: 30px;">Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account the system and expound the actual teachings of the great explorer.</p>
            
            <div class="grid-3" style="gap: 20px;">
                <!-- Skill items -->
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
        </div>
    </div>
</section>

<!-- Popular Services -->
<section>
    <div class="container">
        <h2 class="section-title">Popular Services</h2>
        <p class="section-subtitle">Must explain to you how all this mistaken idea of denouncing pleasure born and give you a complete account the system</p>
        
        <div style="display: flex; justify-content: center; gap: 20px; margin-bottom: 40px;">
            <button class="btn btn-outline" style="border-color: var(--primary); color: var(--primary);">Development</button>
            <button class="btn btn-outline">Design</button>
            <button class="btn btn-outline">Marketing</button>
        </div>

        <div class="grid-3">
            <div style="background: var(--bg-card); padding: 40px 30px; border-radius: var(--radius-md); text-align: center; border: 1px solid transparent; transition: var(--transition);" onmouseover="this.style.borderColor='var(--primary)'" onmouseout="this.style.borderColor='transparent'">
                <i class="fas fa-code" style="font-size: 3rem; color: var(--primary); margin-bottom: 20px;"></i>
                <h3 style="margin-bottom: 15px;">Web Development</h3>
                <p class="text-muted" style="margin-bottom: 20px; font-size: 0.9rem;">MERN Stack development, Custom websites, API development</p>
                <a href="#" style="color: var(--primary); font-weight: 500; font-size: 0.9rem;"><i class="fas fa-arrow-right"></i> Learn More</a>
            </div>
            
            <div style="background: var(--bg-card); padding: 40px 30px; border-radius: var(--radius-md); text-align: center; border: 1px solid transparent; transition: var(--transition);" onmouseover="this.style.borderColor='var(--primary)'" onmouseout="this.style.borderColor='transparent'">
                <i class="fas fa-robot" style="font-size: 3rem; color: #f7df1e; margin-bottom: 20px;"></i>
                <h3 style="margin-bottom: 15px;">AI/ML</h3>
                <p class="text-muted" style="margin-bottom: 20px; font-size: 0.9rem;">Chatbot Development, Prompt Engineering, AI Integration</p>
                <a href="#" style="color: var(--primary); font-weight: 500; font-size: 0.9rem;"><i class="fas fa-arrow-right"></i> Learn More</a>
            </div>
            
            <div style="background: var(--bg-card); padding: 40px 30px; border-radius: var(--radius-md); text-align: center; border: 1px solid transparent; transition: var(--transition);" onmouseover="this.style.borderColor='var(--primary)'" onmouseout="this.style.borderColor='transparent'">
                <i class="fas fa-laptop-code" style="font-size: 3rem; color: #3776ab; margin-bottom: 20px;"></i>
                <h3 style="margin-bottom: 15px;">Programming</h3>
                <p class="text-muted" style="margin-bottom: 20px; font-size: 0.9rem;">Python, JavaScript, Node.JS, Problem Solving</p>
                <a href="#" style="color: var(--primary); font-weight: 500; font-size: 0.9rem;"><i class="fas fa-arrow-right"></i> Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- Work Experience -->
<section style="background: var(--bg-card);">
    <div class="container">
        <h2 class="section-title">My Work Experience</h2>
        <p class="section-subtitle">Must explain to you how all this mistaken idea of denouncing pleasure born and give you a complete account the system</p>
        
        <div style="max-width: 800px; margin: 0 auto; display: flex; flex-direction: column; gap: 20px;">
            <div style="background: var(--bg-lighter); padding: 25px; border-radius: var(--radius-sm); display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 20px; transition: var(--transition);" onmouseover="this.style.transform='translateX(10px)'" onmouseout="this.style.transform='translateX(0)'">
                <div style="font-weight: 600; font-size: 1.2rem; min-width: 150px;">2021 - 2025</div>
                <div style="display: flex; align-items: center; gap: 15px; flex: 1;">
                    <i class="fas fa-graduation-cap" style="font-size: 2rem; color: var(--primary);"></i>
                    <div>
                        <h3 style="margin-bottom: 5px; font-size: 1.2rem;">Student (BS Computer Science)</h3>
                        <p class="text-muted" style="font-size: 0.9rem;">Bacha Khan University</p>
                    </div>
                </div>
                <a href="#" style="color: var(--primary); font-size: 0.9rem;">Go to website</a>
            </div>
            
            <div style="background: var(--bg-lighter); padding: 25px; border-radius: var(--radius-sm); display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 20px; transition: var(--transition);" onmouseover="this.style.transform='translateX(10px)'" onmouseout="this.style.transform='translateX(0)'">
                <div style="font-weight: 600; font-size: 1.2rem; min-width: 150px;">2024</div>
                <div style="display: flex; align-items: center; gap: 15px; flex: 1;">
                    <i class="fas fa-briefcase" style="font-size: 2rem; color: #47A248;"></i>
                    <div>
                        <h3 style="margin-bottom: 5px; font-size: 1.2rem;">Internship</h3>
                        <p class="text-muted" style="font-size: 0.9rem;">Bank Of Khyber</p>
                    </div>
                </div>
                <a href="#" style="color: var(--primary); font-size: 0.9rem;">Go to website</a>
            </div>

            <div style="background: var(--bg-lighter); padding: 25px; border-radius: var(--radius-sm); display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 20px; transition: var(--transition);" onmouseover="this.style.transform='translateX(10px)'" onmouseout="this.style.transform='translateX(0)'">
                <div style="font-weight: 600; font-size: 1.2rem; min-width: 150px;">Training</div>
                <div style="display: flex; align-items: center; gap: 15px; flex: 1;">
                    <i class="fas fa-laptop-code" style="font-size: 2rem; color: #F7DF1E;"></i>
                    <div>
                        <h3 style="margin-bottom: 5px; font-size: 1.2rem;">MERN Stack</h3>
                        <p class="text-muted" style="font-size: 0.9rem;">Saylani Mass IT Training</p>
                    </div>
                </div>
                <a href="#" style="color: var(--primary); font-size: 0.9rem;">Go to website</a>
            </div>

            <div style="background: var(--bg-lighter); padding: 25px; border-radius: var(--radius-sm); display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 20px; transition: var(--transition);" onmouseover="this.style.transform='translateX(10px)'" onmouseout="this.style.transform='translateX(0)'">
                <div style="font-weight: 600; font-size: 1.2rem; min-width: 150px;">Training</div>
                <div style="display: flex; align-items: center; gap: 15px; flex: 1;">
                    <i class="fas fa-brain" style="font-size: 2rem; color: #E34F26;"></i>
                    <div>
                        <h3 style="margin-bottom: 5px; font-size: 1.2rem;">Artificial Intelligence</h3>
                        <p class="text-muted" style="font-size: 0.9rem;">Arfa Karim Technology Incubator</p>
                    </div>
                </div>
                <a href="#" style="color: var(--primary); font-size: 0.9rem;">Go to website</a>
            </div>
        </div>
    </div>
</section>

<!-- Recent Work -->
<section>
    <div class="container">
        <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 40px;">
            <div>
                <h2 class="section-title" style="text-align: left; margin-bottom: 10px;">Recent Work.</h2>
                <p class="text-muted" style="max-width: 500px;">Must explain to you how all this mistaken idea pleasure from and give you a complete account.</p>
            </div>
            <div>
                <div style="width: 60px; height: 60px; border-radius: 50%; border: 1px dashed var(--primary); display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-hand-sparkles" style="color: var(--primary); font-size: 1.5rem;"></i>
                </div>
            </div>
        </div>

        <div class="grid-3">
            <div style="border-radius: var(--radius-md); overflow: hidden; background: var(--bg-card);">
                <div style="height: 250px; background: url('https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&q=80') center/cover; position: relative;">
                    <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.5); opacity: 0; transition: var(--transition); display: flex; align-items: center; justify-content: center;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0'">
                        <a href="#" class="btn btn-primary">View Case <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div style="padding: 25px;">
                    <h3 style="margin-bottom: 10px; font-size: 1.2rem;">AI Chatbots & NotesGen.ai</h3>
                    <p class="text-muted" style="font-size: 0.9rem;">AI / Web App</p>
                </div>
            </div>
            
            <div style="border-radius: var(--radius-md); overflow: hidden; background: var(--bg-card);">
                <div style="height: 250px; background: url('https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&q=80') center/cover; position: relative;">
                    <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.5); opacity: 0; transition: var(--transition); display: flex; align-items: center; justify-content: center;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0'">
                        <a href="#" class="btn btn-primary">View Case <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div style="padding: 25px;">
                    <h3 style="margin-bottom: 10px; font-size: 1.2rem;">Hotel Management System</h3>
                    <p class="text-muted" style="font-size: 0.9rem;">Web Development</p>
                </div>
            </div>

            <div style="border-radius: var(--radius-md); overflow: hidden; background: var(--bg-card);">
                <div style="height: 250px; background: url('https://images.unsplash.com/photo-1587145820266-a5951ee6f620?auto=format&fit=crop&q=80') center/cover; position: relative;">
                    <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.5); opacity: 0; transition: var(--transition); display: flex; align-items: center; justify-content: center;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0'">
                        <a href="#" class="btn btn-primary">View Case <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div style="padding: 25px;">
                    <h3 style="margin-bottom: 10px; font-size: 1.2rem;">Calculator App & Web</h3>
                    <p class="text-muted" style="font-size: 0.9rem;">JavaScript / Native</p>
                </div>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <button style="background: transparent; border: 1px solid var(--border-color); color: var(--text-main); width: 40px; height: 40px; border-radius: 50%; margin: 0 5px; cursor: pointer; transition: var(--transition);" onmouseover="this.style.background='var(--primary)'; this.style.borderColor='var(--primary)'" onmouseout="this.style.background='transparent'; this.style.borderColor='var(--border-color)'"><i class="fas fa-arrow-left"></i></button>
            <button style="background: transparent; border: 1px solid var(--border-color); color: var(--text-main); width: 40px; height: 40px; border-radius: 50%; margin: 0 5px; cursor: pointer; transition: var(--transition);" onmouseover="this.style.background='var(--primary)'; this.style.borderColor='var(--primary)'" onmouseout="this.style.background='transparent'; this.style.borderColor='var(--border-color)'"><i class="fas fa-arrow-right"></i></button>
        </div>
    </div>
</section>

<!-- Testimonial / Desktop Publishing Grid -->
<section style="background: var(--bg-lighter); padding: 80px 0;">
    <div class="container grid-2" style="align-items: center;">
        <div style="position: relative; height: 400px; display: flex; align-items: center; justify-content: center;">
            <div style="width: 250px; height: 250px; border-radius: 50%; border: 2px dashed rgba(255,255,255,0.1); position: absolute;"></div>
            <img src="https://ui-avatars.com/api/?name=Shahzad+Habib&size=150&background=00D084&color=fff" style="border-radius: 50%; z-index: 2;" alt="Profile">
            <img src="https://ui-avatars.com/api/?name=Client+1&size=60&background=random" style="position: absolute; top: 20%; left: 10%; border-radius: 50%;">
            <img src="https://ui-avatars.com/api/?name=Client+2&size=60&background=random" style="position: absolute; bottom: 20%; right: 10%; border-radius: 50%;">
            <img src="https://ui-avatars.com/api/?name=Client+3&size=60&background=random" style="position: absolute; top: 10%; right: 20%; border-radius: 50%;">
            <img src="https://ui-avatars.com/api/?name=Client+4&size=60&background=random" style="position: absolute; bottom: 10%; left: 20%; border-radius: 50%;">
        </div>
        <div>
            <h2 style="font-size: 2rem; margin-bottom: 20px;">Many desktop publishing packages and editors now use as their.</h2>
            <p class="text-muted" style="margin-bottom: 20px;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
            <div style="display: flex; align-items: center; justify-content: space-between;">
                <div>
                    <h4 style="margin-bottom: 5px;">Colin Falcon,</h4>
                    <span class="text-muted" style="font-size: 0.9rem;">Software Engineer</span>
                </div>
                <div style="display: flex; gap: 10px;">
                    <i class="fas fa-arrow-left text-muted" style="cursor: pointer;"></i>
                    <i class="fas fa-arrow-right text-main" style="cursor: pointer;"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Plan -->
<section>
    <div class="container">
        <h2 class="section-title">Pricing Plan</h2>
        <p class="section-subtitle">Must explain to you how all this mistaken idea pleasure born and give you a complete account</p>

        <div class="grid-3" style="align-items: center;">
            <!-- Basic Plan -->
            <div style="background: var(--bg-card); padding: 50px 30px; border-radius: var(--radius-md); text-align: center; border: 1px solid var(--border-color);">
                <div style="display: inline-block; padding: 5px 15px; border-radius: var(--radius-sm); font-size: 0.8rem; font-weight: 600; margin-bottom: 20px; background: rgba(255,255,255,0.1);">BASIC</div>
                <h2 style="font-size: 2.5rem; margin-bottom: 10px;">$120<span style="font-size: 1rem; color: var(--text-muted);"> / MONTH</span></h2>
                <p class="text-muted" style="margin-bottom: 30px; font-size: 0.9rem;">Determine the Best Pricing Strategy For Your Business.</p>
                <ul style="margin-bottom: 30px; color: var(--text-muted); font-size: 0.9rem; line-height: 2;">
                    <li>Software Development</li>
                    <li>Web Development</li>
                    <li>Digital Marketing</li>
                    <li>Graphic Design</li>
                    <li>24/7 Support</li>
                </ul>
                <a href="#" class="btn btn-outline" style="width: 100%;">CHOOSE PLAN</a>
            </div>

            <!-- Standard Plan -->
            <div style="background: var(--bg-lighter); padding: 60px 30px; border-radius: var(--radius-md); text-align: center; border: 2px solid var(--primary); transform: scale(1.05); box-shadow: 0 20px 40px rgba(0,0,0,0.4);">
                <div style="display: inline-block; padding: 5px 15px; border-radius: var(--radius-sm); font-size: 0.8rem; font-weight: 600; margin-bottom: 20px; background: var(--primary); color: var(--bg-dark);">STANDARD</div>
                <h2 style="font-size: 2.5rem; margin-bottom: 10px;">$210<span style="font-size: 1rem; color: var(--text-muted);"> / MONTH</span></h2>
                <p class="text-muted" style="margin-bottom: 30px; font-size: 0.9rem;">Determine the Best Pricing Strategy For Your Business.</p>
                <ul style="margin-bottom: 30px; color: var(--text-muted); font-size: 0.9rem; line-height: 2;">
                    <li>Software Development</li>
                    <li>Web Development</li>
                    <li>Digital Marketing</li>
                    <li>Graphic Design</li>
                    <li>24/7 Support</li>
                </ul>
                <a href="#" class="btn btn-primary" style="width: 100%;">CHOOSE PLAN</a>
            </div>

            <!-- Premium Plan -->
            <div style="background: var(--bg-card); padding: 50px 30px; border-radius: var(--radius-md); text-align: center; border: 1px solid var(--border-color);">
                <div style="display: inline-block; padding: 5px 15px; border-radius: var(--radius-sm); font-size: 0.8rem; font-weight: 600; margin-bottom: 20px; background: rgba(255,255,255,0.1);">PREMIUM</div>
                <h2 style="font-size: 2.5rem; margin-bottom: 10px;">$373<span style="font-size: 1rem; color: var(--text-muted);"> / MONTH</span></h2>
                <p class="text-muted" style="margin-bottom: 30px; font-size: 0.9rem;">Determine the Best Pricing Strategy For Your Business.</p>
                <ul style="margin-bottom: 30px; color: var(--text-muted); font-size: 0.9rem; line-height: 2;">
                    <li>Software Development</li>
                    <li>Web Development</li>
                    <li>Digital Marketing</li>
                    <li>Graphic Design</li>
                    <li>24/7 Support</li>
                </ul>
                <a href="#" class="btn btn-outline" style="width: 100%;">CHOOSE PLAN</a>
            </div>
        </div>
    </div>
</section>

<!-- Partners section -->
<section style="padding: 40px 0; border-top: 1px solid var(--border-color); border-bottom: 1px solid var(--border-color);">
    <div class="container" style="display: flex; justify-content: space-around; align-items: center; flex-wrap: wrap; gap: 30px; opacity: 0.5;">
        <h3 style="font-family: serif; font-style: italic; margin: 0;">HOT DOG</h3>
        <h3 style="font-family: sans-serif; font-weight: 800; letter-spacing: 2px; margin: 0;">AMERICAN</h3>
        <h3 style="font-family: serif; font-weight: 300; margin: 0;">THE CUPCAKE</h3>
        <h3 style="font-family: sans-serif; font-weight: 200; letter-spacing: 5px; margin: 0;">CALIFORNIA</h3>
    </div>
</section>

<!-- Latest News Section -->
<section>
    <div class="container">
        <h2 class="section-title">Latest News</h2>
        <p class="section-subtitle">Must explain to you how all this mistaken idea pleasure born and give you a complete account</p>

        <div class="grid-3">
            <div style="background: var(--bg-card); border-radius: var(--radius-md); overflow: hidden;">
                <div style="height: 200px; background: url('https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&q=80') center/cover;"></div>
                <div style="padding: 25px;">
                    <div class="text-muted" style="font-size: 0.8rem; margin-bottom: 15px;">24 JUN 2025</div>
                    <h3 style="font-size: 1.2rem; margin-bottom: 15px; line-height: 1.4;">The standard chunk of used since interested.</h3>
                    <a href="blog.php" style="color: var(--primary); font-size: 0.9rem; font-weight: 500;">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <div style="background: var(--bg-card); border-radius: var(--radius-md); overflow: hidden;">
                <div style="height: 200px; background: url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80') center/cover;"></div>
                <div style="padding: 25px;">
                    <div class="text-muted" style="font-size: 0.8rem; margin-bottom: 15px;">24 JUN 2025</div>
                    <h3 style="font-size: 1.2rem; margin-bottom: 15px; line-height: 1.4;">Have evolved over the years sometimes accident.</h3>
                    <a href="blog.php" style="color: var(--primary); font-size: 0.9rem; font-weight: 500;">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <div style="background: var(--bg-card); border-radius: var(--radius-md); overflow: hidden;">
                <div style="height: 200px; background: url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80') center/cover;"></div>
                <div style="padding: 25px;">
                    <div class="text-muted" style="font-size: 0.8rem; margin-bottom: 15px;">24 JUN 2025</div>
                    <h3 style="font-size: 1.2rem; margin-bottom: 15px; line-height: 1.4;">The internet tend to repeat predefined chunks.</h3>
                    <a href="blog.php" style="color: var(--primary); font-size: 0.9rem; font-weight: 500;">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to action footer banner -->
<section style="padding: 0;">
    <div style="background: #FF4757; padding: 60px 0;">
        <div class="container grid-2" style="align-items: center;">
            <h2 style="font-size: 2.5rem; margin: 0;">Send me a message<br>and make something together.</h2>
            <div style="text-align: right;">
                <a href="contact.php" class="btn" style="background: var(--bg-dark); color: var(--text-main);">Contact Us <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
