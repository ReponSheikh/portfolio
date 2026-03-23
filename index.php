<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repon Sheikh | Research & Development Engineer</title>
    <meta name="description" content="Personal portfolio of Repon Sheikh, an Electrical Engineer specializing in Hardware-Software Integration, Embedded Systems, and IoT.">
    
    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary-blue: #2563eb;
            --primary-blue-dark: #1d4ed8;
            --bg-light: #ffffff;
            --text-light: #1f2937;
            --secondary-bg-light: #f3f4f6;
            --accent-blue-light: #dbeafe;
            
            --bg-dark: #0f172a;
            --text-dark: #f8fafc;
            --secondary-bg-dark: #1e293b;
            --accent-blue-dark: #1d4ed8;
            
            --transition: all 0.3s ease;
            
            /* Current Theme Defaults */
            --bg-color: var(--bg-light);
            --text-color: var(--text-light);
            --secondary-bg: var(--secondary-bg-light);
            --accent-color: var(--primary-blue);
            --card-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
        }

        body.dark-mode {
            --bg-color: var(--bg-dark);
            --text-color: var(--text-dark);
            --secondary-bg: var(--secondary-bg-dark);
            --accent-color: var(--accent-blue-dark);
            --card-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.5);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
            line-height: 1.6;
            transition: var(--transition);
        }

        h1, h2, h3, h4 {
            font-weight: 700;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        ul {
            list-style: none;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* --- Header & Navigation --- */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: var(--bg-color);
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: var(--transition);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 80px;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--accent-color);
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            align-items: center;
        }

        .nav-links a {
            font-weight: 500;
            font-size: 0.9rem;
            opacity: 0.8;
            transition: var(--transition);
        }

        .nav-links a:hover, .nav-links a.active {
            opacity: 1;
            color: var(--accent-color);
        }

        #theme-toggle {
            cursor: pointer;
            font-size: 1.2rem;
            margin-left: 1rem;
            color: var(--accent-color);
        }

        .mobile-menu-btn {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* --- Sections common --- */
        section {
            padding: 100px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-title h2 {
            font-size: 2.5rem;
            position: relative;
            display: inline-block;
            margin-bottom: 1rem;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 4px;
            background-color: var(--accent-color);
            border-radius: 2px;
        }

        /* --- Hero Section --- */
        #home {
            height: 100vh;
            display: flex;
            align-items: center;
            background: linear-gradient(rgba(37, 99, 235, 0.05), rgba(37, 99, 235, 0.05));
        }

        .hero-content {
            max-width: 600px;
        }

        .hero-title {
            font-size: 1.2rem;
            color: var(--accent-color);
            font-weight: 600;
            margin-bottom: 0.5rem;
            display: block;
        }

        .hero-name {
            font-size: 4rem;
            line-height: 1.1;
            margin-bottom: 1.5rem;
        }

        .hero-tagline {
            font-size: 1.2rem;
            margin-bottom: 2.5rem;
            opacity: 0.9;
        }

        .btn-group {
            display: flex;
            gap: 1.5rem;
        }

        .btn {
            padding: 0.8rem 2rem;
            border-radius: 5px;
            font-weight: 600;
            transition: var(--transition);
            cursor: pointer;
            border: none;
        }

        .btn-primary {
            background-color: var(--accent-color);
            color: white;
        }

        .btn-primary:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }

        .btn-outline {
            border: 2px solid var(--accent-color);
            color: var(--accent-color);
            background: transparent;
        }

        .btn-outline:hover {
            background-color: var(--accent-color);
            color: white;
            transform: translateY(-2px);
        }

        /* --- About Section --- */
        #about .about-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .about-text p {
            margin-bottom: 1.5rem;
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }

        .skill-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            background: var(--secondary-bg);
            padding: 1rem;
            border-radius: 8px;
            box-shadow: var(--card-shadow);
        }

        .skill-item i {
            color: var(--accent-color);
            font-size: 1.5rem;
        }

        /* --- Projects Section --- */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .project-card {
            background: var(--secondary-bg);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            transition: var(--transition);
            display: flex;
            flex-direction: column;
        }

        .project-card:hover {
            transform: translateY(-10px);
        }

        .project-img {
            height: 200px;
            background: #cbd5e1;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: #64748b;
        }

        .project-info {
            padding: 1.5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .project-info h3 {
            margin-bottom: 0.5rem;
        }

        .project-info p {
            font-size: 0.9rem;
            opacity: 0.8;
            margin-bottom: 1rem;
        }

        .tech-stack {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
        }

        .tech-tag {
            background: var(--accent-blue-light);
            color: var(--primary-blue-dark);
            padding: 0.2rem 0.6rem;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: 500;
        }

        body.dark-mode .tech-tag {
            background: #1e293b;
            color: #38bdf8;
        }

        .project-links {
            margin-top: auto;
            display: flex;
            gap: 1rem;
        }

        .project-links a {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--accent-color);
        }

        /* --- Flow Diagram Section --- */
        .flow-diagram {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            gap: 2rem;
            margin-top: 3rem;
            position: relative;
        }

        .flow-block {
            background: var(--secondary-bg);
            border: 2px solid var(--accent-color);
            padding: 1.5rem;
            border-radius: 10px;
            width: 180px;
            text-align: center;
            box-shadow: var(--card-shadow);
            z-index: 2;
        }

        .flow-block i {
            display: block;
            margin-bottom: 0.5rem;
            font-size: 1.5rem;
            color: var(--accent-color);
        }

        .flow-arrow {
            font-size: 2rem;
            color: var(--accent-color);
            opacity: 0.5;
        }

        .integration-text {
            text-align: center;
            max-width: 800px;
            margin: 3rem auto 0;
        }

        /* --- AIDI Section --- */
        #aidi {
            background: var(--secondary-bg);
            text-align: center;
            border-radius: 20px;
            margin: 0 2rem;
        }

        .aidi-content {
            max-width: 700px;
            margin: 0 auto;
        }

        .aidi-goals {
            margin-top: 2rem;
            display: flex;
            justify-content: center;
            gap: 3rem;
            flex-wrap: wrap;
        }

        .goal-item {
            text-align: left;
        }

        .goal-item h4 {
            color: var(--accent-color);
            margin-bottom: 0.5rem;
        }

        /* --- Contact Section --- */
        .contact-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
        }

        .contact-info h3 {
            margin-bottom: 1rem;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .contact-item i {
            color: var(--accent-color);
            font-size: 1.2rem;
            width: 30px;
        }

        .contact-form {
            background: var(--secondary-bg);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: var(--card-shadow);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .form-group input, .form-group textarea {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #cbd5e1;
            border-radius: 5px;
            background: var(--bg-color);
            color: var(--text-color);
            font-family: inherit;
        }

        body.dark-mode .form-group input, body.dark-mode .form-group textarea {
            border-color: #334155;
        }

        /* --- Footer --- */
        footer {
            padding: 3rem 0;
            background: var(--secondary-bg);
            text-align: center;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-bottom: 1.5rem;
        }

        .social-links a {
            font-size: 1.5rem;
            transition: var(--transition);
        }

        .social-links a:hover {
            color: var(--accent-color);
            transform: scale(1.2);
        }

        .copyright {
            font-size: 0.9rem;
            opacity: 0.7;
        }

        /* --- Responsive Design --- */
        @media (max-width: 968px) {
            .hero-name {
                font-size: 3rem;
            }
            #about .about-wrapper, .contact-wrapper {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            .flow-arrow {
                transform: rotate(90deg);
                margin: 1rem 0;
            }
            .flow-diagram {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
                position: absolute;
                top: 80px;
                right: 0;
                width: 100%;
                background: var(--secondary-bg);
                flex-direction: column;
                padding: 1.5rem;
                text-align: center;
                gap: 1.5rem;
                box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1);
            }

            .nav-links.active {
                display: flex;
            }

            .mobile-menu-btn {
                display: block;
            }

            #theme-toggle {
                margin: 0;
            }
        }
    </style>
</head>
<body>

    <header>
        <div class="container nav-container">
            <nav>
                <a href="#home" class="logo">Repon Sheikh</a>
                
                <ul class="nav-links">
                    <li><a href="#home" class="nav-item active" data-target="home">Home</a></li>
                    <li><a href="#about" class="nav-item" data-target="about">About</a></li>
                    <li><a href="#projects" class="nav-item" data-target="projects">Projects</a></li>
                    <li><a href="#integration" class="nav-item" data-target="integration">Integration</a></li>
                    <li><a href="#contact" class="nav-item" data-target="contact">Contact</a></li>
                    <li><i class="fas fa-moon" id="theme-toggle" title="Toggle Dark/Light Mode"></i></li>
                </ul>

                <div class="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home">
        <div class="container">
            <div class="hero-content">
                <span class="hero-title">Embedded Systems & IoT Engineer</span>
                <h1 class="hero-name">Research & Development Engineer</h1>
                <p class="hero-tagline">I build intelligent systems where hardware meets software, specializing in end-to-end integration for modern automation and IoT solutions.</p>
                <div class="btn-group">
                    <a href="#projects" class="btn btn-primary">View Projects</a>
                    <a href="download_cv.php" class="btn btn-outline">Download CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="section-title">
                <h2>About Me</h2>
            </div>
            <div class="about-wrapper">
                <div class="about-text">
                    <p>I am a passionate Electrical Engineer with a focus on the synergy between physical electronics and digital intelligence. My work alternates between circuit board design and high-level software development, ensuring that both domains work in perfect harmony.</p>
                    <p>With experience in various microcontroller architectures and software stacks, I enjoy solving complex integration problems that bridge the gap between user interfaces and real-world sensors and actuators.</p>
                </div>
                <div class="skills-grid">
                    <div class="skill-item">
                        <i class="fas fa-microchip"></i>
                        <span>Embedded Systems (PIC, STM32, ESP)</span>
                    </div>
                    <div class="skill-item">
                        <i class="fab fa-python"></i>
                        <span>Python (Flask API)</span>
                    </div>
                    <div class="skill-item">
                        <i class="fas fa-network-wired"></i>
                        <span>IoT Systems & MQTT</span>
                    </div>
                    <div class="skill-item">
                        <i class="fas fa-project-diagram"></i>
                        <span>Circuit Design (PCB)</span>
                    </div>
                    <div class="skill-item">
                        <i class="fab fa-android"></i>
                        <span>Mobile Apps (Flutter)</span>
                    </div>
                    <div class="skill-item">
                        <i class="fas fa-vial"></i>
                        <span>R&D & Rapid Prototyping</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects">
        <div class="container">
            <div class="section-title">
                <h2>Featured Projects</h2>
            </div>
            <div class="projects-grid">
                <!-- Project 1 -->
                <div class="project-card">
                    <div class="project-img"><i class="fas fa-wifi"></i></div>
                    <div class="project-info">
                        <h3>WiFi-based IoT Control</h3>
                        <p>A comprehensive system to monitor and control industrial equipment remotely via a web interface.</p>
                        <div class="tech-stack">
                            <span class="tech-tag">ESP8266</span>
                            <span class="tech-tag">Flask</span>
                            <span class="tech-tag">C++</span>
                            <span class="tech-tag">Python</span>
                        </div>
                        <div class="project-links">
                            <a href="#">View Details</a>
                            <a href="#" target="_blank">Live Demo <i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Project 2 -->
                <div class="project-card">
                    <div class="project-img"><i class="fas fa-bolt"></i></div>
                    <div class="project-info">
                        <h3>PWM Power Control</h3>
                        <p>High-precision power management system using PIC microcontrollers for efficient energry distribution.</p>
                        <div class="tech-stack">
                            <span class="tech-tag">PIC MCU</span>
                            <span class="tech-tag">Assembly/C</span>
                            <span class="tech-tag">Circuit Design</span>
                        </div>
                        <div class="project-links">
                            <a href="#">View Details</a>
                            <a href="#" target="_blank">Live Demo <i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="project-card">
                    <div class="project-img"><i class="fas fa-tools"></i></div>
                    <div class="project-info">
                        <h3>CNC PCB Engraving</h3>
                        <p>Automated CNC system designed specifically for rapid PCB prototyping through precision engraving.</p>
                        <div class="tech-stack">
                            <span class="tech-tag">GRBL</span>
                            <span class="tech-tag">CNC Motors</span>
                            <span class="tech-tag">G-Code</span>
                        </div>
                        <div class="project-links">
                            <a href="#">View Details</a>
                            <a href="#" target="_blank">Live Demo <i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Integration Section -->
    <section id="integration">
        <div class="container">
            <div class="section-title">
                <h2>Hardware-Software Integration</h2>
            </div>
            
            <div class="flow-diagram">
                <div class="flow-block">
                    <i class="fas fa-thermometer-half"></i>
                    <span>Sensor</span>
                </div>
                <div class="flow-arrow"><i class="fas fa-long-arrow-alt-right"></i></div>
                <div class="flow-block">
                    <i class="fas fa-microchip"></i>
                    <span>Microcontroller</span>
                </div>
                <div class="flow-arrow"><i class="fas fa-long-arrow-alt-right"></i></div>
                <div class="flow-block">
                    <i class="fas fa-server"></i>
                    <span>Cloud Server</span>
                </div>
                <div class="flow-arrow"><i class="fas fa-long-arrow-alt-right"></i></div>
                <div class="flow-block">
                    <i class="fas fa-mobile-alt"></i>
                    <span>Mobile App</span>
                </div>
            </div>

            <div class="integration-text">
                <p>I specialize in building this full stack. From selecting the right physical sensors and writing the firmware for local processing, to developing reliable APIs and cloud infrastructure that powers intuitive mobile and web applications.</p>
            </div>
        </div>
    </section>

    <!-- AIDI Section -->
    <section id="aidi">
        <div class="container">
            <div class="section-title">
                <h2>AIDI – AI-Driven Data Intelligence</h2>
            </div>
            <div class="aidi-content">
                <p>AIDI is my vision for the next generation of industrial intelligence. By integrating machine learning models directly with hardware sensors, we can move from reactive monitoring to predictive intelligence.</p>
                <div class="aidi-goals">
                    <div class="goal-item">
                        <h4>Real-time Analytics</h4>
                        <p>Immediate insights from edge data.</p>
                    </div>
                    <div class="goal-item">
                        <h4>Predictive Maintenance</h4>
                        <p>Detect failures before they happen.</p>
                    </div>
                    <div class="goal-item">
                        <h4>Smart Automation</h4>
                        <p>Context-aware system controls.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Get In Touch</h2>
            </div>
            <div class="contact-wrapper">
                <div class="contact-info">
                    <h3>Let's collaborate on your next project</h3>
                    <p>Whether you have a question about embedded systems or want to discuss a new integration project, feel free to reach out.</p>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>repon[at]example.com</span>
                    </div>
                    <div class="contact-item">
                        <i class="fab fa-linkedin"></i>
                        <span>linkedin.com/in/repon-sheikh</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Available for Remote & Local Projects</span>
                    </div>
                </div>
                <form class="contact-form">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" rows="5" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width: 100%;">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="social-links">
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fas fa-blog"></i></a>
            </div>
            <p class="copyright">&copy; 2026 Repon Sheikh. All Rights Reserved. Engineered with passion.</p>
        </div>
    </footer>

    <script>
        // --- Dark Mode Toggle ---
        const themeToggle = document.getElementById('theme-toggle');
        const body = document.body;

        // Check for saved theme preference
        const currentTheme = localStorage.getItem('theme');
        if (currentTheme === 'dark') {
            body.classList.add('dark-mode');
            themeToggle.classList.replace('fa-moon', 'fa-sun');
        }

        themeToggle.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
            
            if (body.classList.contains('dark-mode')) {
                themeToggle.classList.replace('fa-moon', 'fa-sun');
                localStorage.setItem('theme', 'dark');
            } else {
                themeToggle.classList.replace('fa-sun', 'fa-moon');
                localStorage.setItem('theme', 'light');
            }
        });

        // --- Mobile Menu ---
        const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        const navLinks = document.querySelector('.nav-links');

        mobileMenuBtn.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            const icon = mobileMenuBtn.querySelector('i');
            icon.classList.toggle('fa-bars');
            icon.classList.toggle('fa-times');
        });

        // Close menu when a link is clicked
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
                const icon = mobileMenuBtn.querySelector('i');
                icon.classList.add('fa-bars');
                icon.classList.remove('fa-times');
            });
        });

        // --- Active Link Highlighting on Scroll ---
        const sections = document.querySelectorAll('section');
        const navItems = document.querySelectorAll('.nav-item');

        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (pageYOffset >= (sectionTop - 100)) {
                    current = section.getAttribute('id');
                }
            });

            navItems.forEach(item => {
                item.classList.remove('active');
                if (item.dataset.target === current) {
                    item.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>
