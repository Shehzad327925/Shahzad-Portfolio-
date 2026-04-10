<?php include 'includes/header.php'; ?>

<!-- Page Title -->
<section style="background: url('https://images.unsplash.com/photo-1432821596592-e2c18b78144f?auto=format&fit=crop&q=80') center/cover; padding: 150px 0 100px; position: relative;">
    <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, rgba(10,10,10,0.7), var(--bg-dark));"></div>
    <div class="container" style="position: relative; z-index: 1; text-align: center;">
        <h1 style="font-size: 3.5rem; margin-bottom: 10px;">Latest News</h1>
        <p class="text-muted"><a href="index.php">Home</a> / Blog</p>
    </div>
</section>

<!-- Blog Content -->
<section>
    <div class="container pb-100">
        <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 40px;">
            
            <!-- Main Content -->
            <div>
                <!-- Post 1 -->
                <div style="margin-bottom: 50px; background: var(--bg-card); border-radius: var(--radius-md); overflow: hidden;">
                    <div style="height: 400px; background: url('https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&q=80') center/cover;"></div>
                    <div style="padding: 40px;">
                        <div style="display: flex; gap: 20px; margin-bottom: 20px; font-size: 0.9rem; color: var(--text-muted); flex-wrap: wrap;">
                            <span><i class="far fa-user" style="color: var(--primary);"></i> BY JENNY WATSON</span>
                            <span><i class="far fa-comments" style="color: var(--primary);"></i> COMMENTS 35</span>
                            <span><i class="far fa-calendar" style="color: var(--primary);"></i> 24 JUN 2025</span>
                        </div>
                        <h2 style="font-size: 2rem; margin-bottom: 20px;"><a href="#">The Internet tend to repeat predefined chunks.</a></h2>
                        <p class="text-muted" style="margin-bottom: 20px;">Consulting is a great career path if you want to build a broad skill set that includes everything from critical thinking and strategic planning to communications. If you love rising to a challenge.</p>
                        <a href="#" style="color: var(--text-main); font-weight: 500; border-bottom: 2px solid var(--primary); padding-bottom: 2px;">READ MORE..</a>
                    </div>
                </div>

                <!-- Post Quote -->
                <div style="margin-bottom: 50px; background: var(--bg-lighter); border-left: 5px solid var(--primary); padding: 40px; border-radius: 0 var(--radius-md) var(--radius-md) 0; position: relative;">
                    <i class="fas fa-quote-right" style="position: absolute; right: 40px; top: 40px; font-size: 5rem; color: rgba(255,255,255,0.05);"></i>
                    <div style="display: flex; gap: 20px; margin-bottom: 20px; font-size: 0.9rem; color: var(--text-muted); flex-wrap: wrap;">
                        <span><i class="far fa-user" style="color: var(--primary);"></i> BY JENNY WATSON</span>
                        <span><i class="far fa-comments" style="color: var(--primary);"></i> COMMENTS 35</span>
                        <span><i class="far fa-calendar" style="color: var(--primary);"></i> 24 JUN 2025</span>
                    </div>
                    <h2 style="font-size: 2rem; margin-bottom: 20px;"><a href="#">Have evolved over the years sometimes accident.</a></h2>
                    <p class="text-muted" style="margin-bottom: 20px;">Consulting is a great career path if you want to build a broad skill set that includes everything from critical thinking and strategic planning to communications. If you love rising to a challenge.</p>
                    <a href="#" style="color: var(--text-main); font-weight: 500; border-bottom: 2px solid var(--primary); padding-bottom: 2px;">READ MORE..</a>
                </div>

                <!-- Post 2 -->
                <div style="margin-bottom: 50px; background: var(--bg-card); border-radius: var(--radius-md); overflow: hidden;">
                    <div style="height: 400px; background: url('https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&q=80') center/cover; position: relative;">
                        <!-- Slider arrows -->
                        <div style="position: absolute; top: 50%; width: 100%; display: flex; justify-content: space-between; transform: translateY(-50%); padding: 0 20px;">
                            <div style="width: 40px; height: 40px; background: rgba(0,0,0,0.5); border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer;"><i class="fas fa-arrow-left"></i></div>
                            <div style="width: 40px; height: 40px; background: rgba(0,0,0,0.5); border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer;"><i class="fas fa-arrow-right"></i></div>
                        </div>
                    </div>
                    <div style="padding: 40px;">
                        <div style="display: flex; gap: 20px; margin-bottom: 20px; font-size: 0.9rem; color: var(--text-muted); flex-wrap: wrap;">
                            <span><i class="far fa-user" style="color: var(--primary);"></i> BY JENNY WATSON</span>
                            <span><i class="far fa-comments" style="color: var(--primary);"></i> COMMENTS 35</span>
                            <span><i class="far fa-calendar" style="color: var(--primary);"></i> 24 JUN 2025</span>
                        </div>
                        <h2 style="font-size: 2rem; margin-bottom: 20px;"><a href="#">The standard chunk of used since the interested.</a></h2>
                        <p class="text-muted" style="margin-bottom: 20px;">Consulting is a great career path if you want to build a broad skill set that includes everything from critical thinking and strategic planning to communications. If you love rising to a challenge.</p>
                        <a href="#" style="color: var(--text-main); font-weight: 500; border-bottom: 2px solid var(--primary); padding-bottom: 2px;">READ MORE..</a>
                    </div>
                </div>
                
                <!-- Pagination -->
                <div style="display: flex; gap: 10px;">
                    <a href="#" style="width: 40px; height: 40px; border-radius: var(--radius-sm); background: var(--bg-lighter); display: flex; align-items: center; justify-content: center; border: 1px solid var(--border-color);"><i class="fas fa-chevron-left"></i></a>
                    <a href="#" style="width: 40px; height: 40px; border-radius: var(--radius-sm); background: var(--primary); color: var(--bg-dark); font-weight: 600; display: flex; align-items: center; justify-content: center;">1</a>
                    <a href="#" style="width: 40px; height: 40px; border-radius: var(--radius-sm); background: var(--bg-lighter); display: flex; align-items: center; justify-content: center; border: 1px solid var(--border-color);">2</a>
                    <a href="#" style="width: 40px; height: 40px; border-radius: var(--radius-sm); background: var(--bg-lighter); display: flex; align-items: center; justify-content: center; border: 1px solid var(--border-color);">3</a>
                    <a href="#" style="width: 40px; height: 40px; border-radius: var(--radius-sm); background: var(--bg-lighter); display: flex; align-items: center; justify-content: center; border: 1px solid var(--border-color);"><i class="fas fa-chevron-right"></i></a>
                </div>
            </div>

            <!-- Sidebar -->
            <div>
                <!-- Author Widget -->
                <div style="background: var(--bg-lighter); padding: 40px 30px; border-radius: var(--radius-md); text-align: center; margin-bottom: 40px;">
                    <img src="https://ui-avatars.com/api/?name=Jenny+Watson&size=150&background=1a1a1a&color=fff" alt="Jenny Watson" style="width: 100px; height: 100px; border-radius: 50%; margin: 0 auto 20px;">
                    <h3 style="margin-bottom: 15px;">Jenny Watson</h3>
                    <p class="text-muted" style="font-size: 0.9rem; margin-bottom: 20px;">Hi! beautiful people. I'm an author of this blog. Read our post - stay with us</p>
                    <div class="social-links" style="justify-content: center;">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div>

                <!-- Search -->
                <div style="margin-bottom: 40px; position: relative;">
                    <input type="text" placeholder="Search Post.." style="width: 100%; padding: 15px 20px; background: var(--bg-lighter); border: 1px solid var(--border-color); border-radius: var(--radius-sm); color: var(--text-main); outline: none;">
                    <button style="position: absolute; right: 0; top: 0; height: 100%; padding: 0 20px; background: var(--primary); border: none; border-radius: 0 var(--radius-sm) var(--radius-sm) 0; color: var(--bg-dark); cursor: pointer;"><i class="fas fa-search"></i></button>
                </div>

                <!-- Categories -->
                <div style="margin-bottom: 40px;">
                    <h3 style="margin-bottom: 20px; font-size: 1.2rem;">Categories</h3>
                    <ul style="border-top: 1px solid var(--border-color);">
                        <li style="padding: 15px 0; border-bottom: 1px solid var(--border-color); display: flex; justify-content: space-between; align-items: center;">
                            <a href="#" class="text-muted">Web Development</a> <span style="color: var(--primary);">5</span>
                        </li>
                        <li style="padding: 15px 0; border-bottom: 1px solid var(--border-color); display: flex; justify-content: space-between; align-items: center;">
                            <a href="#" class="text-muted">App Development</a> <span style="color: var(--primary);">7</span>
                        </li>
                        <li style="padding: 15px 0; border-bottom: 1px solid var(--border-color); display: flex; justify-content: space-between; align-items: center;">
                            <a href="#" class="text-muted">Software Development</a> <span style="color: var(--primary);">3</span>
                        </li>
                        <li style="padding: 15px 0; border-bottom: 1px solid var(--border-color); display: flex; justify-content: space-between; align-items: center;">
                            <a href="#" class="text-muted">Social Media Marketing</a> <span style="color: var(--primary);">8</span>
                        </li>
                        <li style="padding: 15px 0; border-bottom: 1px solid var(--border-color); display: flex; justify-content: space-between; align-items: center;">
                            <a href="#" class="text-muted">Graphic Design</a> <span style="color: var(--primary);">6</span>
                        </li>
                        <li style="padding: 15px 0; border-bottom: 1px solid var(--border-color); display: flex; justify-content: space-between; align-items: center;">
                            <a href="#" class="text-muted">Brand Identity</a> <span style="color: var(--primary);">2</span>
                        </li>
                    </ul>
                </div>

                <!-- Related Posts -->
                <div style="margin-bottom: 40px;">
                    <h3 style="margin-bottom: 20px; font-size: 1.2rem;">Related Posts</h3>
                    
                    <div style="display: flex; gap: 15px; margin-bottom: 20px;">
                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&q=80&w=80&h=80" style="width: 80px; height: 80px; object-fit: cover; border-radius: var(--radius-sm);" alt="thumb">
                        <div>
                            <h4 style="font-size: 0.9rem; margin-bottom: 5px;"><a href="#">The internet tend to repeat predefined chunks.</a></h4>
                            <span class="text-muted" style="font-size: 0.8rem;">16 Jun 2025</span>
                        </div>
                    </div>
                    
                    <div style="display: flex; gap: 15px; margin-bottom: 20px;">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80&w=80&h=80" style="width: 80px; height: 80px; object-fit: cover; border-radius: var(--radius-sm);" alt="thumb">
                        <div>
                            <h4 style="font-size: 0.9rem; margin-bottom: 5px;"><a href="#">Have evolved over the years sometimes accident.</a></h4>
                            <span class="text-muted" style="font-size: 0.8rem;">23 May 2025</span>
                        </div>
                    </div>
                    
                    <div style="display: flex; gap: 15px; margin-bottom: 20px;">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=80&h=80" style="width: 80px; height: 80px; object-fit: cover; border-radius: var(--radius-sm);" alt="thumb">
                        <div>
                            <h4 style="font-size: 0.9rem; margin-bottom: 5px;"><a href="#">The standard chunk of used since the interested.</a></h4>
                            <span class="text-muted" style="font-size: 0.8rem;">12 Apr 2025</span>
                        </div>
                    </div>
                </div>

                <!-- Instagram -->
                <div style="margin-bottom: 40px;">
                    <h3 style="margin-bottom: 20px; font-size: 1.2rem;">Instagram</h3>
                    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px;">
                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&q=80&w=150&h=150" alt="Insta" style="border-radius: var(--radius-sm);">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80&w=150&h=150" alt="Insta" style="border-radius: var(--radius-sm);">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=150&h=150" alt="Insta" style="border-radius: var(--radius-sm);">
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&q=80&w=150&h=150" alt="Insta" style="border-radius: var(--radius-sm);">
                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&q=80&w=150&h=150" alt="Insta" style="border-radius: var(--radius-sm);">
                        <img src="https://images.unsplash.com/photo-1587145820266-a5951ee6f620?auto=format&fit=crop&q=80&w=150&h=150" alt="Insta" style="border-radius: var(--radius-sm);">
                    </div>
                </div>

                <!-- Tags -->
                <div>
                    <h3 style="margin-bottom: 20px; font-size: 1.2rem;">Tags</h3>
                    <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                        <a href="#" style="padding: 5px 15px; border: 1px solid var(--border-color); border-radius: var(--radius-sm); font-size: 0.8rem; color: var(--text-muted); transition: var(--transition);" onmouseover="this.style.background='var(--primary)'; this.style.color='var(--bg-dark)'; this.style.borderColor='var(--primary)'" onmouseout="this.style.background='transparent'; this.style.color='var(--text-muted)'; this.style.borderColor='var(--border-color)'">Wordpress</a>
                        <a href="#" style="padding: 5px 15px; border: 1px solid var(--border-color); border-radius: var(--radius-sm); font-size: 0.8rem; color: var(--text-muted); transition: var(--transition);" onmouseover="this.style.background='var(--primary)'; this.style.color='var(--bg-dark)'; this.style.borderColor='var(--primary)'" onmouseout="this.style.background='transparent'; this.style.color='var(--text-muted)'; this.style.borderColor='var(--border-color)'">HTML</a>
                        <a href="#" style="padding: 5px 15px; border: 1px solid var(--border-color); border-radius: var(--radius-sm); font-size: 0.8rem; color: var(--text-muted); transition: var(--transition);" onmouseover="this.style.background='var(--primary)'; this.style.color='var(--bg-dark)'; this.style.borderColor='var(--primary)'" onmouseout="this.style.background='transparent'; this.style.color='var(--text-muted)'; this.style.borderColor='var(--border-color)'">CSS</a>
                        <a href="#" style="padding: 5px 15px; border: 1px solid var(--border-color); border-radius: var(--radius-sm); font-size: 0.8rem; color: var(--text-muted); transition: var(--transition);" onmouseover="this.style.background='var(--primary)'; this.style.color='var(--bg-dark)'; this.style.borderColor='var(--primary)'" onmouseout="this.style.background='transparent'; this.style.color='var(--text-muted)'; this.style.borderColor='var(--border-color)'">Graphic Design</a>
                        <a href="#" style="padding: 5px 15px; border: 1px solid var(--border-color); border-radius: var(--radius-sm); font-size: 0.8rem; color: var(--text-muted); transition: var(--transition);" onmouseover="this.style.background='var(--primary)'; this.style.color='var(--bg-dark)'; this.style.borderColor='var(--primary)'" onmouseout="this.style.background='transparent'; this.style.color='var(--text-muted)'; this.style.borderColor='var(--border-color)'">Theme Develop</a>
                        <a href="#" style="padding: 5px 15px; border: 1px solid var(--border-color); border-radius: var(--radius-sm); font-size: 0.8rem; color: var(--text-muted); transition: var(--transition);" onmouseover="this.style.background='var(--primary)'; this.style.color='var(--bg-dark)'; this.style.borderColor='var(--primary)'" onmouseout="this.style.background='transparent'; this.style.color='var(--text-muted)'; this.style.borderColor='var(--border-color)'">PSD Template</a>
                        <a href="#" style="padding: 5px 15px; border: 1px solid var(--border-color); border-radius: var(--radius-sm); font-size: 0.8rem; color: var(--text-muted); transition: var(--transition);" onmouseover="this.style.background='var(--primary)'; this.style.color='var(--bg-dark)'; this.style.borderColor='var(--primary)'" onmouseout="this.style.background='transparent'; this.style.color='var(--text-muted)'; this.style.borderColor='var(--border-color)'">Video</a>
                        <a href="#" style="padding: 5px 15px; border: 1px solid var(--border-color); border-radius: var(--radius-sm); font-size: 0.8rem; color: var(--text-muted); transition: var(--transition);" onmouseover="this.style.background='var(--primary)'; this.style.color='var(--bg-dark)'; this.style.borderColor='var(--primary)'" onmouseout="this.style.background='transparent'; this.style.color='var(--text-muted)'; this.style.borderColor='var(--border-color)'">Audio</a>
                        <a href="#" style="padding: 5px 15px; border: 1px solid var(--border-color); border-radius: var(--radius-sm); font-size: 0.8rem; color: var(--text-muted); transition: var(--transition);" onmouseover="this.style.background='var(--primary)'; this.style.color='var(--bg-dark)'; this.style.borderColor='var(--primary)'" onmouseout="this.style.background='transparent'; this.style.color='var(--text-muted)'; this.style.borderColor='var(--border-color)'">Plugin</a>
                        <a href="#" style="padding: 5px 15px; border: 1px solid var(--border-color); border-radius: var(--radius-sm); font-size: 0.8rem; color: var(--text-muted); transition: var(--transition);" onmouseover="this.style.background='var(--primary)'; this.style.color='var(--bg-dark)'; this.style.borderColor='var(--primary)'" onmouseout="this.style.background='transparent'; this.style.color='var(--text-muted)'; this.style.borderColor='var(--border-color)'">Photography</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
