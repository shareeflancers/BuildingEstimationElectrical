    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Building Estimation Electrical</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
        <style>
            :root {
                --primary-color: #0f172a;
                --secondary-color: #3b82f6;
                --accent-color: #f97316;
                --text-color: #334155;
                --background-light: #f8fafc;
                --card-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
                --top-nav-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
                --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            }

            body {
                font-family: 'Inter', sans-serif;
                color: var(--text-color);
                overflow-x: hidden;
            }

            /* Modern Navbar */
            .navbar {
                background: rgba(255, 255, 255, 0.9) !important;
                backdrop-filter: blur(10px);
                padding: 1rem 0;
            }

            .navbar-brand {
                font-weight: 800;
                color: var(--primary-color) !important;
                font-size: 1.75rem;
            }

            .nav-link {
                color: var(--text-color) !important;
                font-weight: 500;
                padding: 0.5rem 1rem !important;
                transition: var(--transition);
            }
            
            .nav-link:hover {
                color: var(--secondary-color) !important;
            }

            /* Modern Hero Section */
            .hero-section {
                min-height: 90vh;
                background: linear-gradient(135deg, rgba(15, 23, 42, 0.9), rgba(59, 130, 246, 0.8));
                display: flex;
                align-items: center;
                position: relative;
                overflow: hidden;
            }

            .hero-title {
                font-size: 4.5rem;
                font-weight: 900;
                line-height: 1.1;
                color: white;
                margin-bottom: 1.5rem;
            }

            /* Modern Button */
            .btn-primary {
                background: var(--secondary-color);
                border: none;
                padding: 0.75rem 2rem;
                border-radius: 100px;
                font-weight: 600;
                transition: var(--transition);
            }

            .btn-primary:hover {
                background: var(--accent-color);
                transform: translateY(-2px);
            }

            /* Modern Service Cards */
            .service-card {
                background: white;
                border-radius: 20px;
                padding: 2.5rem;
                transition: var(--transition);
                border: 1px solid rgba(0, 0, 0, 0.05);
                height: 100%;
            }

            .service-card:hover {
                transform: translateY(-10px);
                box-shadow: var(--card-shadow);
            }

            .service-icon {
                width: 60px;
                height: 60px;
                background: var(--background-light);
                border-radius: 15px;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 1.5rem;
                transition: var(--transition);
            }

            .service-card:hover .service-icon {
                background: var(--secondary-color);
                color: white;
            }

            /* Modern Contact Form */
            .contact-section {
                background: var(--background-light);
            }

            .contact-form {
                background: white;
                border-radius: 30px;
                padding: 3rem;
                box-shadow: var(--card-shadow);
            }

            .form-control {
                border: 2px solid #e2e8f0;
                padding: 1rem;
                border-radius: 15px;
                transition: var(--transition);
            }

            .form-control:focus {
                border-color: var(--secondary-color);
                box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.1);
            }

            /* Modern Footer */
            .footer {
                background: var(--primary-color);
                padding: 5rem 0 2rem;
                color: white;
            }

            .social-icon {
                width: 40px;
                height: 40px;
                background: rgba(255, 255, 255, 0.1);
                border-radius: 50%;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                margin-right: 0.75rem;
                transition: var(--transition);
            }

            .social-icon:hover {
                background: var(--secondary-color);
                transform: translateY(-3px);
            }

            .footer-link {
                color: rgba(255, 255, 255, 0.7);
                text-decoration: none;
                transition: var(--transition);
            }

            .footer-link:hover {
                color: white;
                transform: translateX(5px);
            }

            .top-nav {
                background: var(--secondary-color);
                padding: 0.5rem 0;
                color: white;
                transition: var(--transition);
                overflow: hidden;
            }

            .top-nav.hidden {
                height: 0;
                padding: 0;
            }

            .top-contact {
                display: flex;
                gap: 1.5rem;
                font-size: 0.9rem;
            }

            .top-social {
                display: flex;
                gap: 1rem;
            }

            .top-social a {
                color: white;
                opacity: 0.8;
                transition: var(--transition);
            }

            .top-social a:hover {
                opacity: 1;
            }

            /* Main Nav Styles */
            .nav-wrapper {
                position: fixed;
                width: 100%;
                top: 0;
                z-index: 1000;
            }

            .navbar {
                background: rgba(255, 255, 255, 0.9) !important;
                backdrop-filter: blur(10px);
                box-shadow: var(--  top-nav-shadow);
                transition: var(--transition);
            }

            /* Add space below navigation for demo */
            .main-content {
                margin-top: 140px;
                padding: 20px;
            }

            /* Animations */
            @keyframes fadeUp {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .animate-fade-up {
                animation: fadeUp 0.6s ease forwards;
            }

            /* Responsive Design */
            @media (max-width: 992px) {
                .hero-title {
                    font-size: 3.5rem;
                }
                
                .contact-form {
                    padding: 2rem;
                }
            }

            @media (max-width: 768px) {
                .hero-title {
                    font-size: 2.5rem;
                }
                .service-card {
                    padding: 1.5rem;
                }
                .top-contact {
                    flex-direction: column;
                    gap: 0.5rem;
                }
                
                .top-social {
                    display: none;
                }
            }
        </style>
    </head>
    <body>
        <div class="nav-wrapper">
            <div class="top-nav">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="top-contact">
                            <span><i class="bi bi-envelope me-2"></i>info@example.com</span>
                            <span><i class="bi bi-telephone me-2"></i>(555) 123-4567</span>
                            <span><i class="bi bi-geo-alt me-2"></i>123 Business St</span>
                        </div>
                        <div class="top-social">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Nav -->
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="#">Building Estimation</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                            <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                            <li class="nav-item"><a class="nav-link" href="#Estimates">Sample Estimates</a></li>
                            <li class="nav-item"><a class="nav-link" href="#Privacy">Privacy Policy</a></li>
                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                            <li class="nav-item"><a class="btn btn-primary ms-3" href="#quote">Get Quote</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <section id="home" class="hero-section">
            <div class="container">
                <div class="row align-items-center min-vh-100">
                    <div class="col-lg-8 text-center text-lg-start">
                        <h1 class="hero-title animate-fade-up">Estimating Services</h1>
                        <p class="lead text-white-50 mb-5 animate-fade-up">Premier cost estimating firm proudly headquartered in New York. With over 20 years of unparalleled expertise, we excel in delivering precise cost assessments and exceptional customer service. Our commitment to solving clients' unique challenges with tailored, cost-effective solutions has solidified our reputation as a trusted partner in the industry.</p>
                        <div class="animate-fade-up">
                            <a href="#contact" class="btn btn-primary me-3">Request a Quote</a>
                            <a href="#services" class="btn btn-outline-light">Takeoff Service</a>
                        </div>
                    </div>
                </div>  
            </div>
        </section>

        <section id="services" class="py-6">
            <div class="container py-5">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-6 text-center">
                        <h2 class="display-5 fw-bold mb-3">Our Services</h2>
                        <p class="lead text-muted">Expertise you can trust for your electrical projects</p>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="bi bi-calculator fs-3"></i>
                            </div>
                            <h3 class="h4 mb-3">Construction Estimating</h3>
                            <p class="text-muted mb-0">Precise cost analysis and detailed estimates for projects of any scale.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="bi bi-tools fs-3"></i>
                            </div>
                            <h3 class="h4 mb-3">Material Takeoff</h3>
                            <p class="text-muted mb-0">Accurate quantity calculations and material specifications.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="bi bi-chat-square-text fs-3"></i>
                            </div>
                            <h3 class="h4 mb-3">Bid Consultation</h3>
                            <p class="text-muted mb-0">Strategic guidance throughout your bidding process.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about-us" style="padding: 40px 0; background-color: #f7f7f7;">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-6 text-center">
                        <h2 class="display-5 fw-bold mb-3">About Us</h2>
                        <p class="lead text-muted">Get to know Building Estimation Electrical</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img src="Assets/Hero.jpeg" alt="International Estimating" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <h3>Who We Are</h3>
                        <p>International Estimating is a premier cost estimating firm proudly headquartered in New York. With over 20 years of unparalleled expertise, we excel in delivering precise cost assessments and exceptional customer service. Our commitment to solving clients' unique challenges with tailored, cost-effective solutions has solidified our reputation as a trusted partner in the industry. We are dedicated to ensuring the success and efficiency of every project we undertake.</p>
                        <h3>Our Mission</h3>
                        <p>At International Estimating, our mission is to provide accurate and reliable cost estimates that help our clients achieve their project goals. We strive to deliver exceptional service and build long-lasting relationships based on trust and integrity.</p>
                        <h3>Why Choose Us?</h3>
                        <ul>
                            <li>Over 20 years of industry experience</li>
                            <li>Commitment to exceptional customer service</li>
                            <li>Accurate and reliable cost estimates</li>
                            <li>Tailored, cost-effective solutions</li>
                            <li>Trusted partner in the industry</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="contact-section py-6">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="contact-form">
                            <h2 class="display-6 text-center mb-4">Get In Touch</h2>
                            <form>
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" placeholder="Email Address">
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" rows="5" placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary w-100">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4">
                        <h3 class="h4 mb-4">Building Estimation Electrical</h3>
                        <p class="text-white-50">A registered cost estimating company based in New York, we have been dedicated to delivering exceptional customer service and providing accurate cost solutions for over 20 years. Our commitment to excellence has earned us a reputation for reliability and expertise.</p>
                        <div class="mt-4">
                            <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h3 class="h4 mb-4">Quick Links</h3>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a class="nav-link" href="#home">Home</a></li>
                            <li class="mb-2"><a class="nav-link" href="#services">Services</a></li>
                            <li class="mb-2"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                            <li class="mb-2"><a class="nav-link" href="#Estimates">Sample Estimates</a></li>
                            <li class="mb-2"><a class="nav-link" href="#Privacy">Privacy Policy</a></li>
                            <li class="mb-2"><a class="nav-link" href="#contact">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <h3 class="h4 mb-4">Contact Info</h3>
                        <ul class="list-unstyled text-white-50">
                            <li class="mb-2"><i class="bi bi-envelope me-2"></i>info@beelectrical.com</li>
                            <li class="mb-2"><i class="bi bi-telephone me-2"></i>(555) 123-4567</li>
                            <li class="mb-2"><i class="bi bi-geo-alt me-2"></i>123 Business St, Suite 100</li>
                        </ul>
                    </div>
                </div>
                <div class="border-top border-secondary mt-5 pt-4 text-center">
                    <p class="mb-0 text-white-50">&copy; 2025 BE Electrical. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </body>
    <script>
        // Scroll behavior
        window.addEventListener('scroll', function() {
            const topNav = document.querySelector('.top-nav');
            if (window.scrollY > 50) {
                topNav.classList.add('hidden');
            } else {
                topNav.classList.remove('hidden');
            }
        });
    </script>
    </html>