<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services | Your Company</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap">
    <style>
        :root {
            --primary: #3b82f6;
            --primary-dark: #1d4ed8;
            --secondary: #06b6d4;
            --accent: #8b5cf6;
            --success: #10b981;
            --warning: #f59e0b;
            --text: #0f172a;
            --text-light: #64748b;
            --text-muted: #94a3b8;
            --bg: #ffffff;
            --bg-secondary: #f8fafc;
            --bg-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --border: #e2e8f0;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            --shadow-xl: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            color: var(--text);
            line-height: 1.6;
            background: var(--bg-gradient);
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }

        /* Animated background particles */
        .bg-particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float-particle 25s infinite linear;
        }

        .particle:nth-child(1) { width: 3px; height: 3px; left: 15%; animation-delay: 0s; }
        .particle:nth-child(2) { width: 5px; height: 5px; left: 25%; animation-delay: 3s; }
        .particle:nth-child(3) { width: 4px; height: 4px; left: 35%; animation-delay: 6s; }
        .particle:nth-child(4) { width: 6px; height: 6px; left: 45%; animation-delay: 9s; }
        .particle:nth-child(5) { width: 3px; height: 3px; left: 55%; animation-delay: 12s; }
        .particle:nth-child(6) { width: 5px; height: 5px; left: 65%; animation-delay: 15s; }
        .particle:nth-child(7) { width: 4px; height: 4px; left: 75%; animation-delay: 18s; }
        .particle:nth-child(8) { width: 7px; height: 7px; left: 85%; animation-delay: 21s; }

        @keyframes float-particle {
            0% { transform: translateY(100vh) rotate(0deg); opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { transform: translateY(-100px) rotate(360deg); opacity: 0; }
        }

        .page-wrapper {
            background: var(--bg);
            border-radius: 24px;
            box-shadow: var(--shadow-xl);
            margin: 2rem;
            overflow: hidden;
            position: relative;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        /* Hero Section */
        .services-hero {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 50%, var(--accent) 100%);
            color: white;
            padding: 4rem 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .services-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="servicesPattern" width="25" height="25" patternUnits="userSpaceOnUse"><circle cx="12.5" cy="12.5" r="1.5" fill="white" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23servicesPattern)"/></svg>');
            pointer-events: none;
        }

        .services-header {
            position: relative;
            z-index: 2;
        }

        .services-header h1 {
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            font-weight: 800;
            margin-bottom: 1.5rem;
            background: linear-gradient(45deg, #ffffff, #e0e7ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .services-header p {
            font-size: 1.25rem;
            font-weight: 300;
            max-width: 700px;
            margin: 0 auto;
            opacity: 0.95;
            line-height: 1.7;
        }

        /* Floating elements */
        .hero-decoration {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            animation: hero-float 10s ease-in-out infinite;
        }

        .hero-decoration:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 20%;
            left: 15%;
            animation-delay: 0s;
        }

        .hero-decoration:nth-child(2) {
            width: 60px;
            height: 60px;
            top: 30%;
            right: 20%;
            animation-delay: 3s;
        }

        .hero-decoration:nth-child(3) {
            width: 40px;
            height: 40px;
            bottom: 25%;
            left: 25%;
            animation-delay: 6s;
        }

        @keyframes hero-float {
            0%, 100% { transform: translateY(0px) rotate(0deg); opacity: 0.6; }
            50% { transform: translateY(-25px) rotate(180deg); opacity: 1; }
        }

        /* Services Grid */
        .services-content {
            padding: 4rem 2rem;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2.5rem;
            margin: 4rem 0;
        }

        .service-card {
            background: var(--bg);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: all 0.4s ease;
            border: 1px solid var(--border);
            position: relative;
            group: hover;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--secondary), var(--accent));
            transform: scaleX(0);
            transition: transform 0.4s ease;
        }

        .service-card:hover::before {
            transform: scaleX(1);
        }

        .service-card:hover {
            transform: translateY(-15px);
            box-shadow: var(--shadow-xl);
            border-color: var(--primary);
        }

        .service-image {
            height: 240px;
            background: linear-gradient(45deg, #f0f9ff, #e0f2fe);
            background-size: cover;
            background-position: center;
            position: relative;
            overflow: hidden;
        }

        .service-image::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.1), rgba(139, 92, 246, 0.1));
            transition: opacity 0.3s ease;
        }

        .service-card:hover .service-image::after {
            opacity: 0.7;
        }

        .service-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            z-index: 2;
            transition: all 0.3s ease;
        }

        .service-card:hover .service-icon {
            transform: translate(-50%, -50%) scale(1.1) rotate(5deg);
            background: white;
            box-shadow: var(--shadow-lg);
        }

        .service-content {
            padding: 2.5rem;
        }

        .service-content h2 {
            color: var(--primary);
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            transition: color 0.3s ease;
        }

        .service-card:hover .service-content h2 {
            color: var(--accent);
        }

        .service-content p {
            color: var(--text-light);
            margin-bottom: 2rem;
            line-height: 1.7;
            font-size: 1rem;
        }

        .service-cta {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--primary);
            font-weight: 600;
            text-decoration: none;
            padding: 0.75rem 0;
            transition: all 0.3s ease;
            position: relative;
        }

        .service-cta::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--primary), var(--accent));
            transition: width 0.3s ease;
        }

        .service-cta:hover::after {
            width: 100%;
        }

        .service-cta:hover {
            color: var(--accent);
            transform: translateX(5px);
        }

        .service-cta span {
            transition: transform 0.3s ease;
        }

        .service-cta:hover span {
            transform: translateX(3px);
        }

        /* CTA Section */
        .cta-section {
            text-align: center;
            margin: 6rem 0 4rem;
            padding: 4rem 2rem;
            background: linear-gradient(135deg, var(--bg-secondary), #f1f5f9);
            border-radius: 24px;
            border: 1px solid var(--border);
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(59, 130, 246, 0.05) 0%, transparent 70%);
            animation: rotate 20s linear infinite;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .cta-content {
            position: relative;
            z-index: 2;
        }

        .cta-section h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .cta-section p {
            color: var(--text-light);
            font-size: 1.1rem;
            margin-bottom: 2.5rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .primary-btn {
            background: linear-gradient(135deg, var(--primary), var(--accent));
            color: white;
            border: none;
            padding: 1rem 2.5rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.4s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            box-shadow: var(--shadow);
            position: relative;
            overflow: hidden;
        }

        .primary-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.6s ease;
        }

        .primary-btn:hover::before {
            left: 100%;
        }

        .primary-btn:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg);
        }

        .primary-btn::after {
            content: '→';
            font-size: 1.2rem;
            transition: transform 0.3s ease;
        }

        .primary-btn:hover::after {
            transform: translateX(4px);
        }

        /* Service-specific styling */
        .service-card:nth-child(1) .service-image { background-image: url('https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'); }
        .service-card:nth-child(2) .service-image { background-image: url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'); }
        .service-card:nth-child(3) .service-image { background-image: url('https://images.unsplash.com/photo-1586717791821-3f44a563fa4c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'); }
        .service-card:nth-child(4) .service-image { background-image: url('https://images.unsplash.com/photo-1562577309-2592ab84b1bc?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'); }
        .service-card:nth-child(5) .service-image { background-image: url('https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'); }
        .service-card:nth-child(6) .service-image { background-image: url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'); }

        /* Responsive Design */
        @media (max-width: 768px) {
            .page-wrapper {
                margin: 1rem;
                border-radius: 16px;
            }
            
            .services-hero {
                padding: 3rem 1.5rem;
            }
            
            .services-content {
                padding: 3rem 1.5rem;
            }
            
            .services-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .service-card {
                border-radius: 16px;
            }
            
            .service-content {
                padding: 2rem;
            }
            
            .cta-section {
                padding: 3rem 1.5rem;
                margin: 4rem 0 3rem;
            }
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: var(--bg-secondary);
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, var(--primary), var(--accent));
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-dark);
        }
    </style>
</head>
<body>
    <div class="bg-particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    @include('Navbar')
    
    <div class="page-wrapper">
        <section class="services-hero">
            <div class="hero-decoration"></div>
            <div class="hero-decoration"></div>
            <div class="hero-decoration"></div>
            
            <div class="services-header">
                <h1>Our Services</h1>
                <p>Comprehensive solutions tailored to meet your business needs and drive sustainable growth.</p>
            </div>
        </section>

        <main class="services-content">
            <div class="container">
                <div class="services-grid">
                    <div class="service-card">
                        <div class="service-image">
                            <div class="service-icon">💻</div>
                        </div>
                        <div class="service-content">
                            <h2>Web Development</h2>
                            <p>Custom websites and web applications built with modern technologies to deliver exceptional user experiences.</p>
                            <a href="/contact" class="service-cta">
                                Learn more <span>→</span>
                            </a>
                        </div>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-image">
                            <div class="service-icon">📊</div>
                        </div>
                        <div class="service-content">
                            <h2>Digital Marketing</h2>
                            <p>Data-driven strategies to increase your online visibility and attract quality leads to your business.</p>
                            <a href="/contact" class="service-cta">
                                Learn more <span>→</span>
                            </a>
                        </div>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-image">
                            <div class="service-icon">🎨</div>
                        </div>
                        <div class="service-content">
                            <h2>UI/UX Design</h2>
                            <p>Beautiful, intuitive interfaces designed to engage users and enhance customer satisfaction.</p>
                            <a href="/contact" class="service-cta">
                                Learn more <span>→</span>
                            </a>
                        </div>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-image">
                            <div class="service-icon">🔍</div>
                        </div>
                        <div class="service-content">
                            <h2>SEO Optimization</h2>
                            <p>Improve your search rankings and organic traffic with our proven SEO techniques.</p>
                            <a href="/contact" class="service-cta">
                                Learn more <span>→</span>
                            </a>
                        </div>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-image">
                            <div class="service-icon">📱</div>
                        </div>
                        <div class="service-content">
                            <h2>Mobile App Development</h2>
                            <p>Cross-platform mobile applications that perform seamlessly across all devices.</p>
                            <a href="/contact" class="service-cta">
                                Learn more <span>→</span>
                            </a>
                        </div>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-image">
                            <div class="service-icon">☁️</div>
                        </div>
                        <div class="service-content">
                            <h2>Cloud Solutions</h2>
                            <p>Scalable cloud infrastructure to support your business growth and digital transformation.</p>
                            <a href="/contact" class="service-cta">
                                Learn more <span>→</span>
                            </a>
                        </div>
                    </div>
                </div>

                <section class="cta-section">
                    <div class="cta-content">
                        <h2>Ready to Get Started?</h2>
                        <p>Let's discuss how our services can help transform your business and achieve your goals.</p>
                        <a href="/contact" class="primary-btn">
                            Get in Touch
                        </a>
                    </div>
                </section>
            </div>
        </main>
    </div>
</body>
</html>