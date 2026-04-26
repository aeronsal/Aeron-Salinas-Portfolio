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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar">
        <div class="container nav-container">
            <a href="#" class="logo" id="nav-logo">//A<span style="color: white;">eron</span></a>
            
            <div class="hamburger" id="nav-hamburger">
                <i class="fas fa-bars"></i>
            </div>

            <ul class="nav-links" id="main-nav-links" style="transition: opacity 0.3s ease;">
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>

            <div id="resume-nav-links" style="display: none; opacity: 0; transition: opacity 0.3s ease;">
                <button id="return-portfolio-btn" class="btn-project" style="background: transparent;" data-card="flat">
                    <i class="fas fa-arrow-left"></i> Return to Portfolio
                </button>
            </div>
        </div>
    </nav>

    <div class="menu-overlay"></div>

    <div id="main-content-wrapper" class="view-wrapper fade-in">
        <section class="hero" id="home">
            <div class="container hero-content" data-aos="fade-up" data-aos-duration="1000">
                <h1><span style="font-weight: 700;">Hello</span>, I'm <span class="text-laravel">Aeron Salinas</span></h1>
                <h1>I'm a <span class="text-laravel" id="typewriter"></span><span class="cursor">|</span></h1>
                <p>I specialize in building websites using PHP and the Laravel framework.</p>
                <div class="hero-buttons">
                    <a href="#projects" class="btn btn-primary" data-card="flat">View My Projects</a>
                    <button id="view-resume-btn" class="btn btn-outline" data-card="flat">View Resume</button>
                </div>
                
                </div>
        </section>

        <section class="about section" id="about">
            <div class="container">
                <h2 class="section-title" data-aos="fade-up">About Me</h2>
                
                <div class="about-grid" data-aos="fade-up" data-aos-delay="100">
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
                <h2 class="section-title" data-aos="fade-up">My Tech Stack</h2>

                <div class="skills-grid">
                    <x-skill-card icon="fab fa-html5" color="#E34F26" name="HTML" delay="0" />
                    <x-skill-card icon="fab fa-css3-alt" color="#1572B6" name="CSS" delay="100" />
                    <x-skill-card icon="fab fa-js" color="#F7DF1E" name="JavaScript" delay="200" />
                    <x-skill-card icon="fab fa-php" color="#777BB4" name="PHP" delay="300" />
                    <x-skill-card icon="fab fa-laravel" color="#FF2D20" name="Laravel" delay="400" />
                    <x-skill-card icon="fas fa-fire" color="#EE4323" name="CodeIgniter" delay="500" />
                    <x-skill-card icon="fab fa-git-alt" color="#F1502F" name="Git" delay="600" />
                </div>

                <div class="skill-category" data-aos="fade-up">
                    <h3 class="category-title" data-aos="fade-up">Mobile Development</h3>
                    <div class="skills-grid">
                        <x-skill-card icon="fab fa-android" color="#3DDC84" name="Kotlin" />
                        <x-skill-card icon="fab fa-java" color="#5382A1" name="Java" />
                    </div>
                </div>

                <div class="skill-category" data-aos="fade-up">
                    <h3 class="category-title" data-aos="fade-up">Database</h3>
                    <div class="skills-grid">
                        <x-skill-card icon="fas fa-database" color="#4479A1" name="MySQL" />
                    </div>
                </div>

            </div>
        </section>

        <section class="projects section" id="projects">
            <div class="container">
                <h2 class="section-title" data-aos="fade-up">My Projects</h2>
                <div class="projects-grid">
                    <x-project-card 
                        image="images/project1.png" 
                        title="Abot-Tanaw Case Management System Website" 
                        description="Advanced case management system designed to improve operational efficiency and service delivery for Pangarap Foundation."
                        :tags="['CodeIgniter', 'HTML5', 'CSS3', 'JavaScript', 'PHP', 'MySQL']"
                        link="https://lime-sandpiper-617271.hostingersite.com/"
                    />

                    <x-project-card 
                        image="images/project2.png" 
                        title="Abot-Tanaw Case Management System for Mobile" 
                        description="Complementing the web platform is a dedicated mobile application integrated with Optical Character Recognition (OCR) technology."
                        :tags="['Kotlin', 'Java']"
                    />

                    <x-project-card 
                        image="images/project3.png" 
                        title="Multimedia Artist & Graphic Designer Portfolio" 
                        description="I was commissioned to design and build a bespoke digital portfolio, a multi-disciplinary graphic designer and artist. The goal was to create a 'digital gallery' that seamlessly integrates her work across fine art, graphic design, and multimedia into one cohesive professional brand."
                        :tags="['Laravel', 'HTML5', 'CSS3', 'JavaScript', 'PHP']"
                        link="https://abigailsalinas.site/"
                    />
                </div>

                <div class="more-projects" data-aos="fade-up" data-aos-delay="200">
                    <p>More projects to be added soon <span class="loading-dots">...</span></p>
                </div>

            </div>
        </section>
    </div>

    <div id="resume-content-wrapper" class="view-wrapper fade-out" style="display: none; opacity: 0; padding-top: 120px; padding-bottom: 4rem;">
        <div class="container" style="max-width: 1000px;">
            <div class="glass-panel" style="border-radius: 16px; padding: 0;">
                <x-resume-content />
            </div>
        </div>
    </div>

    <section class="contact section" id="contact">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Get In Touch</h2>
            <p style="text-align: center; margin-bottom: 2rem;" data-aos="fade-up" data-aos-delay="200">Interested in working together? Let's build something great.</p>
            
            <div id="form-message"></div>

            <form class="contact-form glass-panel" action="{{ route('contact.send') }}" method="POST" id="ajax-contact-form" data-aos="fade-up">
                @csrf 
                
                <div style="display: none; visibility: hidden; position: absolute; left: -9999px;">
                    <label for="website_url">Leave this field blank if you are human:</label>
                    <input type="text" name="website_url" id="website_url" tabindex="-1" autocomplete="off">
                </div>
                
                <div class="form-group">
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

    @include('partials.cursor')

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/portfolio.js') }}"></script>

</body>
</html>