<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aeron Salinas - Web Developer & Mobile App Developer</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar">
        <div class="container nav-container">
            <a href="#" class="logo">//A<span style="color: white;">eron</span></a>
            
            <div class="hamburger">
                <i class="fas fa-bars"></i>
            </div>

            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <div class="menu-overlay"></div>

    <section class="hero" id="home">
        <div class="container hero-content">
            <h1><span style="font-weight: 700;">Hello</span>, I'm <span class="text-laravel">Aeron Salinas</span></h1>
            <h1>I'm a <span class="text-laravel" id="typewriter"></span><span class="cursor">|</span></h1>
            <p>I specialize in building websites using PHP and the Laravel framework.</p>
            <div class="hero-buttons">
                <a href="#projects" class="btn btn-primary">View My Projects</a>
                <a href="#resume" class="btn btn-outline">Resume</a>
            </div>
            
            <div class="social-links hero-socials">
                <a href="https://github.com/aeronsal" target="_blank" class="social-icon" aria-label="GitHub">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://www.linkedin.com/in/aeron-s-b95a82122/" target="_blank" class="social-icon" aria-label="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="https://www.facebook.com/xyuic" target="_blank" class="social-icon" aria-label="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </div>
        </div>
    </section>

    <section class="about section" id="about">
        <div class="container">
            <h2 class="section-title">About Me</h2>
            
            <div class="about-grid">
                <div class="about-image glass-panel">
                    <img src="{{ asset('images/aeron.png') }}" alt="Aeron Salinas" class="profile-img">
                </div>
                
                <div class="about-text glass-panel">
                <p>I am currently specializing in Web and Mobile Application development at the <b>FEU Institute of Technology</b> in the Philippines. I am a firm believer in learning by doing, which is why I have dedicated my time to building a diverse portfolio of projects aimed at sharpening my technical skills and solving real-world problems.</p>
                <br>
                <p>I am now seeking an IT internship where I can apply my programming skills to deliver efficient, high-quality results. Beyond the code, I bring a unique edge to technical teams through my background in public relations and communication, allowing me to thrive in collaborative environments and bridge the gap between technical tasks and team goals. As an adaptable learner, I am dedicated to growing my expertise while contributing to the continuous improvement of your company's services.</p>
                </div>
            </div>

        </div>
    </section>

    <section class="skills section" id="skills">
        <div class="container">
            <h2 class="section-title">My Tech Stack</h2>

            <div class="skill-category">
                <h3 class="category-title">Website Development</h3>
                <div class="skills-grid">
                    
                    <div class="skill-card" data-card>
                        <div class="skill-card-inner glass-panel">
                            <i class="fab fa-html5 skill-icon" style="color: #E34F26;"></i>
                            <h3>HTML</h3>
                        </div>
                    </div>

                    <div class="skill-card" data-card>
                        <div class="skill-card-inner glass-panel">
                            <i class="fab fa-css3-alt skill-icon" style="color: #1572B6;"></i>
                            <h3>CSS</h3>
                        </div>
                    </div>

                    <div class="skill-card" data-card>
                        <div class="skill-card-inner glass-panel">
                            <i class="fab fa-js skill-icon" style="color: #F7DF1E;"></i>
                            <h3>JavaScript</h3>
                        </div>
                    </div>

                    <div class="skill-card" data-card>
                        <div class="skill-card-inner glass-panel">
                            <i class="fab fa-php skill-icon" style="color: #777BB4;"></i>
                            <h3>PHP</h3>
                        </div>
                    </div>

                    <div class="skill-card" data-card>
                        <div class="skill-card-inner glass-panel">
                            <i class="fab fa-laravel skill-icon" style="color: #FF2D20;"></i>
                            <h3>Laravel</h3>
                        </div>
                    </div>

                    <div class="skill-card" data-card>
                        <div class="skill-card-inner glass-panel">
                            <i class="fas fa-fire skill-icon" style="color: #EE4323;"></i>
                            <h3>CodeIgniter</h3>
                        </div>
                    </div>

                </div>
            </div>

            <div class="skill-category">
                <h3 class="category-title">Mobile Development</h3>
                <div class="skills-grid">
                    
                    <div class="skill-card" data-card>
                        <div class="skill-card-inner glass-panel">
                            <i class="fab fa-android skill-icon" style="color: #3DDC84;"></i>
                            <h3>Kotlin</h3>
                        </div>
                    </div>

                    <div class="skill-card" data-card>
                        <div class="skill-card-inner glass-panel">
                            <i class="fab fa-java skill-icon" style="color: #5382A1;"></i>
                            <h3>Java</h3>
                        </div>
                    </div>

                </div>
            </div>

            <div class="skill-category">
                <h3 class="category-title">Database</h3>
                <div class="skills-grid">
                    
                    <div class="skill-card" data-card>
                        <div class="skill-card-inner glass-panel">
                            <i class="fas fa-database skill-icon" style="color: #4479A1;"></i>
                            <h3>MySQL</h3>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="projects section" id="projects">
        <div class="container">
            <h2 class="section-title">My Projects</h2>
            <div class="projects-grid">
                
                <div class="project-card glass-panel" data-card="flat">
                    <div class="project-image">
                        <img src="{{ asset('images/project1.png') }}" alt="Abot-Tanaw Website" class="project-img">
                    </div>
                    <div class="project-info">
                        <h3>Abot-Tanaw Case Management System Website</h3>
                        <p>Advanced case management system designed to improve operational efficiency and service delivery for Pangarap Foundation. Creating a positive future for street children and their families through comprehensive digital solutions.</p>
                        <div class="project-tags">
                            <span>CodeIgniter</span>
                            <span>HTML5</span>
                            <span>CSS3</span>
                            <span>JavaScript</span>
                            <span>PHP</span>
                            <span>MySQL</span>
                            <!-- <span>REST API</span> -->
                        </div>
                        <div class="project-actions">
                            <a href="https://lime-sandpiper-617271.hostingersite.com/" class="btn-project" target="_blank">
                                <i class="fas fa-link"></i> Live Demo
                            </a>
                        </div>
                    </div>
                </div>

                <div class="project-card glass-panel" data-card="flat">
                    <div class="project-image">
                        <img src="{{ asset('images/project2.png') }}" alt="Abot-Tanaw Mobile" class="project-img">
                    </div>
                    <div class="project-info">
                        <h3>Abot-Tanaw Case Management System for Mobile</h3>
                        <p>Complementing the Abot-Tanaw Case Management System web platform is a dedicated mobile application integrated with Optical Character Recognition (OCR) technology. This mobile application allows staff to easily digitize traditional paper files, streamlining data entry and ensuring that critical historical records are securely stored and protected from physical loss.</p>
                        <div class="project-tags">
                            <span>Kotlin</span> 
                            <span>Java</span>
                            <!-- <span>REST API</span> -->
                        </div>
                        <div class="project-actions">
                        </div>
                    </div>
                </div>

                <div class="project-card glass-panel" data-card="flat">
                    <div class="project-image">
                        <img src="{{ asset('images/project3.png') }}" alt="Abigail Salinas | Creative Portfolio" class="project-img">
                    </div>
                    <div class="project-info">
                        <h3>Multimedia Artist & Graphic Designer Portfolio</h3>
                        <p>This portfolio showcases the work of Abigail Salinas, a versatile Graphic Designer, Artist, and Multimedia Artist. The site serves as a comprehensive digital gallery, illustrating her ability to merge traditional artistry with modern digital techniques across various mediums.</p>
                        <div class="project-tags">
                            <span>Laravel</span>
                            <span>HTML5</span>
                            <span>CSS3</span>
                            <span>JavaScript</span>
                            <span>PHP</span>
                        </div>
                        <div class="project-actions">
                            <a href="https://abigailsalinas.site/" class="btn-project" target="_blank">
                                <i class="fas fa-link"></i> Live Demo
                            </a>
                        </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="more-projects">
                <p>More projects to be added soon <span class="loading-dots">...</span></p>
            </div>
        </div>
    </section>

    <section class="contact section" id="contact">
        <div class="container">
            <h2 class="section-title">Get In Touch</h2>
            <p style="text-align: center; margin-bottom: 2rem;">Interested in working together? Let's build something great.</p>
            
            <div id="form-message"></div>

            <form class="contact-form glass-panel" action="{{ route('contact.send') }}" method="POST" id="ajax-contact-form">
                @csrf <div class="form-group">
                    <input type="text" name="name" placeholder="Your Name" required>
                </div>
                
                <div class="form-group">
                    <input type="email" name="email" placeholder="Your Email" required>
                </div>
                
                <div class="form-group">
                    <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary btn-block" id="submit-btn">Send Message</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="container footer-container">
            <div class="social-links">
                <a href="https://github.com/aeronsal" target="_blank" class="social-icon"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/aeron-s-b95a82122/" target="_blank" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://www.facebook.com/xyuic" target="_blank" class="social-icon"><i class="fab fa-facebook-f"></i></a>
            </div>
            <p>&copy; {{ date('Y') }} Aeron Salinas. All Rights Reserved.</p>
        </div>
    </footer>

    <div class="cursorDot" id="cursorDot" aria-hidden="true"></div>
    <svg class="cursorSvg" id="cursorSvg" aria-hidden="true">
        <path class="cursorGlow" id="cursorGlow"></path>
        <path class="cursorStroke" id="cursorStroke"></path>
    </svg>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // --- Navigation Scroll Logic (Floating to Fixed) ---
            const navbar = document.querySelector('.navbar');
            
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });

            // --- Active Link Scrollspy Logic ---
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-links a');

            window.addEventListener('scroll', () => {
                let current = '';

                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    // Check if the scroll position is currently inside this section
                    // We divide height by 3 so it triggers slightly before you hit the exact top
                    if (scrollY >= (sectionTop - sectionHeight / 3)) {
                        current = section.getAttribute('id');
                    }
                });

                // Remove active class from all links, then add to the current one
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href').includes(current)) {
                        link.classList.add('active');
                    }
                });
            });

            // --- Typewriter Effect Logic ---
            const words = ["Web Developer", "Mobile App Developer"];
            let wordIndex = 0;
            let charIndex = 0;
            let isDeleting = false;
            const typewriterElement = document.getElementById("typewriter");

            function typeEffect() {
                const currentWord = words[wordIndex];
                
                if (isDeleting) {
                    typewriterElement.textContent = currentWord.substring(0, charIndex - 1);
                    charIndex--;
                } else {
                    typewriterElement.textContent = currentWord.substring(0, charIndex + 1);
                    charIndex++;
                }

                let typeSpeed = isDeleting ? 50 : 100;

                if (!isDeleting && charIndex === currentWord.length) {
                    typeSpeed = 2000; 
                    isDeleting = true;
                } 
                else if (isDeleting && charIndex === 0) {
                    isDeleting = false;
                    wordIndex = (wordIndex + 1) % words.length; 
                    typeSpeed = 500; 
                }

                setTimeout(typeEffect, typeSpeed);
            }

            setTimeout(typeEffect, 500);

            // --- AJAX Contact Form Logic ---
            const contactForm = document.getElementById('ajax-contact-form');
            const formMessage = document.getElementById('form-message');
            const submitBtn = document.getElementById('submit-btn');

            if (contactForm) {
                contactForm.addEventListener('submit', async function(e) {
                    e.preventDefault(); // Prevents the hard page reload!

                    // 1. Clear old messages & errors
                    formMessage.innerHTML = '';
                    document.querySelectorAll('.error-text').forEach(el => el.remove());
                    
                    // 2. Button loading state
                    const originalBtnText = submitBtn.innerHTML;
                    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
                    submitBtn.disabled = true;

                    try {
                        // 3. Send data to Laravel using Fetch
                        const response = await fetch(this.action, {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                                'Accept': 'application/json', // Tells Laravel to return JSON
                                'X-Requested-With': 'XMLHttpRequest'
                            },
                            body: new FormData(this)
                        });

                        const data = await response.json();

                        if (!response.ok) {
                            // 4. Handle Validation Errors (Laravel returns status 422)
                            if (response.status === 422) {
                                for (const [field, messages] of Object.entries(data.errors)) {
                                    const input = contactForm.querySelector(`[name="${field}"]`);
                                    if (input) {
                                        const errorSpan = document.createElement('span');
                                        errorSpan.className = 'error-text';
                                        errorSpan.style.color = 'var(--laravel-red)';
                                        errorSpan.style.fontSize = '0.85rem';
                                        errorSpan.style.display = 'block';
                                        errorSpan.style.marginTop = '0.5rem';
                                        errorSpan.textContent = messages[0]; // Show the first error
                                        input.parentElement.appendChild(errorSpan);
                                    }
                                }
                            } else {
                                throw new Error('Something went wrong on the server.');
                            }
                        } else {
                            // 5. Handle Success
                            contactForm.reset();
                            formMessage.innerHTML = `
                                <div style="background: rgba(46, 204, 113, 0.2); border: 1px solid #2ecc71; color: #2ecc71; padding: 1rem; border-radius: 8px; text-align: center; margin-bottom: 1.5rem;">
                                    ${data.success}
                                </div>
                            `;
                        }
                    } catch (error) {
                        formMessage.innerHTML = `
                            <div style="background: rgba(255, 45, 32, 0.2); border: 1px solid var(--laravel-red); color: var(--laravel-red); padding: 1rem; border-radius: 8px; text-align: center; margin-bottom: 1.5rem;">
                                Oops! Something went wrong. Please try again.
                            </div>
                        `;
                    } finally {
                        // Restore button state
                        submitBtn.innerHTML = originalBtnText;
                        submitBtn.disabled = false;
                    }
                });
            }
        });

        // --- Spotlight Hover Effect Logic ---
            const glassPanels = document.querySelectorAll('.glass-panel');

            glassPanels.forEach(panel => {
                panel.addEventListener('mousemove', function(e) {
                    // getBoundingClientRect ensures accurate coordinates even when the page is scrolled
                    const rect = panel.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;

                    panel.style.setProperty('--x', x + 'px');
                    panel.style.setProperty('--y', y + 'px');
                });
            });

            // --- 3D Morphing Cursor & Card Tilt Logic ---
            const isTouchDevice = matchMedia("(hover:none), (pointer:coarse)").matches;
            
            if (!isTouchDevice) {
                const dot = document.getElementById("cursorDot");
                const svg = document.getElementById("cursorSvg");
                const glow = document.getElementById("cursorGlow");
                const stroke = document.getElementById("cursorStroke");
                const cards = [...document.querySelectorAll("[data-card]")]; 

                cards.forEach((card) => {
                    // We only need the inner element for the 3D tilting skill cards
                    const inner = card.querySelector(".skill-card-inner");
                    card._inner = inner;
                    
                    // Check if we added 'flat' to the data attribute
                    const isFlat = card.getAttribute("data-card") === "flat";
                    card._isFlat = isFlat;

                    card.addEventListener("pointerenter", () => { 
                        hoverCard = card; 
                        // We completely removed the rule that hides the stroke, 
                        // so the white line and red glow will now show on ALL cards!
                    });
                    
                    card.addEventListener("pointerleave", () => {
                        if (hoverCard === card) hoverCard = null;
                        if (inner) inner.style.transform = `rotateX(0deg) rotateY(0deg) translateZ(0px)`;
                        
                        // Ensure it stays visible when resting
                        stroke.style.opacity = '1'; 
                    });
                });

                const DOT = 8, CIRCLE_R = 14, PAD = 12, PERSPECTIVE = 900, Z_LIFT = 10;
                const LINE_STEPS = 40, ARC_STEPS = 20;
                const N = 4 * LINE_STEPS + 4 * ARC_STEPS - 7;
                
                const m = { x: innerWidth * 0.5, y: innerHeight * 0.5 };
                let hoverCard = null;
                const cur = new Array(N).fill(0).map(() => ({ x: m.x, y: m.y }));
                const tgt = new Array(N).fill(0).map(() => ({ x: m.x, y: m.y }));

                function resizeSVG() {
                    svg.setAttribute("width", innerWidth);
                    svg.setAttribute("height", innerHeight);
                    svg.setAttribute("viewBox", `0 0 ${innerWidth} ${innerHeight}`);
                }
                addEventListener("resize", resizeSVG, { passive: true });
                resizeSVG();

                function circlePoints(cx, cy, r, out) {
                    const TAU = Math.PI * 2, start = (-3 * Math.PI) / 4;
                    for (let i = 0; i < N; i++) {
                        const t = start - (i / N) * TAU;
                        out[i].x = cx + Math.cos(t) * r;
                        out[i].y = cy + Math.sin(t) * r;
                    }
                }

                function buildPathString(arr) {
                    let d = `M ${arr[0].x.toFixed(2)} ${arr[0].y.toFixed(2)}`;
                    for (let i = 1; i < arr.length; i++) d += ` L ${arr[i].x.toFixed(2)} ${arr[i].y.toFixed(2)}`;
                    return d + " Z";
                }

                function projectPoint(x, y, z, rxRad, ryRad) {
                    const cy = Math.cos(ryRad), sy = Math.sin(ryRad);
                    const cx = Math.cos(rxRad), sx = Math.sin(rxRad);
                    let x1 = x * cy + z * sy, z1 = -x * sy + z * cy;
                    let y2 = y * cx - z1 * sx, z2 = y * sx + z1 * cx;
                    const denom = PERSPECTIVE - z2;
                    const s = PERSPECTIVE / (denom < 1 ? 1 : denom);
                    return { x: x1 * s, y: y2 * s };
                }

                function addLineProjected(out, idx, x0, y0, x1, y1, steps, cx, cy, rx, ry, skipFirst) {
                    for (let i = 0; i < steps; i++) {
                        if (skipFirst && i === 0) continue;
                        const t = i / (steps - 1);
                        const p = projectPoint(x0 + (x1 - x0) * t, y0 + (y1 - y0) * t, Z_LIFT, rx, ry);
                        out[idx].x = cx + p.x; out[idx].y = cy + p.y; idx++;
                    }
                    return idx;
                }

                function addArcProjected(out, idx, ccx, ccy, r, a0, a1, steps, cx, cy, rx, ry, skipFirst) {
                    for (let i = 0; i < steps; i++) {
                        if (skipFirst && i === 0) continue;
                        const t = i / (steps - 1), a = a0 + (a1 - a0) * t;
                        const p = projectPoint(ccx + Math.cos(a) * r, ccy + Math.sin(a) * r, Z_LIFT, rx, ry);
                        out[idx].x = cx + p.x; out[idx].y = cy + p.y; idx++;
                    }
                    return idx;
                }

                function roundedRectProjectedPoints(out, cx, cy, w, h, rad, rxDeg, ryDeg) {
                    const rx = rxDeg * (Math.PI / 180), ry = ryDeg * (Math.PI / 180);
                    const hw = w * 0.5, hh = h * 0.5, r = Math.max(0, Math.min(rad, hw, hh));
                    const x0 = -hw, x1 = hw, y0 = -hh, y1 = hh;
                    let idx = 0;
                    idx = addLineProjected(out, idx, x0 + r, y0, x1 - r, y0, LINE_STEPS, cx, cy, rx, ry, false);
                    idx = addArcProjected(out, idx, x1 - r, y0 + r, r, -Math.PI / 2, 0, ARC_STEPS, cx, cy, rx, ry, true);
                    idx = addLineProjected(out, idx, x1, y0 + r, x1, y1 - r, LINE_STEPS, cx, cy, rx, ry, true);
                    idx = addArcProjected(out, idx, x1 - r, y1 - r, r, 0, Math.PI / 2, ARC_STEPS, cx, cy, rx, ry, true);
                    idx = addLineProjected(out, idx, x1 - r, y1, x0 + r, y1, LINE_STEPS, cx, cy, rx, ry, true);
                    idx = addArcProjected(out, idx, x0 + r, y1 - r, r, Math.PI / 2, Math.PI, ARC_STEPS, cx, cy, rx, ry, true);
                    idx = addLineProjected(out, idx, x0, y1 - r, x0, y0 + r, LINE_STEPS, cx, cy, rx, ry, true);
                    idx = addArcProjected(out, idx, x0 + r, y0 + r, r, Math.PI, (3 * Math.PI) / 2, ARC_STEPS, cx, cy, rx, ry, true);
                    const last = idx > 0 ? out[idx - 1] : { x: cx, y: cy };
                    while (idx < out.length) { out[idx].x = last.x; out[idx].y = last.y; idx++; }
                }

                cards.forEach((card) => {
                    const inner = card.querySelector(".skill-card-inner");
                    card._inner = inner;
                    card.addEventListener("pointerenter", () => { hoverCard = card; });
                    card.addEventListener("pointerleave", () => {
                        if (hoverCard === card) hoverCard = null;
                        inner.style.transform = `rotateX(0deg) rotateY(0deg) translateZ(0px)`;
                    });
                });

                addEventListener("pointermove", (e) => {
                    m.x = e.clientX; m.y = e.clientY;
                    dot.style.transform = `translate(${m.x - DOT / 2}px, ${m.y - DOT / 2}px)`;
                }, { passive: true });

                function tick() {
                    if (hoverCard) {
                        const r = hoverCard.getBoundingClientRect();
                        const px = Math.max(0, Math.min(1, (m.x - r.left) / (r.width || 1)));
                        const py = Math.max(0, Math.min(1, (m.y - r.top) / (r.height || 1)));
                        const tx = (px - 0.5) * 2, ty = (py - 0.5) * 2;
                        
                        // 2. If it's a flat card (Project), force angles to 0. Otherwise, calculate 3D tilt.
                        if (hoverCard._isFlat) {
                            hoverCard._rx = 0;
                            hoverCard._ry = 0;
                        } else {
                            hoverCard._rx = -ty * 10;
                            hoverCard._ry = tx * 12;
                        }

                        // 3. Only apply CSS transform if the card has an inner 3D layer
                        if (hoverCard._inner) {
                            hoverCard._inner.style.transform = `rotateX(${hoverCard._rx}deg) rotateY(${hoverCard._ry}deg) translateZ(${Z_LIFT}px)`;
                        }

                        const cx = r.left + r.width * 0.5, cy = r.top + r.height * 0.5;
                        
                        // 4. Determine which element's dimensions to trace
                        const targetEl = hoverCard._inner || hoverCard;
                        const w = targetEl.offsetWidth + PAD * 2;
                        const h = targetEl.offsetHeight + PAD * 2;
                        const rr = Math.min(16 + PAD, w * 0.5, h * 0.5);

                        // Calculate the SVG box points
                        roundedRectProjectedPoints(tgt, cx, cy, w, h, rr, hoverCard._rx, hoverCard._ry);
                    } else {
                        circlePoints(m.x, m.y, CIRCLE_R, tgt);
                    }

                    const a = hoverCard ? 0.24 : 0.18;
                    for (let i = 0; i < N; i++) {
                        cur[i].x += (tgt[i].x - cur[i].x) * a;
                        cur[i].y += (tgt[i].y - cur[i].y) * a;
                    }

                    const d = buildPathString(cur);
                    glow.setAttribute("d", d);
                    stroke.setAttribute("d", d);

                    requestAnimationFrame(tick);
                }

                circlePoints(m.x, m.y, CIRCLE_R, cur);
                requestAnimationFrame(tick);
            }

            // --- Mobile Hamburger Menu Logic ---
            const hamburger = document.querySelector('.hamburger');
            const navMenu = document.querySelector('.nav-links');
            const hamburgerIcon = document.querySelector('.hamburger i');
            const navItems = document.querySelectorAll('.nav-links a');
            const menuOverlay = document.querySelector('.menu-overlay'); // Grab the new overlay

            // Helper function to toggle everything cleanly
            function toggleMenu() {
                navMenu.classList.toggle('nav-active');
                menuOverlay.classList.toggle('active');
                
                if (navMenu.classList.contains('nav-active')) {
                    hamburgerIcon.classList.remove('fa-bars');
                    hamburgerIcon.classList.add('fa-times');
                    document.body.style.overflow = 'hidden'; // Prevents background scrolling
                } else {
                    hamburgerIcon.classList.remove('fa-times');
                    hamburgerIcon.classList.add('fa-bars');
                    document.body.style.overflow = 'auto'; // Restores scrolling
                }
            }

            // 1. Open/Close when hamburger is clicked
            hamburger.addEventListener('click', toggleMenu);

            // 2. Close when a link is clicked
            navItems.forEach(item => {
                item.addEventListener('click', () => {
                    if (navMenu.classList.contains('nav-active')) {
                        toggleMenu();
                    }
                });
            });

            // 3. Close when tapping the blurred background overlay
            menuOverlay.addEventListener('click', () => {
                if (navMenu.classList.contains('nav-active')) {
                    toggleMenu();
                }
            });
            
    </script>

</body>
</html>