<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Building Estimation Electrical</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" rel="stylesheet">
        <style>
            :root {
                --primary-color: #0f172a;
                --secondary-color: #3b82f6;
                --accent-color: #f97316;
                --text-color: #334155;
                --background-light: #f8fafc;
                --card-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
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
                min-height: 100vh;
                background: linear-gradient(135deg, rgba(15, 23, 42, 0.9), rgba(59, 130, 246, 0.8));
                display: flex;
                align-items: center;
                position: relative;
                overflow: hidden;
            }

            .hero-section::before {
                content: '';
                position: absolute;
                width: 100%;
                height: 100%;
                background: url('/api/placeholder/1920/1080') center/cover;
                opacity: 0.1;
                z-index: -1;
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
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg fixed-top">
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

        <section id="home" class="hero-section">
            <div class="container">
                <div class="row align-items-center min-vh-100">
                    <div class="col-lg-8 text-center text-lg-start">
                        <h1 class="hero-title animate-fade-up">Transform Your Electrical Projects</h1>
                        <p class="lead text-white-50 mb-5 animate-fade-up">Professional estimating services for modern electrical contractors</p>
                        <div class="animate-fade-up">
                            <a href="#contact" class="btn btn-primary me-3">Get Started</a>
                            <a href="#services" class="btn btn-outline-light">Learn More</a>
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
                        <h3 class="h4 mb-4">BE Electrical</h3>
                        <p class="text-white-50">Professional electrical estimating services for modern contractors.</p>
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
                            <li class="mb-2"><a href="#home" class="footer-link">Home</a></li>
                            <li class="mb-2"><a href="#services" class="footer-link">Services</a></li>
                            <li class="mb-2"><a href="#portfolio" class="footer-link">Portfolio</a></li>
                            <li class="mb-2"><a href="#contact" class="footer-link">Contact</a></li>
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
</html>
