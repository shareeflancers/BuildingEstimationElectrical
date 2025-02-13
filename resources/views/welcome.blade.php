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
            .hero-section {
            min-height: 85vh;
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
            .footer {
            background: var(--primary-color);
            padding: 5rem 0 2rem;
            color: white;
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
            .nav-wrapper {
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            }
            .logo-strip {
            background-color: white;
            border-bottom: 1px solid #e0e0e0;
            padding: 1rem 0;
            }
            .logo-marquee-container {
            width: 100%;
            overflow: hidden;   
            position: relative;
            }
            .logo-track {
            display: flex;
            animation: marquee 20s linear infinite;
            width: 100%;
            }
            .logo-content {
            display: flex;
            justify-content: space-around;
            align-items: center;
            min-width: 100%;
            gap: 2rem;
            padding: 1rem;
            }
            .logo {
            width: 150px;
            height: 75px;
            object-fit: contain;
            transition: width 0.3s ease;
            }

            @keyframes marquee {
                0% {
                transform: translateX(0);
                }
                100% {
                transform: translateX(-50%);
                }
            }
            @media screen and (max-width: 1200px) {
                .logo {
                width: 120px;
                height: 60px;
                }
                .logo-content {
                gap: 2rem;
                }
            }
            @media screen and (max-width: 768px) {
                .logo {
                width: 100px;
                height: 50px;
                }
                .logo-content {
                gap: 2rem;
                padding: 1rem;
                }
                .logo-track {
                animation-duration: 15s;
                }
            }
            @media (hover: hover) {
                .logo-track:hover {
                animation-play-state: paused;
                }
            }
            .contact-section .form-control::placeholder {
            color: rgb(255, 255, 255);
            }
            .contact-section .form-control:focus {
            background-color: rgb(255, 255, 255);
            border-color: rgb(255, 255, 255);
            color: white;
            box-shadow: none;
            }
            .contact-section .form-control {
            padding: 0.8rem 1.2rem;
            }
            .backdrop-blur-sm {
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            }
            .navbar {
            background: rgba(255, 255, 255, 0.9) !important;
            backdrop-filter: blur(10px);
            box-shadow: var(--top-nav-shadow);
            transition: var(--transition);
            }
            .main-content {
            margin-top: 140px;
            padding: 20px;
            }
            .backdrop-blur-sm {
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            }
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
            gap: 1rem;
            }
            
            .top-social {
            display: none;
            }
            }
        </style>
    </head>
    <body>
        <!-- Navigation -->
        <div class="nav-wrapper">
            <div class="top-nav">
                <div class="container">
                    <div class="top-contact">
                        <span><i class="bi bi-envelope me-2"></i>info@example.com</span>
                        <span><i class="bi bi-telephone me-2"></i>(555) 123-4567</span>
                        <span><i class="bi bi-geo-alt me-2"></i>123 Business St</span>
                    </div>
                </div>
            </div>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="#">Building Estimation</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>   
                            <li class="nav-item"><a class="nav-link" href="#about-us">About Us</a></li>   
                            <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                            <li class="nav-item"><a class="btn btn-primary ms-3" href="#contact">Get Quote</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        
        <!-- Hero Section -->
        <section id="home" class="hero-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 text-center text-lg-start">
                        <h1 class="hero-title animate-fade-up">Estimating Services</h1>
                        <p class="lead text-white-50 mb-5 animate-fade-up">Premier cost estimating firm proudly headquartered in New York. With over 20 years of unparalleled expertise, we excel in delivering precise cost assessments and exceptional customer service. Our commitment to solving clients' unique challenges with tailored, cost-effective solutions has solidified our reputation as a trusted partner in the industry.</p>
                        <div class="animate-fade-up">
                            <a href="#contact" class="btn btn-primary me-3">Request a Quote</a>
                            <a href="#services" class="btn btn-outline-light">Range of Services</a>
                        </div>
                    </div>
                </div>  
            </div>
        </section>
        
        <!-- Logo Stack -->
        <div class="logo-strip">
            <div class="logo-marquee-container">
                <div class="logo-track">
                    <!-- First set of logos -->
                    <div class="logo-content">
                        <img src="{{ asset('images/logo1.png') }}" alt="Logo 1" class="logo">
                        <img src="{{ asset('images/logo2.png') }}" alt="Logo 2" class="logo">
                        <img src="{{ asset('images/logo3.png') }}" alt="Logo 3" class="logo">
                        <img src="{{ asset('images/logo4.png') }}" alt="Logo 4" class="logo">
                    </div>
                    <!-- Duplicate set for seamless loop -->
                    <div class="logo-content">
                        <img src="{{ asset('images/logo1.png') }}" alt="Logo 1" class="logo">
                        <img src="{{ asset('images/logo2.png') }}" alt="Logo 2" class="logo">
                        <img src="{{ asset('images/logo3.png') }}" alt="Logo 3" class="logo">
                        <img src="{{ asset('images/logo4.png') }}" alt="Logo 4" class="logo">
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio -->
        <section id="portfolio" class="py-5">
            <div class="container">
                <!-- Header Section -->
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-6 text-center">
                        <h2 class="display-5 fw-bold mb-3">Our Portfolio</h2>
                        <p class="lead text-muted">Explore our recent estimation projects</p>
                    </div>
                </div>

                <!-- Portfolio Items -->
                <div class="row g-4">
                    <!-- Portfolio Item 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <span class="badge bg-primary me-2">Commercial</span>
                                    <span class="text-muted">New York, NY</span>
                                </div>
                                <h4 class="card-title">Office Complex Estimation</h4>
                                <p class="card-text">Complete electrical estimation for a 20-story office building including power distribution, lighting, and emergency systems.</p>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Project Value: $2.5M</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Duration: 3 months</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Area: 200,000 sq ft</li>
                                </ul>
                                <a href="#" class="btn btn-outline-primary">View Details</a>
                            </div>
                        </div>
                    </div>

                    <!-- Portfolio Item 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <span class="badge bg-primary me-2">Residential</span>
                                    <span class="text-muted">Brooklyn, NY</span>
                                </div>
                                <h4 class="card-title">Luxury Apartment Complex</h4>
                                <p class="card-text">Detailed estimation for a luxury residential complex including smart home systems and renewable energy integration.</p>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Project Value: $1.8M</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Duration: 2 months</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Area: 150,000 sq ft</li>
                                </ul>
                                <a href="#" class="btn btn-outline-primary">View Details</a>
                            </div>
                        </div>
                    </div>

                    <!-- Portfolio Item 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <span class="badge bg-primary me-2">Industrial</span>
                                    <span class="text-muted">Queens, NY</span>
                                </div>
                                <h4 class="card-title">Manufacturing Facility</h4>
                                <p class="card-text">Comprehensive electrical estimation for a manufacturing facility including heavy machinery power requirements and automation systems.</p>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Project Value: $3.2M</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Duration: 4 months</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Area: 300,000 sq ft</li>
                                </ul>
                                <a href="#" class="btn btn-outline-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Load More Button
                <div class="row mt-5">
                    <div class="col-12 text-center">
                        <button class="btn btn-primary px-4 py-2">Load More Projects</button>
                    </div>
                </div> -->
            </div>
        </section>

        <!-- About-us -->
        <section id="about-us" class="hero-section">
            <div class="container py-5">
                <!-- Header Section -->
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-6 text-center">
                        <h2 class="display-5 fw-bold mb-3 text-white">About Us</h2>
                        <p class="lead text-white opacity-90">Get to know Building Estimation Electrical</p>
                    </div>
                </div>  

                <!-- Main Content Section -->
                <div class="row">
                    <!-- Who We Are Column -->
                    <div class="col-lg-4">
                        <div class="p-4 h-100 bg-white bg-opacity-10 rounded-3 backdrop-blur-sm border border-white border-opacity-20">
                            <h3 class="mb-4 text-white">Who We Are</h3>
                            <p class="text-white opacity-90">International Estimating is a premier cost estimating firm proudly headquartered in New York. With over 20 years of unparalleled expertise, we excel in delivering precise cost assessments and exceptional customer service. Our commitment to solving clients' unique challenges with tailored, cost-effective solutions has solidified our reputation as a trusted partner in the industry.</p>
                        </div>
                    </div>

                    <!-- Our Mission Column -->
                    <div class="col-lg-4">
                        <div class="p-4 h-100 bg-white bg-opacity-10 rounded-3 backdrop-blur-sm border border-white border-opacity-20">
                            <h3 class="mb-4 text-white">Our Mission</h3>
                            <p class="text-white opacity-90">At International Estimating, our mission is to provide accurate and reliable cost estimates that help our clients achieve their project goals. We strive to deliver exceptional service and build long-lasting relationships based on trust and integrity.</p>
                        </div>
                    </div>

                    <!-- Why Choose Us Column -->
                    <div class="col-lg-4">
                        <div class="p-4 h-100 bg-white bg-opacity-10 rounded-3 backdrop-blur-sm border border-white border-opacity-20">
                            <h3 class="mb-4 text-white">Why Choose Us?</h3>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-3 text-white opacity-90">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>Over 20 years of industry experience
                                </li>
                                <li class="mb-3 text-white opacity-90">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>Commitment to exceptional customer service
                                </li>
                                <li class="mb-3 text-white opacity-90">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>Accurate and reliable cost estimates
                                </li>
                                <li class="mb-3 text-white opacity-90">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>Tailored, cost-effective solutions
                                </li>
                                <li class="mb-3 text-white opacity-90">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>Trusted partner in the industry
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services -->
        <section id="services" clas s="py-5">
            <div class="container py-5">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-6 text-center">
                        <h2 class="display-5 fw-bold mb-3">Estimating Services</h2>
                        <p class="lead text-muted">Quality cost estimates at affordable rates</p>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="bi bi-building-fill-gear fs-3"></i>
                            </div>
                            <h3 class="h4 mb-3">MEP Estimating</h3>
                            <p class="text-muted mb-0">Contractors are always looking for MEP estimating services. US Bid Estimating & Engineering provides affordable, accurate and cost-effective cost</p>
                            <a href="#contact" class="btn btn-outline-dark mt-4">Request Service</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="bi bi-tools fs-3"></i>
                            </div>
                            <h3 class="h4 mb-3">Material Takeoff</h3>
                            <p class="text-muted mb-0">We have an experienced and efficient team of construction cost estimators to work on residential, commercial and Industrial construction project</p>
                            <a href="#contact" class="btn btn-outline-dark mt-4">Request Service</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="bi bi-calculator fs-3"></i>
                            </div>
                            <h3 class="h4 mb-3">Cost Estimation</h3>
                            <p class="text-muted mb-0">We provide complete cost estimate of the project including labor, material and support services required to complete the project</p>
                            <a href="#contact" class="btn btn-outline-dark mt-4">Request Service</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="bi bi-building-fill fs-3"></i>
                            </div>
                            <h3 class="h4 mb-3">Construction Estimate</h3>
                            <p class="text-muted mb-0">Are you in search of a dependable platform for construction estimating services? Look no further than US BID Estimating – your one-stop solution for a range of estimation services</p>
                            <a href="#contact" class="btn btn-outline-dark mt-4">Request Service</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="bi bi-lightning-fill fs-3"></i>
                            </div>
                            <h3 class="h4 mb-3">Electrical Estimate</h3>
                            <p class="text-muted mb-0">The quality of our work reflects our experience, which we have gained in years. We deal with all kinds of electrical works at private, government and military sectors</p>
                            <a href="#contact" class="btn btn-outline-dark mt-4">Request Service</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="bi bi-wrench-adjustable fs-3"></i>
                            </div>
                            <h3 class="h4 mb-3">Plumbing Estimate</h3>
                            <p class="text-muted mb-0">Our experienced estimators in mechanical, electrical, plumbing & civil works use traditional & trade specific softwares like Planswift, Trimble Accubid and CAD to prepare take-off</p>
                            <a href="#contact" class="btn btn-outline-dark mt-4">Request Service</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="bi bi-fire fs-3"></i>
                            </div>
                            <h3 class="h4 mb-3">Fire Suppression System</h3>
                            <p class="text-muted mb-0">US Bid Estimating & Engineering provides accurate take-offs and estimation services. We have experienced estimators with hands-on field experience and estimation</p>
                            <a href="#contact" class="btn btn-outline-dark mt-4">Request Service</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="bi bi-gear-fill fs-3"></i>
                            </div>
                            <h3 class="h4 mb-3">Mechanical and HVAC</h3>
                            <p class="text-muted mb-0">Professional estimation & takeoff service providers having more than a decade of experience in Mechanical, Plumbing, Electrical, Civil, Oil & Gas Piping and WWT Plants</p>
                            <a href="#contact" class="btn btn-outline-dark mt-4">Request Service</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="bi bi-buildings-fill fs-3"></i>
                            </div>
                            <h3 class="h4 mb-3">Civil Estimate</h3>
                            <p class="text-muted mb-0">We are specialized in the Mechanical, Electrical & Plumbing (MEP) & Civil trades with professionals having extensive experience in execution and estimation</p>
                            <a href="#contact" class="btn btn-outline-dark mt-4">Request Service</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container py-5">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-6 text-center">
                        <h2 class="display-5 fw-bold mb-3">Engineering Services</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="bi bi-gear-wide-connected fs-3"></i>
                            </div>
                            <h3 class="h4 mb-3">Engineering Service</h3>
                            <p class="text-muted mb-0">We offer FEED, Basic and Detailed Engineering services covering the complete range of Process, Piping, Static Equipment, Civil and Structure, Electrical and Instrumentation</p>
                            <a href="#contact" class="btn btn-outline-dark mt-4">Request Service</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="bi bi-file-earmark-check-fill fs-3"></i>
                            </div>
                            <h3 class="h4 mb-3">EPC Proposal Support</h3>
                            <p class="text-muted mb-0">Review of ITB, verification of FEED, Project synopsis, extraction of scope of work, prepare queries for client</p>
                            <a href="#contact" class="btn btn-outline-dark mt-4">Request Service</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="bi bi-calculator fs-3"></i>
                            </div>
                            <h3 class="h4 mb-3">Procurement Service</h3>
                            <p class="text-muted mb-0">Preparation of Tender documents / material requisitions, Technical evaluation of bids</p>
                            <a href="#contact" class="btn btn-outline-dark mt-4">Request Service</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Us -->
        <section id="contact" class="hero-section">
            <div class="container py-5">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-6 text-center">
                        <h2 class="display-5 fw-bold text-white mb-3">Get In Touch</h2>
                        <p class="lead text-white opacity-90">Let's discuss your project requirements</p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="bg-white bg-opacity-10 rounded-3 backdrop-blur-sm border border-white border-opacity-20 p-4 p-md-5">
                            <div class="row g-4">
                                <!-- Contact Info -->
                                <div class="col-md-5">
                                    <div class="mb-4">
                                        <h4 class="text-white mb-3">Contact Information</h4>
                                        <ul class="list-unstyled text-white opacity-90">
                                            <li class="mb-3">
                                                <i class="bi bi-geo-alt-fill me-2"></i>
                                                New York, NY 10001
                                            </li>
                                            <li class="mb-3">
                                                <i class="bi bi-telephone-fill me-2"></i>
                                                (555) 123-4567
                                            </li>
                                            <li class="mb-3">
                                                <i class="bi bi-envelope-fill me-2"></i>
                                                info@example.com
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <div>
                                        <h4 class="text-white mb-3">Business Hours</h4>
                                        <ul class="list-unstyled text-white opacity-90">
                                            <li class="mb-2">Monday - Friday: 9am - 5pm</li>
                                            <li>Saturday - Sunday: Closed</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Contact Form -->
                                <div class="col-md-7">
                                    <form>
                                        <div class="mb-3">
                                            <input type="text" class="form-control bg-white bg-opacity-10 border-white border-opacity-20 text-white" placeholder="Your Name">
                                        </div>
                                        <div class="mb-3">
                                            <input type="email" class="form-control bg-white bg-opacity-10 border-white border-opacity-20 text-white" placeholder="Email Address">
                                        </div>
                                        <div class="mb-3">
                                            <select class="form-select bg-white bg-opacity-10 border-white border-opacity-20 text-white">
                                                <option selected class="text-dark">Select Service Type</option>
                                                <option value="Estimation" class="text-dark">Estimation Service</option>
                                                <option value="Engineering" class="text-dark">Engineering Service</option>
                                            </select>
                                        </div>
                                        <div class="mb-4">
                                            <textarea class="form-control bg-white bg-opacity-10 border-white border-opacity-20 text-white" rows="4" placeholder="Your Message"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary w-100 py-3">Send Message</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
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
    <!-- Scripts -->
    <script>
        // Scroll behavior
        window.addEventListener('scroll', function() {dd
            const topNav = document.querySelector('.top-nav');
            if (window.scrollY > 50) {
                topNav.classList.add('hidden');
            } else {
                topNav.classList.remove('hidden');
            }
        });
    </script>
    </html>