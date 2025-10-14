<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpeg" href="mg1.jpg">
    <title>Milbert Garinga</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: #0a0a0a;
            color: #e4e4e7;
            overflow-x: hidden;
            line-height: 1.6;
        }

        .cursor-dot {
            width: 8px;
            height: 8px;
            background: #22d3ee;
            border-radius: 50%;
            position: fixed;
            pointer-events: none;
            z-index: 10000;
            transition: transform 0.15s ease;
        }

        .cursor-outline {
            width: 30px;
            height: 30px;
            border: 2px solid #22d3ee;
            border-radius: 50%;
            position: fixed;
            pointer-events: none;
            z-index: 10000;
            transition: all 0.15s ease;
        }

        nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: rgba(10, 10, 10, 0.8);
            backdrop-filter: blur(20px);
            z-index: 999;
            padding: 20px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 40px;
        }

        .logo {
            font-size: 1.5em;
            font-weight: 700;
            color: #22d3ee;
        }

        .nav-links {
            display: flex;
            gap: 40px;
        }

        .nav-link {
            color: #a1a1aa;
            text-decoration: none;
            font-size: 0.95em;
            transition: color 0.3s;
            position: relative;
        }

        .nav-link:hover {
            color: #22d3ee;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 40px;
        }

        section {
            min-height: 100vh;
            padding: 120px 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        #home {
            position: relative;
        }

        .hero-content {
            display: flex;
            align-items: center;
            gap: 60px;
            margin-top: 40px;
        }

        .profile-section {
            flex: 0 0 300px;
        }

        .profile-image-container {
            width: 300px;
            height: 300px;
            position: relative;
            margin-bottom: 30px;
        }

        .profile-image-wrapper {
            width: 100%;
            height: 100%;
            border-radius: 20px;
            overflow: hidden;
            border: 2px solid rgba(34, 211, 238, 0.3);
            background: linear-gradient(145deg, rgba(34, 211, 238, 0.1), rgba(168, 85, 247, 0.1));
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }

        .profile-image-wrapper:hover {
            border-color: #22d3ee;
            transform: translateY(-5px);
            box-shadow: 0 20px 60px rgba(34, 211, 238, 0.3);
        }

        .profile-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-placeholder {
            font-size: 120px;
            opacity: 0.3;
        }

        .text-section {
            flex: 1;
        }

        .greeting {
            font-size: 1.2em;
            color: #22d3ee;
            margin-bottom: 10px;
        }

        .name-title {
            font-size: 4.5em;
            font-weight: 700;
            line-height: 1.1;
            margin-bottom: 20px;
            background: linear-gradient(135deg, #ffffff, #22d3ee);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .subtitle {
            font-size: 1.5em;
            color: #a8a8b8;
            margin-bottom: 30px;
        }

        .description {
            font-size: 1.1em;
            color: #71717a;
            line-height: 1.8;
            max-width: 600px;
            margin-bottom: 40px;
        }

        .cta-buttons {
            display: flex;
            gap: 20px;
            margin-bottom: 40px;
        }

        .btn {
            padding: 14px 32px;
            border-radius: 8px;
            font-size: 1em;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
            cursor: pointer;
            border: none;
        }

        .btn-primary {
            background: #22d3ee;
            color: #0a0a0a;
        }

        .btn-primary:hover {
            background: #06b6d4;
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(34, 211, 238, 0.3);
        }

        .btn-secondary {
            background: transparent;
            color: #22d3ee;
            border: 2px solid #22d3ee;
        }

        .btn-secondary:hover {
            background: rgba(34, 211, 238, 0.1);
            transform: translateY(-2px);
        }

        .social-links {
            display: flex;
            gap: 20px;
        }

        .social-link {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            border: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #a1a1aa;
            text-decoration: none;
            font-size: 1.2em;
            transition: all 0.3s;
        }

        .social-link:hover {
            border-color: #22d3ee;
            color: #22d3ee;
            transform: translateY(-3px);
        }

        .section-header {
            font-size: 2.5em;
            font-weight: 700;
            margin-bottom: 60px;
            text-align: center;
        }

        .section-header span {
            color: #22d3ee;
        }

        .about-content {
            max-width: 800px;
            margin: 0 auto;
            font-size: 1.15em;
            line-height: 2;
            color: #a1a1aa;
        }

        .about-content p {
            margin-bottom: 20px;
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .skill-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 12px;
            padding: 35px;
            transition: all 0.3s;
        }

        .skill-card:hover {
            background: rgba(255, 255, 255, 0.05);
            border-color: rgba(34, 211, 238, 0.3);
            transform: translateY(-5px);
        }

        .skill-title {
            font-size: 1.4em;
            font-weight: 600;
            margin-bottom: 15px;
            color: #fff;
        }

        .skill-desc {
            color: #a1a1aa;
            line-height: 1.7;
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .project-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 12px;
            padding: 35px;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }

        .project-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, #22d3ee, #a855f7);
            transform: scaleX(0);
            transition: transform 0.3s;
        }

        .project-card:hover::before {
            transform: scaleX(1);
        }

        .project-card:hover {
            background: rgba(255, 255, 255, 0.05);
            border-color: rgba(34, 211, 238, 0.3);
            transform: translateY(-5px);
        }

        .project-title {
            font-size: 1.6em;
            font-weight: 600;
            margin-bottom: 15px;
            color: #fff;
        }

        .project-desc {
            color: #a1a1aa;
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .project-tech {
            color: #22d3ee;
            font-size: 0.9em;
        }

        .contact-content {
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
        }

        .contact-text {
            font-size: 1.2em;
            color: #a1a1aa;
            margin-bottom: 40px;
            line-height: 1.8;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-top: 40px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            font-size: 1.1em;
            color: #a1a1aa;
        }

        .contact-item a {
            color: #22d3ee;
            text-decoration: none;
            transition: color 0.3s;
        }

        .contact-item a:hover {
            color: #06b6d4;
        }

        footer {
            text-align: center;
            padding: 40px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #71717a;
        }

        @media (max-width: 968px) {
            .hero-content {
                flex-direction: column;
                text-align: center;
            }

            .profile-section {
                flex: none;
            }

            .name-title {
                font-size: 3em;
            }

            .nav-links {
                gap: 20px;
            }

            .cta-buttons {
                justify-content: center;
            }

            .social-links {
                justify-content: center;
            }

            .container {
                padding: 0 20px;
            }

            .projects-grid,
            .skills-grid {
                grid-template-columns: 1fr;
            }
        }

        html {
            scroll-behavior: smooth;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        section {
            animation: fadeInUp 0.8s ease-out;
        }
        .project-image {
    width: 100%;
    height: 180px; /* adjust as needed */
    object-fit: cover;
    border-radius: 10px;
    margin-bottom: 10px;
}
.project-image {
    width: 100%;
    height: 180px; /* adjust as needed */
    object-fit: cover;
    border-radius: 10px;
    margin-bottom: 10px;
}

        .project-card {
            cursor: pointer;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 10001;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.95);
            overflow: auto;
        }

        .modal.active {
            display: block;
        }

        .modal-content {
            position: relative;
            margin: 5% auto;
            padding: 40px;
            max-width: 900px;
            animation: modalSlideIn 0.3s ease;
        }

        @keyframes modalSlideIn {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .close-modal {
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 40px;
            font-weight: bold;
            color: #22d3ee;
            cursor: pointer;
            transition: color 0.3s;
        }

        .close-modal:hover {
            color: #06b6d4;
        }

        .modal-title {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #22d3ee;
        }

        .modal-description {
            font-size: 1.2em;
            color: #a1a1aa;
            margin-bottom: 30px;
            line-height: 1.8;
        }

        .modal-images {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .modal-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            border: 2px solid rgba(34, 211, 238, 0.3);
            transition: all 0.3s;
        }

        .modal-image:hover {
            transform: scale(1.05);
            border-color: #22d3ee;
        }
        

    </style>
</head>
<body>
    <div class="cursor-dot"></div>
    <div class="cursor-outline"></div>

    <nav>
        <div class="nav-container">
            <div class="logo">MG</div>
            <div class="nav-links">
                <a href="#home" class="nav-link">Home</a>
                <a href="#about" class="nav-link">About</a>
                <a href="#skills" class="nav-link">Skills</a>
                <a href="#projects" class="nav-link">Projects</a>
                <a href="#contact" class="nav-link">Contact</a>
            </div>
        </div>
    </nav>

    <section id="home">
        <div class="container">
            <div class="hero-content">
                <div class="profile-section">
                    <div class="profile-image-container">
                        <div class="profile-image-wrapper">
                            <!-- Replace with your image -->
                            
                             <img src="profile.jpg" alt="Milbert Garinga" class="profile-image"> 
                        </div>
                    </div>
                </div>
                
                <div class="text-section">
                    <div class="greeting">Hello, I'm</div>
                    <h1 class="name-title">Milbert Garinga</h1>
                    <div class="subtitle">Full Stack Web Developer</div>
                    <p class="description">
                        I build exceptional digital experiences that combine elegant design with powerful functionality. Specializing in creating scalable web applications that solve real-world problems.
                    </p>
                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Get In Touch</a>
                        <a href="#projects" class="btn btn-secondary">View Work</a>
                    </div>
                    <div class="social-links">
                        <a href="mailto:milbertgaringa5@gmail.com" class="social-link">📧</a>
                        <a href="#" class="social-link">💼</a>
                        <a href="#" class="social-link">🔗</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <h2 class="section-header">About <span>Me</span></h2>
            <div class="about-content">
                <p>
                    I'm a passionate Full Stack Developer based in Malolos, Bulacan, Philippines, with a deep commitment to creating exceptional web applications.
                </p>
                <p>
                    With expertise spanning from frontend interfaces to backend architectures, I specialize in building scalable, maintainable solutions using modern technologies like JavaScript, TypeScript, Laravel, and Node.js.
                </p>
                <p>
                    When I'm not coding, I'm exploring new technologies, contributing to open-source projects, and continuously improving my craft to deliver the best solutions for my clients.
                </p>
            </div>
        </div>
    </section>

    <section id="skills">
        <div class="container">
            <h2 class="section-header">My <span>Skills</span></h2>
            
            <div class="skills-grid">
                <div class="skill-card">
                    <h3 class="skill-title">JavaScript / TypeScript</h3>
                    <p class="skill-desc">
                        Expert in modern JavaScript (ES6+) and TypeScript, building type-safe, scalable applications with clean architecture and industry best practices.
                    </p>
                </div>
                
                <div class="skill-card">
                    <h3 class="skill-title">Laravel / Backend</h3>
                    <p class="skill-desc">
                        Experienced in backend development with Laravel framework, creating robust, secure server-side applications with elegant code structure.
                    </p>
                </div>
                
                <div class="skill-card">
                    <h3 class="skill-title">Node.js / Express</h3>
                    <p class="skill-desc">
                        Building high-performance server applications and RESTful APIs using Node.js and Express, optimized for speed and scalability.
                    </p>
                </div>
                
                <div class="skill-card">
                    <h3 class="skill-title">MySQL Database</h3>
                    <p class="skill-desc">
                        Expert in database design, optimization, and management, ensuring data integrity and efficient query performance at scale.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="projects">
  <div class="container">
    <h2 class="section-header">Featured <span>Projects</span></h2>
    <div class="projects-grid">
      
      <!-- 🌾 Project 1 -->
<div class="project-card" onclick="openGallery('galleryModal')">
  <img src="pagsasaka.png" alt="E-Commerce Platform Screenshot" class="project-image">
  <h3 class="project-title">E-Commerce Platform</h3>
  <p class="project-desc">
    A comprehensive full-stack e-commerce solution featuring real-time inventory management, secure payment integration, and an advanced analytics dashboard.
  </p>
  <p class="project-tech">Laravel • MySQL • JavaScript</p>
</div>

<!-- 🧩 Project 2 -->
<div class="project-card" onclick="openGallery('galleryModal2')">
  <img src="cho.png" alt="CHO Screenshot" class="project-image">
  <h3 class="project-title">City Health Office</h3>
  <p class="project-desc">
   A comprehensive health information platform designed to track immunization records, monitor population data, and predict public health trends through real-time analytics and reporting tools.
  </p>
  <p class="project-tech">Blade • PHP • MySQL • JavaScript</p>
</div>

<!-- 📊 Project 3 -->
<div class="project-card">
  <h3 class="project-title">Real-Time Dashboard</h3>
  <p class="project-desc">
    Interactive data visualization platform with live updates, featuring complex data processing and intuitive UI components.
  </p>
  <p class="project-tech">TypeScript • Node.js • MySQL</p>
</div>
</section>

<!-- 🖼️ Modal 1 (Pagsasaka) -->
<div id="galleryModal" class="modal">
  <span class="close" onclick="closeGallery('galleryModal')">&times;</span>
  <div class="modal-content">
    <img src="pagsasaka1.png" alt="Image 1">
    <img src="pagsasaka2.png" alt="Image 2">
    <img src="pagsasaka3.png" alt="Image 3">
  </div>
</div>

<!-- 🖼️ Modal 2 (CHO) -->
<div id="galleryModal2" class="modal">
  <span class="close" onclick="closeGallery('galleryModal2')">&times;</span>
  <div class="modal-content">
    <img src="cho1.png" alt="Image 1">
    <img src="cho2.png" alt="Image 2">
    <img src="cho3.png" alt="Image 3">
    <img src="cho4.png" alt="Image 4">
  </div>
</div>

<!-- ✅ CSS -->
<style>
  .project-card:hover {
    transform: translateY(-5px);
  }

  /* 🖼️ Modal Styling */
  .modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.8);
  }

  .modal-content {
    margin: 5% auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 10px;
    width: 80%;
  }

  .modal-content img {
    width: 300px;
    height: 200px;
    object-fit: cover;
    border-radius: 10px;
  }

  .close {
    position: absolute;
    top: 20px;
    right: 35px;
    color: #fff;
    font-size: 40px;
    font-weight: bold;
    cursor: pointer;
  }
</style>

<!-- ✅ JavaScript -->
<script>
  function openGallery(modalId) {
    document.getElementById(modalId).style.display = "block";
  }

  function closeGallery(modalId) {
    document.getElementById(modalId).style.display = "none";
  }

  // Close when clicking outside
  window.onclick = function(event) {
    if (event.target.classList.contains('modal')) {
      event.target.style.display = "none";
    }
  }
</script> 

    

    <!-- Contact Section -->
<!-- Contact Section -->
<section id="contact">
  <div class="container">
    <h2 class="section-header">Get In <span>Touch</span></h2>
    <div class="contact-content text-center">
      <p class="contact-text mb-4">
        I'm currently available for freelance work and full-time opportunities.  
        If you have a project in mind or just want to say hello, feel free to reach out!
      </p>
      <button id="sendMessageBtn" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#messageModal">
        Send Message
      </button>

    <div class="contact-info mt-4">
      <div class="contact-item">📧 <a href="mailto:milbertgaringa5@gmail.com">milbertgaringa5@gmail.com</a></div>
      <div class="contact-item">📱 +63 961 513 8289</div>
      <div class="contact-item">📍 Malolos, Bulacan, Philippines</div>
    </div>
  </div>
</section>

<!-- ✨ Message Modal -->
<div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <form id="contactForm" class="w-100">
      <div class="modal-content modern-modal">
        <div class="modal-header border-0 d-flex justify-content-between align-items-center">
          <h5 class="modal-title fw-bold" id="messageModalLabel">💬 Send a Message</h5>
          <button type="button" class="btn-close custom-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <div class="row g-4">
            <div class="col-md-6">
              <label for="fullName" class="form-label">Full Name</label>
              <input type="text" class="form-control custom-input" id="fullName" placeholder="John Doe" required>
            </div>

            <div class="col-md-6">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" class="form-control custom-input" id="email" placeholder="john.doe@email.com" required>
            </div>

            <div class="col-12">
              <label for="message" class="form-label">Message</label>
              <textarea class="form-control custom-input textarea-field" id="message" placeholder="Write your message here..." required></textarea>
            </div>
          </div>
        </div>

        <div class="modal-footer border-0 d-flex justify-content-center gap-3">
          <button type="button" class="btn close-btn" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn send-btn">Send Message</button>
        </div>
      </div>
    </form>
  </div>
</div>

<style>
  /* ✨ Center Modal & Main Style */
  .modal-dialog-centered {
    display: flex;
    align-items: center;
    min-height: calc(100vh - 1rem);
  }

  .modern-modal {
    background: rgba(20, 20, 25, 0.96);
    backdrop-filter: blur(25px);
    border: 1px solid rgba(34, 211, 238, 0.25);
    border-radius: 20px;
    box-shadow: 0 0 40px rgba(34, 211, 238, 0.15);
    color: #f4f4f5;
    animation: modalFadeIn 0.4s ease;
    padding: 0.5rem 0;
  }

  .modal-dialog.modal-lg {
    max-width: 700px;
    margin: auto;
  }

  .modal-title {
    font-size: 1.6em;
    color: #22d3ee;
    font-weight: 700;
  }

  .modal-body {
    padding: 1.8rem 2.5rem;
  }

  .modal-footer {
    padding: 1.5rem;
  }

  /* ✨ Equal Inputs & Form Style */
  .custom-input {
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.15);
    border-radius: 10px;
    color: #fff;
    padding: 0.95rem 1.1rem;
    font-size: 1rem;
    width: 100%;
    height: 48px;
    transition: all 0.3s ease;
  }

  .custom-input:focus {
    border-color: #22d3ee;
    box-shadow: 0 0 12px rgba(34, 211, 238, 0.35);
    background: rgba(255, 255, 255, 0.15);
  }

  .textarea-field {
    min-height: 140px;
    resize: none;
  }

  .form-label {
    font-weight: 500;
    margin-bottom: 0.4rem;
    color: #e4e4e7;
  }

  /* ✨ Buttons */
  .send-btn {
    background: linear-gradient(135deg, #22d3ee, #06b6d4);
    color: #0a0a0a;
    font-weight: 600;
    padding: 12px 40px;
    border-radius: 10px;
    transition: all 0.3s ease;
    border: none;
    font-size: 1rem;
  }

  .send-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 0 25px rgba(34, 211, 238, 0.45);
  }

  .close-btn {
    background: rgba(255, 255, 255, 0.12);
    color: #e4e4e7;
    font-weight: 600;
    padding: 12px 36px;
    border-radius: 10px;
    border: none;
    transition: all 0.3s ease;
  }

  .close-btn:hover {
    background: rgba(255, 255, 255, 0.25);
  }

  /* ✨ Close Icon */
  .custom-close {
    filter: invert(1) brightness(1.6);
    opacity: 0.8;
    transition: 0.25s ease;
  }

  .custom-close:hover {
    opacity: 1;
    transform: scale(1.1);
  }

  /* ✨ Animation */
  @keyframes modalFadeIn {
    from {
      opacity: 0;
      transform: translateY(-15px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* ✨ Responsive Design */
  @media (max-width: 768px) {
    .modal-body {
      padding: 1.2rem;
    }
    .send-btn,
    .close-btn {
      width: 100%;
      padding: 12px 0;
    }
    .modal-footer {
      flex-direction: column;
      gap: 10px;
    }
    .custom-input {
      height: auto;
    }
  }
  /* Popup container */
.popup {
  position: fixed;
  top: 20px;
  right: 20px;
  background: #28a745;
  color: white;
  padding: 15px 25px;
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.2);
  display: flex;
  align-items: center;
  gap: 10px;
  z-index: 9999;
  opacity: 0;
  transform: translateY(-20px);
  transition: all 0.4s ease;
  font-family: 'Segoe UI', sans-serif;
  font-size: 16px;
}

/* Hidden state */
.hidden {
  display: none;
}

/* Animate when showing */
.popup.show {
  opacity: 1;
  transform: translateY(0);
}

/* Error color */
.popup.error {
  background: #dc3545;
}

</style>

<!-- ✅ Success / Error Popup -->
<div id="popup" class="popup hidden">
  <div class="popup-content">
    <span id="popupIcon">✅</span>
    <p id="popupMessage">Message sent successfully!</p>
  </div>
</div>




<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- EmailJS -->
<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>

<script>
  emailjs.init("ymaOOfW0kzk6EdQtO");

  const form = document.getElementById('contactForm');
  const popup = document.getElementById('popup');
  const popupMessage = document.getElementById('popupMessage');
  const popupIcon = document.getElementById('popupIcon');

  function showPopup(message, isError = false) {
    popupMessage.textContent = message;
    popupIcon.textContent = isError ? '❌' : '✅';
    popup.classList.remove('hidden', 'error');
    if (isError) popup.classList.add('error');
    popup.classList.add('show');

    // Hide after 3 seconds
    setTimeout(() => {
      popup.classList.remove('show');
      setTimeout(() => popup.classList.add('hidden'), 400);
    }, 3000);
  }

  form.addEventListener('submit', function(event) {
    event.preventDefault();

    const params = {
      from_name: document.getElementById('fullName').value,
      email: document.getElementById('email').value,
      message: document.getElementById('message').value
    };

    emailjs.send("service_0955xsx", "template_nc81owq", params)
      .then(function() {
        showPopup("Message sent successfully to milbertgaringa5@gmail.com!");
        form.reset();
      }, function(error) {
        showPopup("Failed to send message. Please try again later.", true);
        console.error(error);
      });
  });
</script>







    <footer>
        <div class="container">
            <p>© 2025 Milbert Garinga. Designed & Built with passion.</p>
        </div>
    </footer>

    <script>
        // Custom cursor
        const cursorDot = document.querySelector('.cursor-dot');
        const cursorOutline = document.querySelector('.cursor-outline');

        window.addEventListener('mousemove', (e) => {
            cursorDot.style.left = e.clientX + 'px';
            cursorDot.style.top = e.clientY + 'px';
            
            cursorOutline.style.left = e.clientX - 15 + 'px';
            cursorOutline.style.top = e.clientY - 15 + 'px';
        });

        // Hover effect on links
        const links = document.querySelectorAll('a, button');
        links.forEach(link => {
            link.addEventListener('mouseenter', () => {
                cursorDot.style.transform = 'scale(1.5)';
                cursorOutline.style.transform = 'scale(1.5)';
            });
            link.addEventListener('mouseleave', () => {
                cursorDot.style.transform = 'scale(1)';
                cursorOutline.style.transform = 'scale(1)';
            });
        });
    </script>
</body>
</html>