// ─── MOBILE MENU + HEADER + ANCHOR SCROLL ──────────────────
document.addEventListener('DOMContentLoaded', () => {
    // Mobile menu toggle
    const mobileToggle = document.getElementById('mobile-toggle');
    const navLinks = document.getElementById('nav-links');

    if (mobileToggle) {
        mobileToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            const icon = mobileToggle.querySelector('i');
            if (navLinks.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
    }

    // Header shrink on scroll
    const header = document.querySelector('.header');
    if (header) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.style.padding = '15px 0';
                header.style.boxShadow = '0 5px 20px rgba(0,0,0,0.5)';
            } else {
                header.style.padding = '20px 0';
                header.style.boxShadow = 'none';
            }
        });
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                if (navLinks) navLinks.classList.remove('active');
                window.scrollTo({ top: target.offsetTop - 80, behavior: 'smooth' });
            }
        });
    });

    // Portfolio filtering
    const filterButtons = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');

    if (filterButtons.length > 0) {
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                filterButtons.forEach(btn => btn.classList.remove('active', 'btn-primary'));
                filterButtons.forEach(btn => btn.classList.add('btn-outline'));
                button.classList.remove('btn-outline');
                button.classList.add('active', 'btn-primary');

                const filterValue = button.getAttribute('data-filter');
                portfolioItems.forEach(item => {
                    if (filterValue === 'all' || item.classList.contains(filterValue)) {
                        item.style.display = 'block';
                        setTimeout(() => item.style.opacity = '1', 50);
                    } else {
                        item.style.opacity = '0';
                        setTimeout(() => item.style.display = 'none', 300);
                    }
                });
            });
        });
    }
});

// ─── CUSTOM CURSOR ─────────────────────────────────────────
const cursorDot = document.getElementById('cursor-dot');
const cursorOutline = document.getElementById('cursor-outline');

let mouseX = 0, mouseY = 0;
let outlineX = 0, outlineY = 0;
let cursorVisible = false;

window.addEventListener('mousemove', (e) => {
    mouseX = e.clientX;
    mouseY = e.clientY;

    // Show on first move
    if (!cursorVisible && cursorDot && cursorOutline) {
        cursorDot.classList.add('visible');
        cursorOutline.classList.add('visible');
        cursorVisible = true;
    }

    // Dot snaps instantly
    if (cursorDot) {
        cursorDot.style.left = mouseX + 'px';
        cursorDot.style.top = mouseY + 'px';
    }
});

// Outline trails with smooth lag
function animateOutline() {
    outlineX += (mouseX - outlineX) * 0.12;
    outlineY += (mouseY - outlineY) * 0.12;
    if (cursorOutline) {
        cursorOutline.style.left = outlineX + 'px';
        cursorOutline.style.top = outlineY + 'px';
    }
    requestAnimationFrame(animateOutline);
}
animateOutline();

// Expand on hover
document.querySelectorAll('a, button').forEach(el => {
    el.addEventListener('mouseenter', () => {
        if (cursorOutline) {
            cursorOutline.style.width = '64px';
            cursorOutline.style.height = '64px';
            cursorOutline.style.backgroundColor = 'rgba(0, 208, 132, 0.2)';
        }
    });
    el.addEventListener('mouseleave', () => {
        if (cursorOutline) {
            cursorOutline.style.width = '40px';
            cursorOutline.style.height = '40px';
            cursorOutline.style.backgroundColor = 'rgba(0, 208, 132, 0.08)';
        }
    });
});

// Native CSS smooth scroll is used (scroll-behavior: smooth in style.css)

// ─── EMAILJS CONTACT FORM ──────────────────────────────────
document.addEventListener('DOMContentLoaded', () => {
    if (typeof emailjs !== 'undefined') {
        emailjs.init("keKjV-1Za9A4B71jx");
    }

    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();

            const btnText = document.getElementById('btn-text');
            const btnSpinner = document.getElementById('btn-spinner');
            const statusMsg = document.getElementById('form-status');
            const submitBtn = document.getElementById('submit-btn');

            btnText.style.display = 'none';
            btnSpinner.style.display = 'block';
            submitBtn.disabled = true;
            statusMsg.style.display = 'none';

            emailjs.sendForm('service_wih01zd', 'template_co1y9uf', this)
                .then(() => {
                    statusMsg.textContent = "Message sent successfully!";
                    statusMsg.style.color = "#00D084";
                    statusMsg.style.display = 'block';
                    contactForm.reset();
                }, (error) => {
                    statusMsg.textContent = "Oops! Something went wrong.";
                    statusMsg.style.color = "#ff4757";
                    statusMsg.style.display = 'block';
                    console.log('EmailJS error:', error);
                }).finally(() => {
                    btnText.style.display = 'block';
                    btnSpinner.style.display = 'none';
                    submitBtn.disabled = false;
                    setTimeout(() => statusMsg.style.display = 'none', 5000);
                });
        });
    }
});
