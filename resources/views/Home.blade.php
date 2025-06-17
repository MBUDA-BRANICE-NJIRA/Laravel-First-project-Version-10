<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home || Your Brand</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap">
    <style>
        :root {
            --primary: #3b82f6;
            --primary-dark: #1d4ed8;
            --secondary: #06b6d4;
            --accent: #8b5cf6;
            --success: #10b981;
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
            animation: float-particle 20s infinite linear;
        }

        .particle:nth-child(1) { width: 4px; height: 4px; left: 10%; animation-delay: 0s; }
        .particle:nth-child(2) { width: 6px; height: 6px; left: 20%; animation-delay: 2s; }
        .particle:nth-child(3) { width: 3px; height: 3px; left: 30%; animation-delay: 4s; }
        .particle:nth-child(4) { width: 5px; height: 5px; left: 40%; animation-delay: 6s; }
        .particle:nth-child(5) { width: 4px; height: 4px; left: 50%; animation-delay: 8s; }
        .particle:nth-child(6) { width: 7px; height: 7px; left: 60%; animation-delay: 10s; }
        .particle:nth-child(7) { width: 3px; height: 3px; left: 70%; animation-delay: 12s; }
        .particle:nth-child(8) { width: 5px; height: 5px; left: 80%; animation-delay: 14s; }
        .particle:nth-child(9) { width: 4px; height: 4px; left: 90%; animation-delay: 16s; }

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

        /* Hero Section */
        .hero {
            position: relative;
            padding: 6rem 2rem;
            text-align: center;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 50%, var(--accent) 100%);
            color: white;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="heroPattern" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="1" fill="white" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23heroPattern)"/></svg>');
            pointer-events: none;
        }

        .hero-content {
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-size: clamp(2.5rem, 6vw, 4.5rem);
            font-weight: 800;
            margin-bottom: 2rem;
            line-height: 1.1;
            background: linear-gradient(45deg, #ffffff, #e0e7ff, #c7d2fe);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 4px 8px rgba(0,0,0,0.1);
            letter-spacing: -0.02em;
        }

        .hero p {
            font-size: clamp(1.1rem, 2vw, 1.4rem);
            font-weight: 300;
            color: rgba(255, 255, 255, 0.9);
            max-width: 700px;
            margin: 0 auto 3rem;
            line-height: 1.7;
        }

        .cta-button {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            color: white;
            padding: 1rem 2.5rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            text-decoration: none;
            transition: all 0.4s ease;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            position: relative;
            overflow: hidden;
        }

        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.6s ease;
        }

        .cta-button:hover::before {
            left: 100%;
        }

        .cta-button:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }

        .cta-button::after {
            content: '→';
            font-size: 1.2rem;
            transition: transform 0.3s ease;
        }

        .cta-button:hover::after {
            transform: translateX(4px);
        }

        /* Floating elements in hero */
        .hero-decoration {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            animation: hero-float 8s ease-in-out infinite;
        }

        .hero-decoration:nth-child(1) {
            width: 100px;
            height: 100px;
            top: 15%;
            left: 10%;
            animation-delay: 0s;
        }

        .hero-decoration:nth-child(2) {
            width: 60px;
            height: 60px;
            top: 25%;
            right: 15%;
            animation-delay: 2s;
        }

        .hero-decoration:nth-child(3) {
            width: 80px;
            height: 80px;
            bottom: 20%;
            left: 20%;
            animation-delay: 4s;
        }

        .hero-decoration:nth-child(4) {
            width: 40px;
            height: 40px;
            bottom: 35%;
            right: 25%;
            animation-delay: 6s;
        }

        @keyframes hero-float {
            0%, 100% { transform: translateY(0px) rotate(0deg); opacity: 0.7; }
            50% { transform: translateY(-30px) rotate(180deg); opacity: 1; }
        }

        /* Features Section */
        .features {
            padding: 6rem 2rem;
            background: var(--bg);
            position: relative;
        }

        .features-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .features h2 {
            text-align: center;
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 700;
            margin-bottom: 4rem;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2.5rem;
        }

        .feature-card {
            background: var(--bg);
            padding: 3rem 2.5rem;
            border-radius: 20px;
            box-shadow: var(--shadow);
            transition: all 0.4s ease;
            border: 1px solid var(--border);
            position: relative;
            overflow: hidden;
            group: hover;
        }

        .feature-card::before {
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

        .feature-card:hover::before {
            transform: scaleX(1);
        }

        .feature-card:hover {
            transform: translateY(-12px);
            box-shadow: var(--shadow-xl);
            border-color: var(--primary);
        }

        .feature-card h3 {
            color: var(--primary);
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .feature-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            transition: transform 0.3s ease;
        }

        .feature-card:hover .feature-icon {
            transform: rotate(5deg) scale(1.1);
        }

        .feature-card p {
            color: var(--text-light);
            font-size: 1.1rem;
            line-height: 1.7;
        }

        /* Stats section */
        .stats-bar {
            background: var(--bg-secondary);
            padding: 3rem 2rem;
            margin: 4rem 0;
        }

        .stats-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 3rem;
            text-align: center;
        }

        .stat-item h3 {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--primary);
            margin-bottom: 0.5rem;
        }

        .stat-item p {
            color: var(--text-light);
            font-weight: 500;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .page-wrapper {
                margin: 1rem;
                border-radius: 16px;
            }
            
            .hero {
                padding: 4rem 1.5rem;
            }
            
            .features {
                padding: 4rem 1.5rem;
            }
            
            .feature-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .feature-card {
                padding: 2rem 1.5rem;
            }
            
            .stats-container {
                grid-template-columns: repeat(2, 1fr);
                gap: 2rem;
            }
        }

        @media (max-width: 480px) {
            .stats-container {
                grid-template-columns: 1fr;
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
        <div class="particle"></div>
    </div>

    @include('Navbar')
    
    <div class="page-wrapper">
        <main>
            <section class="hero">
                <div class="hero-decoration"></div>
                <div class="hero-decoration"></div>
                <div class="hero-decoration"></div>
                <div class="hero-decoration"></div>
                
                <div class="hero-content">
                    <h1>Welcome to Our Platform</h1>
                    <p>A modern solution for your business needs. Streamline operations and boost productivity with our innovative tools.</p>
                    <a href="/Services" class="cta-button">
                        Explore Services
                    </a>
                </div>
            </section>

            <div class="stats-bar">
                <div class="stats-container">
                    <div class="stat-item">
                        <h3>500+</h3>
                        <p>Happy Clients</p>
                    </div>
                    <div class="stat-item">
                        <h3>24/7</h3>
                        <p>Support Available</p>
                    </div>
                    <div class="stat-item">
                        <h3>99.9%</h3>
                        <p>Uptime Guarantee</p>
                    </div>
                    <div class="stat-item">
                        <h3>10+</h3>
                        <p>Years Experience</p>
                    </div>
                </div>
            </div>

            <section class="features">
                <div class="features-container">
                    <h2>Why Choose Us</h2>
                    <div class="feature-grid">
                        <div class="feature-card">
                            <h3>
                                <div class="feature-icon">🚀</div>
                                Expert Solutions
                            </h3>
                            <p>Our team delivers cutting-edge solutions tailored to your specific business requirements.</p>
                        </div>
                        <div class="feature-card">
                            <h3>
                                <div class="feature-icon">🛡️</div>
                                24/7 Support
                            </h3>
                            <p>Round-the-clock assistance to ensure your operations run smoothly at all times.</p>
                        </div>
                        <div class="feature-card">
                            <h3>
                                <div class="feature-icon">📈</div>
                                Proven Results
                            </h3>
                            <p>Trusted by industry leaders with a track record of successful implementations.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>