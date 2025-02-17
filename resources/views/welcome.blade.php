    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Building Estimation Electrical</title>
        <link rel="icon" type="favicon" href="{{ asset('favicon.PNG') }}">
         <link rel="manifest" href="{{ asset('favicon.PNG') }}">
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
            .alert {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1050;
            min-width: 300px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
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
            min-height: 88.5vh;
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
            .top-contact {
            gap: 0rem;
            display: grid;
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
            gap: 0rem;
            display: grid;
            }
            }
            .whatsapp-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25D366;
            color: white;
            font-family: Arial, sans-serif;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            padding: 10px 10px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
            animation: floatAnimation 1.5s infinite alternate ease-in-out;
            z-index: 1000;
            }
            .whatsapp-button:hover {
            background-color: #1ebe5d;
            transform: scale(1.1);
            }
            @keyframes floatAnimation {
            0% {
            transform: translateY(0);
            }
            100% {
            transform: translateY(-10px);
            }
            }
            .call-link {
            text-decoration: none;
            color: inherit;
            transition: color 0.3s ease-in-out;
            }
            .call-link:hover {
            color: #25D366; /* Change to green (or any color) on hover */
            }
            .email-link {
            text-decoration: none;
            color: inherit;
            transition: color 0.3s ease-in-out;
            }
            .email-link:hover {
            color: #25D366; /* Change to blue (or any color) on hover */
            }
            .map-link {
            text-decoration: none;
            color: inherit;
            transition: color 0.3s ease-in-out;
            }
            .map-link:hover {
            color: #25D366; /* Change to orange (or any color) on hover */
            }
            .project-image {
            transition: all 0.3s ease;
            max-height: 0;
            overflow: hidden;
            }
            .project-image.show {
            max-height: 500px; /* Adjust based on your needs */
            }
        </style>
    </head>
    <body>
        <!-- Whatapp Chat Link -->
        <a href="https://wa.me/923470171002?text=Hello%2C%20I%20would%20like%20to%20inquire%20about%20your%20estimation%20services.%20Can%20you%20provide%20more%20details%3F" target="_blank" class="whatsapp-button">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" width="50" height="50" alt="WhatsApp">
        </a>

        <!-- Error Showing -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Navigation -->
        <div class="nav-wrapper">
            <div class="top-nav">
                <div class="container">
                    <div class="top-contact">
                        <span>
                            <a href="mailto:faizan.a@buildingestimationelectrical.com" class="email-link"><i class="bi bi-envelope me-2"></i>
                                faizan.a@buildingestimationelectrical.com
                            </a>
                        </span>
                        <span>
                            <a href="tel:+19796080010" class="call-link"><i class="bi bi-telephone-fill me-2"></i>+1 (979) 608-0010</a>
                        </span>
                        <span>
                            <a href="https://www.google.com/maps/search/?q=70+N+Wall+St,+Panama+City+Beach,+Florida+32413" target="_blank" class="map-link">
                                <i class="bi bi-geo-alt me-2"></i>70 N Wall St, Panama City Beach, Florida (FL), 32413
                            </a>
                        </span>
                    </div>
                </div>
            </div>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" width="75" height="75">
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
                        <p class="lead text-white-50 mb-5 animate-fade-up">A leading cost estimating firm based in Florida, we have been providing expert services since 2018. With a wealth of experience, we specialize in delivering accurate cost assessments and outstanding customer service. Our focus on offering customized, cost-effective solutions to meet each client's distinct needs has earned us a reputation as a reliable and trusted industry partner.</p>
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
                                    <span class="text-muted">BLOOMINGDALE, IL</span>
                                </div>
                                <h4 class="card-title">DAISO - Store Remodel</h4>
                                <p class="card-text">The existing retail establishment is undergoing remodeling for a new tenant, including the installation of updated equipment, fixtures, and finishes. Fire protection and sprinkler system updates, as well as fire alarm updates.</p>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Price For Estimate: $800</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Area: 22,012 sq ft</li>
                                </ul>
                                <button class="btn btn-outline-primary" onclick="toggleImage('BLOOMINGDALE-image')">View Image</button>
                                <!-- Image container -->
                                <div id="BLOOMINGDALE-image" class="project-image mt-3" style="display: none;">
                                    <img src="{{ asset('images/Portfolio1.png') }}" alt="The Windard Phase 2" class="img-fluid rounded">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Portfolio Item 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <span class="badge bg-primary me-2">Residential</span>
                                    <span class="text-muted">Stratford, CT</span>
                                </div>
                                <h4 class="card-title">100-Unit Multi-Family Building</h4>
                                <p class="card-text">The project at 225 Lordship Blvd, Stratford, CT, involves the development of a 100-unit multi-family building with electrical system installation and low voltage infrastructure, including data, communication, and security systems.</p>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Price For Estimate: $1500</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Area: 92,712 sq ft</li>
                                </ul>
                                <button class="btn btn-outline-primary" onclick="toggleImage('Stratford-image')">View Image</button>
                                <!-- Image container -->
                                <div id="Stratford-image" class="project-image mt-3" style="display: none;">
                                    <img src="{{ asset('images/Portfolio2.png') }}" alt="The Windard Phase 2" class="img-fluid rounded">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Portfolio Item 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <span class="badge bg-primary me-2">Residential</span>
                                    <span class="text-muted">Bridgeport, CT</span>
                                </div>
                                <h4 class="card-title">The Windard - Phase 2</h4>
                                <p class="card-text">The Windard - Phase 2 project on Johnson Street, Bridgeport, CT, involves electrical system installation and low voltage infrastructure, including data, communication, and security systems for the next phase of development.</p>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Price For Estimate: $1200</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Area: 62,092 sq ft</li>
                                </ul>
                                <button class="btn btn-outline-primary" onclick="toggleImage('windard-image')">View Image</button>
                                <!-- Image container -->
                                <div id="windard-image" class="project-image mt-3" style="display: none;">
                                    <img src="{{ asset('images/Portfolio3.png') }}" alt="The Windard Phase 2" class="img-fluid rounded">
                                </div>
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
                            <p class="text-white opacity-90">A leading cost estimating firm based in Florida, we have been providing expert services since 2018. With a wealth of experience, we specialize in delivering accurate cost assessments and outstanding customer service. Our focus on offering customized, cost-effective solutions to meet each client's distinct needs has earned us a reputation as a reliable and trusted industry partner.</p>
                        </div>
                    </div>

                    <!-- Our Mission Column -->
                    <div class="col-lg-4">
                        <div class="p-4 h-100 bg-white bg-opacity-10 rounded-3 backdrop-blur-sm border border-white border-opacity-20">
                            <h3 class="mb-4 text-white">Our Mission</h3>
                            <p class="text-white opacity-90">At Building Estimation Electrical, our mission is to provide accurate and reliable cost estimates that help our clients achieve their project goals. We strive to deliver exceptional service and build long-lasting relationships based on trust and integrity.</p>
                        </div>
                    </div>

                    <!-- Why Choose Us Column -->
                    <div class="col-lg-4">
                        <div class="p-4 h-100 bg-white bg-opacity-10 rounded-3 backdrop-blur-sm border border-white border-opacity-20">
                            <h3 class="mb-4 text-white">Why Choose Us?</h3>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-3 text-white opacity-90">
                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>Over 6 years of industry experience
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
                    <div class="col">
                        <div class="bg-white bg-opacity-10 rounded-3 backdrop-blur-sm border border-white border-opacity-20 p-4 p-md-5">
                            <div class="row g-4">
                                <!-- Contact Info -->
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <h4 class="text-white mb-3">Contact Information</h4>
                                        <ul class="list-unstyled text-white opacity-90">
                                            <li class="mb-3">
                                                <a href="https://www.google.com/maps/search/?q=70+N+Wall+St,+Panama+City+Beach,+Florida+32413" target="_blank" class="map-link">
                                                    <i class="bi bi-geo-alt me-2"></i>70 N Wall St, Panama City Beach, Florida (FL), 32413
                                                </a>
                                            </li>
                                            <li class="mb-3">
                                                <a href="tel:+19796080010" class="call-link">
                                                    <i class="bi bi-telephone-fill me-2"></i>
                                                    +1 (979) 608-0010
                                                </a>
                                            </li>
                                            <li class="mb-3">
                                                <a href="mailto:faizan.a@buildingestimationelectrical.com" class="email-link">
                                                <i class="bi bi-envelope me-2"></i>faizan.a@buildingestimationelectrical.com
                                            </a>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <div>
                                        <h4 class="text-white mb-3">Business Hours</h4>
                                        <ul class="list-unstyled text-white opacity-90">
                                            <li class="mb-2">Monday - Friday: 9am - 5pm EST</li>
                                            <li>Saturday - Sunday: Closed</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Contact Form -->
                                <div class="col-lg-6">
                                    <form action="{{ route('contact.submit') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <input type="text" name="name" class="form-control bg-white bg-opacity-10 border-white border-opacity-20 text-white @error('name') is-invalid @enderror" placeholder="Your Name" value="{{ old('name') }}">
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <input type="email" name="email" class="form-control bg-white bg-opacity-10 border-white border-opacity-20 text-white @error('email') is-invalid @enderror" placeholder="Email Address" value="{{ old('email') }}">
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <select name="service_type" class="form-select bg-white bg-opacity-10 border-white border-opacity-20 text-white @error('service_type') is-invalid @enderror">
                                                <option selected disabled class="text-dark">Select Service Type</option>
                                                <option value="Estimation" class="text-dark" {{ old('service_type') == 'Estimation' ? 'selected' : '' }}>Estimation Service</option>
                                                <option value="Engineering" class="text-dark" {{ old('service_type') == 'Engineering' ? 'selected' : '' }}>Engineering Service</option>
                                            </select>
                                            @error('service_type')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="floor_design" class="form-label text-white">Floor Design File</label>
                                            <input type="file" name="floor_design" class="form-control bg-white bg-opacity-10 border-white border-opacity-20 text-white @error('floor_design') is-invalid @enderror" accept=".pdf,.dwg,.dxf">
                                            @error('floor_design')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-4">
                                            <textarea name="message" class="form-control bg-white bg-opacity-10 border-white border-opacity-20 text-white @error('message') is-invalid @enderror" rows="4" placeholder="Your Message">{{ old('message') }}</textarea>
                                            @error('message')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
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
                        <p class="text-white-50">A leading cost estimating firm based in Florida, we have been providing expert services since 2018. With a wealth of experience, we specialize in delivering accurate cost assessments and outstanding customer service. Our focus on offering customized, cost-effective solutions to meet each client's distinct needs has earned us a reputation as a reliable and trusted industry partner.</p>
                    </div>
                    <div class="col-lg-2">
                        <h3 class="h4 mb-4">Quick Links</h3>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a class="nav-link" href="#home">Home</a></li>
                            <li class="mb-2"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                            <li class="mb-2"><a class="nav-link" href="#services">Services</a></li>
                            <li class="mb-2"><a class="nav-link" href="#about-us">About Us</a></li>
                            <li class="mb-2"><a class="nav-link" href="#contact">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="h4 mb-4">Contact Info</h3>
                        <ul class="list-unstyled text-white-50">
                            <li class="mb-2">
                                <a href="mailto:faizan.a@buildingestimationelectrical.com" class="email-link">
                                    <i class="bi bi-envelope me-2"></i>faizan.a@buildingestimationelectrical.com
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="tel:+19796080010" class="call-link">
                                <i class="bi bi-telephone-fill me-2"></i>+1 (979) 608-0010
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="https://www.google.com/maps/search/?q=70+N+Wall+St,+Panama+City+Beach,+Florida+32413" target="_blank" class="map-link">
                                    <i class="bi bi-geo-alt me-2"></i>70 N Wall St, Panama City Beach, Florida (FL), 32413
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="border-top border-secondary mt-5 pt-4 text-center">
                    <p class="mb-0 text-white-50">&copy; 2025 Building Estimation Electrical. All rights reserved.</p>
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

        // Auto dismiss alerts after 5 seconds
        document.addEventListener('DOMContentLoaded', function() {
            var alerts = document.querySelectorAll('.alert');
            alerts.forEach(function(alert) {
                setTimeout(function() {
                    var bsAlert = new bootstrap.Alert(alert);
                    bsAlert.close();
                }, 10000);
            });
        });

        function toggleImage(imageId) {
            const imageContainer = document.getElementById(imageId);
            const button = event.currentTarget;
            
            if (imageContainer.style.display === 'none') {
                imageContainer.style.display = 'block';
                button.textContent = 'Hide Image';
                // Add a small delay before adding the show class for the animation
                setTimeout(() => {
                    imageContainer.classList.add('show');
                }, 10);
            } else {
                imageContainer.classList.remove('show');
                button.textContent = 'View Image';
                // Wait for animation to complete before hiding
                setTimeout(() => {
                    imageContainer.style.display = 'none';
                }, 300);
            }
        }
    </script>
    </html>