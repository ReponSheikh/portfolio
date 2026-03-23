<?php 
    date_default_timezone_set("Asia/Dhaka");
    $message_sent = false;
    $error_message = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

        if ($name && $email && $message) {
            // In a real server, you would use mail() or a library like PHPMailer here.
            // For this portfolio, we'll simulate a success response.
            $message_sent = true;
        } else {
            $error_message = "Please fill in all fields correctly.";
        }
    }
?>
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

        .mobile-menu-btn {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--accent-color);
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
        .hero-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .hero-image {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hero-image img {
            width: 100%;
            max-width: 350px;
            aspect-ratio: 1/1;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid var(--accent-color);
            box-shadow: var(--card-shadow);
            transition: var(--transition);
        }

        .hero-image img:hover {
            transform: scale(1.05);
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
            .hero-container {
                grid-template-columns: 1fr;
                text-align: center;
                gap: 2rem;
            }
            .hero-image {
                order: -1;
            }
            .hero-name {
                font-size: 3rem;
            }
            .btn-group {
                justify-content: center;
            }
            #about .about-wrapper, .contact-wrapper {
                grid-template-columns: 1fr;
                gap: 3rem;
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
            .nav-container {
                padding: 0 1.5rem;
            }
            .nav-links {
                position: fixed;
                top: 80px;
                left: -100%;
                width: 100%;
                height: calc(100vh - 80px);
                background: var(--bg-color);
                flex-direction: column;
                justify-content: center;
                align-items: center;
                transition: 0.4s ease;
                z-index: 999;
                box-shadow: none;
            }

            .nav-links.active {
                left: 0;
            }

            .mobile-menu-btn {
                display: block;
            }

            .experience-timeline {
                padding-left: 1.5rem;
            }
            
            .education-summary {
                display: block;
                text-align: center;
            }

            .hero-name {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 480px) {
            .btn-group {
                flex-direction: column;
                width: 100%;
            }
            .btn {
                width: 100%;
                text-align: center;
            }
            .section-title h2 {
                font-size: 2rem;
            }
            .hero-image img {
                max-width: 250px;
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
                    <li><a href="#experience" class="nav-item" data-target="experience">Experience</a></li>
                    <li><a href="#education" class="nav-item" data-target="education">Education</a></li>
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

    <section id="home">
        <div class="container hero-container">
            <div class="hero-content">
                <span class="hero-title">Electrical & Electronics Engineer</span>
                <h1 class="hero-name">Md. Repon Sheikh</h1>
                <p class="hero-tagline">Specializing in Research & Development, Embedded Systems, and Power Electronics. Expert in Bridging Hardware and Software for Intelligent Systems.</p>
                <div class="contact-highlights" style="margin-bottom: 2rem; display: flex; flex-wrap: wrap; gap: 1.5rem; opacity: 0.9; font-size: 0.9rem;">
                    <span><i class="fab fa-linkedin" style="color: var(--accent-color); margin-right: 0.5rem;"></i> <a href="https://linkedin.com/in/reponsheikh" target="_blank" style="color: inherit; text-decoration: none;">linkedin.com/in/reponsheikh</a></span>
                </div>
                <div class="btn-group">
                    <a href="#projects" class="btn btn-primary">View Projects</a>
                    <a href="download_cv.php" class="btn btn-outline">Download CV</a>
                </div>
            </div>
            <div class="hero-image">
                <img src="profile_photo.png" alt="Md. Repon Sheikh Profile Photo">
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="section-title">
                <h2>About Me</h2>
            </div>
            <div class="about-wrapper" style="display: flex; flex-direction: column; gap: 3rem;">
                <div class="about-text">
                    <p>I am an Electrical and Electronics Engineer with extensive experience in Research & Development, Embedded Systems, and Power Electronics. I have a strong background in developing reliable embedded hardware and firmware, power-electronic systems, and performing system-level analysis.</p>
                    <p>I thrive in applied R&D environments, with a proven ability to analyze complex problems and collaborate in multidisciplinary teams. My current interests lie in the integration of Artificial Intelligence and Machine Learning with embedded and energy systems to create next-generation intelligent solutions.</p>
                </div>
                <div class="skills-category-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; width: 100%;">
                    <div class="skill-category" style="background: var(--secondary-bg); padding: 1.5rem; border-radius: 12px; border: 1px solid var(--border-color);">
                        <h4 style="color: var(--accent-color); margin-bottom: 1rem;"><i class="fas fa-microchip"></i> Embedded & Control</h4>
                        <ul style="list-style: none; font-size: 0.9rem; opacity: 0.9;">
                            <li>C/C++, Embedded Firmware</li>
                            <li>Control Algorithms</li>
                            <li>Real-Time Systems</li>
                        </ul>
                    </div>
                    <div class="skill-category" style="background: var(--secondary-bg); padding: 1.5rem; border-radius: 12px; border: 1px solid var(--border-color);">
                        <h4 style="color: var(--accent-color); margin-bottom: 1rem;"><i class="fas fa-bolt"></i> Power & Energy</h4>
                        <ul style="list-style: none; font-size: 0.9rem; opacity: 0.9;">
                            <li>SMPS, Solar Charge Controllers</li>
                            <li>Battery Protection</li>
                            <li>IGBT/H-Bridge</li>
                        </ul>
                    </div>
                    <div class="skill-category" style="background: var(--secondary-bg); padding: 1.5rem; border-radius: 12px; border: 1px solid var(--border-color);">
                        <h4 style="color: var(--accent-color); margin-bottom: 1rem;"><i class="fas fa-code"></i> Software & Automation</h4>
                        <ul style="list-style: none; font-size: 0.9rem; opacity: 0.9;">
                            <li>Python Automation</li>
                            <li>System Validation</li>
                            <li>Simulation Support</li>
                            <li>Android Interfaces</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience">
        <div class="container">
            <div class="experience-summary" style="margin-bottom: 3rem; background: var(--bg-color); padding: 1.5rem; border-radius: 12px; border: 1px solid var(--accent-color); display: inline-block;">
                <p style="font-weight: 700; color: var(--accent-color); font-size: 1.1rem;">
                    <i class="fas fa-briefcase"></i> 16 Years of Technical & R&D Experience
                </p>
                <p style="font-size: 0.9rem; opacity: 0.8; margin-top: 0.5rem;">A legacy of applied research, system-level design, and engineering reliability.</p>
            </div>
            <div class="experience-timeline" style="position: relative; padding-left: 2rem; border-left: 2px solid var(--accent-color);">
                
                <!-- Independent R&D -->
                <div class="exp-item" style="margin-bottom: 3rem; position: relative;">
                    <div style="position: absolute; left: -2.6rem; top: 0; width: 15px; height: 15px; background: var(--accent-color); border-radius: 50%;"></div>
                    <h3 style="color: var(--accent-color);">Independent R&D Practice (Part-time)</h3>
                    <p style="font-weight: 600;">Personal Electronics Lab | Nov 2016 – Present</p>
                    <ul style="list-style: disc; margin-left: 1.5rem; font-size: 0.9rem; opacity: 0.9;">
                        <li>Developing GridSync systems integrating power control, GSM communication, and data logging.</li>
                        <li>Designed power-electronic solutions: battery protection, voltage guards, and sensor-based controls.</li>
                        <li>Built Python-based tools and Android apps for system validation and monitoring.</li>
                    </ul>
                </div>

                <!-- Solaric Asst Manager -->
                <div class="exp-item" style="margin-bottom: 3rem; position: relative;">
                    <div style="position: absolute; left: -2.6rem; top: 0; width: 15px; height: 15px; background: var(--accent-color); border-radius: 50%;"></div>
                    <h3 style="color: var(--accent-color);">Assistant Manager – R&D</h3>
                    <p style="font-weight: 600;">Solaric | 2015 – 2016</p>
                    <ul style="list-style: disc; margin-left: 1.5rem; font-size: 0.9rem; opacity: 0.9;">
                        <li>Led embedded product development for solar systems using Atmel microcontrollers.</li>
                        <li>Integrated prepaid code-lock algorithms into solar SMPS and control products.</li>
                        <li>Developed test automation tools, reducing validation time significantly.</li>
                    </ul>
                </div>

                <!-- Solaric R&D Engineer -->
                <div class="exp-item" style="margin-bottom: 3rem; position: relative;">
                    <div style="position: absolute; left: -2.6rem; top: 0; width: 15px; height: 15px; background: var(--accent-color); border-radius: 50%;"></div>
                    <h3 style="color: var(--accent-color);">R&D Engineer</h3>
                    <p style="font-weight: 600;">Solaric | 2014 – 2015</p>
                    <ul style="list-style: disc; margin-left: 1.5rem; font-size: 0.9rem; opacity: 0.9;">
                        <li>Conducted hardware-centric R&D: circuit design, embedded firmware, and signal analysis.</li>
                        <li>Developed PWM fan drivers and energy-efficient smart switches.</li>
                        <li>Performed root-cause analysis and troubleshooting of microcontroller hardware.</li>
                    </ul>
                </div>

                <!-- Solaric Senior Test Engineer -->
                <div class="exp-item" style="margin-bottom: 3rem; position: relative;">
                    <div style="position: absolute; left: -2.6rem; top: 0; width: 15px; height: 15px; background: var(--accent-color); border-radius: 50%;"></div>
                    <h3 style="color: var(--accent-color);">Senior Test Engineer</h3>
                    <p style="font-weight: 600;">Solaric | Feb – May 2014</p>
                    <ul style="list-style: disc; margin-left: 1.5rem; font-size: 0.9rem; opacity: 0.9;">
                        <li>Performed SMPS and electronic product testing and performance analysis.</li>
                        <li>Supported design validation and reliability assessment.</li>
                    </ul>
                </div>

                <!-- TechnoEX R&D Support -->
                <div class="exp-item" style="position: relative;">
                    <div style="position: absolute; left: -2.6rem; top: 0; width: 15px; height: 15px; background: var(--accent-color); border-radius: 50%;"></div>
                    <h3 style="color: var(--accent-color);">R&D Support Engineer (Part-time)</h3>
                    <p style="font-weight: 600;">TechnoEX | 2010 – 2014</p>
                    <ul style="list-style: disc; margin-left: 1.5rem; font-size: 0.9rem; opacity: 0.9;">
                        <li>Developed PIC microcontroller–based 5 kW solar charge controllers.</li>
                        <li>Provided system-level troubleshooting and hardware diagnostics.</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
    <section id="education" style="background: var(--secondary-bg);">
        <div class="container">
            <div class="education-summary" style="margin-bottom: 3rem; background: var(--bg-color); padding: 1.5rem; border-radius: 12px; border: 1px solid var(--accent-color); display: inline-block;">
                <p style="font-weight: 700; color: var(--accent-color); font-size: 1.1rem;">
                    <i class="fas fa-graduation-cap"></i> 10 Years of Technical Education in Electrical Engineering
                </p>
                <p style="font-size: 0.9rem; opacity: 0.8; margin-top: 0.5rem;">4 Years B.Sc. + 4 Years Diploma + 2 Years Vocational Trade Course</p>
            </div>
            <div class="education-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                <div class="education-card" style="background: var(--bg-color); padding: 2rem; border-radius: 12px; box-shadow: var(--card-shadow); border-left: 5px solid var(--accent-color);">
                    <h3 style="color: var(--accent-color); margin-bottom: 0.5rem;">B.Sc. in Electrical & Electronic Engineering (BSEE)</h3>
                    <p style="font-weight: 600; margin-bottom: 0.5rem;">IBAIS University, Dhaka, Bangladesh</p>
                    <p style="opacity: 0.8; font-size: 0.9rem; margin-bottom: 1rem;">4 Years Program | Graduated: 2014</p>
                </div>
                <div class="education-card" style="background: var(--bg-color); padding: 2rem; border-radius: 12px; box-shadow: var(--card-shadow); border-left: 5px solid var(--accent-color);">
                    <h3 style="color: var(--accent-color); margin-bottom: 0.5rem;">Diploma in Engineering (Electrical)</h3>
                    <p style="font-weight: 600; margin-bottom: 0.5rem;">Bogura Polytechnic Institute, Bangladesh</p>
                    <p style="opacity: 0.8; font-size: 0.9rem; margin-bottom: 1rem;">4 Years Program | Completed: 2009</p>
                </div>
                <div class="education-card" style="background: var(--bg-color); padding: 2rem; border-radius: 12px; box-shadow: var(--card-shadow); border-left: 5px solid var(--accent-color);">
                    <h3 style="color: var(--accent-color); margin-bottom: 0.5rem;">SSC Vocational (Electrical)</h3>
                    <p style="font-weight: 600; margin-bottom: 0.5rem;">Technical Training Center (TTC), Bogura</p>
                    <p style="opacity: 0.8; font-size: 0.9rem; margin-bottom: 1rem;">2 Years Program | Completed: 2005</p>
                    <p style="font-size: 0.9rem;">General Electrical Works and Basic Theory (First technical foundation).</p>
                </div>
                <!-- You can add more education cards here -->
            </div>
        </div>
    </section>
    <section id="projects">
        <div class="container">
            <div class="section-title">
                <h2>Featured Projects</h2>
            </div>
            <div class="projects-grid">
                <!-- Project 1 -->
                <div class="project-card">
                    <div class="project-img"><i class="fas fa-plug"></i></div>
                    <div class="project-info">
                        <h3>GridSync Power Control</h3>
                        <p>An integrated system for power control, GSM communication, and RS485 data logging for industrial grid synchronization.</p>
                        <div class="tech-stack">
                            <span class="tech-tag">GSM</span>
                            <span class="tech-tag">RS485</span>
                            <span class="tech-tag">Python</span>
                            <span class="tech-tag">IoT</span>
                        </div>
                    </div>
                </div>
                <!-- Project 2 -->
                <div class="project-card">
                    <div class="project-img"><i class="fas fa-solar-panel"></i></div>
                    <div class="project-info">
                        <h3>Solar SMPS Code-Lock</h3>
                        <p>A prepaid code-lock control algorithm for solar power products, enhancing security and deployment management.</p>
                        <div class="tech-stack">
                            <span class="tech-tag">Atmel MCU</span>
                            <span class="tech-tag">Embedded C</span>
                            <span class="tech-tag">Solar</span>
                        </div>
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="project-card">
                    <div class="project-img"><i class="fas fa-battery-half"></i></div>
                    <div class="project-info">
                        <h3>Battery Guard Systems</h3>
                        <p>Votlage guard and overcharge protection circuits designed for high-reliability energy storage systems.</p>
                        <div class="tech-stack">
                            <span class="tech-tag">Power Electronics</span>
                            <span class="tech-tag">PCB Design</span>
                            <span class="tech-tag">Hardware</span>
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
                        <span>Email Available on Request</span>
                    </div>
                    <div class="contact-item">
                        <i class="fab fa-linkedin"></i>
                        <span><a href="https://linkedin.com/in/reponsheikh" target="_blank" style="color: inherit; text-decoration: none;">linkedin.com/in/reponsheikh</a></span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-language"></i>
                        <span>English (Upper-Intermediate) | German (Beginner)</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-heart"></i>
                        <span>Embedded Intelligence, AI/ML in Energy, IoT</span>
                    </div>
                </div>
                <form class="contact-form" method="POST" action="#contact">
                    <?php if ($message_sent): ?>
                        <div style="background: rgba(46, 204, 113, 0.2); color: #2ecc71; padding: 1rem; border-radius: 8px; margin-bottom: 1.5rem; text-align: center;">
                            <i class="fas fa-check-circle"></i> Message sent successfully! I'll get back to you soon.
                        </div>
                    <?php endif; ?>
                    <?php if ($error_message): ?>
                        <div style="background: rgba(231, 76, 60, 0.2); color: #e74c3c; padding: 1rem; border-radius: 8px; margin-bottom: 1.5rem; text-align: center;">
                            <i class="fas fa-exclamation-circle"></i> <?php echo $error_message; ?>
                        </div>
                    <?php endif; ?>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" rows="5" placeholder="Your Message" required></textarea>
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
                <a href="https://linkedin.com/in/reponsheikh" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fas fa-blog"></i></a>
            </div>
            <p class="copyright">&copy; 2026 Repon Sheikh. All Rights Reserved. Engineered with passion.</p>
            <p class="last-updated" style="font-size: 0.75rem; opacity: 0.5; margin-top: 0.5rem;">
                Last Updated: <?php 
                    date_default_timezone_set("Asia/Dhaka");
                    echo date("F d, Y H:i", filemtime(__FILE__)); 
                ?>
            </p>
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
