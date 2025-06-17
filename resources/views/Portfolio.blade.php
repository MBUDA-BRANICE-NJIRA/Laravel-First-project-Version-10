<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Portfolio | Your Company</title>
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
        .portfolio-hero {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 50%, var(--accent) 100%);
            color: white;
            padding: 6rem 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .portfolio-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="portfolioPattern" width="25" height="25" patternUnits="userSpaceOnUse"><circle cx="12.5" cy="12.5" r="1.5" fill="white" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23portfolioPattern)"/></svg>');
            pointer-events: none;
        }

        .portfolio-header {
            position: relative;
            z-index: 2;
        }

        .portfolio-header h1 {
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            font-weight: 800;
            margin-bottom: 1.5rem;
            background: linear-gradient(45deg, #ffffff, #e0e7ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .portfolio-header p {
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

        /* Filter Buttons */
        .filter-buttons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1rem;
            margin: 3rem 0;
        }

        .filter-btn {
            background: var(--bg);
            color: var(--text);
            border: 1px solid var(--border);
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            box-shadow: var(--shadow);
        }

        .filter-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            z-index: -1;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .filter-btn.active,
        .filter-btn:hover {
            color: white;
            border-color: transparent;
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .filter-btn.active::before,
        .filter-btn:hover::before {
            opacity: 1;
        }

        /* Portfolio Grid */
        .portfolio-content {
            padding: 2rem 0 4rem;
        }

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2.5rem;
            margin: 4rem 0;
        }

        .portfolio-item {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: all 0.4s ease;
            border: 1px solid var(--border);
            background: var(--bg);
        }

        .portfolio-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--secondary), var(--accent));
            transform: scaleX(0);
            transition: transform 0.4s ease;
            z-index: 2;
        }

        .portfolio-item:hover::before {
            transform: scaleX(1);
        }

        .portfolio-item:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-xl);
            border-color: var(--primary);
        }

        .portfolio-image {
            height: 280px;
            background-size: cover;
            background-position: center;
            position: relative;
            overflow: hidden;
            transition: transform 0.5s ease;
        }

        .portfolio-image::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.1), rgba(139, 92, 246, 0.1));
            transition: opacity 0.3s ease;
        }

        .portfolio-item:hover .portfolio-image::after {
            opacity: 0.7;
        }

        .portfolio-item:hover .portfolio-image {
            transform: scale(1.05);
        }

        .portfolio-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.9), transparent);
            color: white;
            padding: 2rem;
            transform: translateY(100%);
            transition: transform 0.3s ease;
            z-index: 1;
        }

        .portfolio-item:hover .portfolio-overlay {
            transform: translateY(0);
        }

        .portfolio-overlay h3 {
            font-size: 1.5rem;
            margin-bottom: 0.75rem;
            font-weight: 600;
        }

        .portfolio-overlay p {
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 1.5rem;
            line-height: 1.7;
        }

        .portfolio-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: white;
            font-weight: 600;
            text-decoration: none;
            padding: 0.75rem 0;
            transition: all 0.3s ease;
            position: relative;
        }

        .portfolio-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, white, var(--secondary));
            transition: width 0.3s ease;
        }

        .portfolio-link:hover::after {
            width: 100%;
        }

        .portfolio-link:hover {
            transform: translateX(5px);
        }

        .portfolio-link span {
            transition: transform 0.3s ease;
        }

        .portfolio-link:hover span {
            transform: translateX(3px);
        }

        /* Category Badge */
        .category-badge {
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 500;
            z-index: 2;
            backdrop-filter: blur(5px);
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

        /* Responsive Design */
        @media (max-width: 768px) {
            .page-wrapper {
                margin: 1rem;
                border-radius: 16px;
            }
            
            .portfolio-hero {
                padding: 4rem 1.5rem;
            }
            
            .portfolio-content {
                padding: 2rem 1.5rem;
            }
            
            .portfolio-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .portfolio-item {
                border-radius: 16px;
            }
            
            .portfolio-overlay {
                padding: 1.5rem;
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
        <section class="portfolio-hero">
            <div class="hero-decoration"></div>
            <div class="hero-decoration"></div>
            <div class="hero-decoration"></div>
            
            <div class="portfolio-header">
                <h1>Our Portfolio</h1>
                <p>Explore our collection of successful projects and see how we've helped businesses achieve remarkable results.</p>
            </div>
        </section>

        <main class="portfolio-content">
            <div class="container">
                <div class="filter-buttons">
                    <button class="filter-btn active" data-filter="all">All Projects</button>
                    <button class="filter-btn" data-filter="web">Web Design</button>
                    <button class="filter-btn" data-filter="mobile">Mobile Apps</button>
                    <button class="filter-btn" data-filter="branding">Branding</button>
                    <button class="filter-btn" data-filter="marketing">Marketing</button>
                </div>

                <div class="portfolio-grid">
                    <div class="portfolio-item" data-category="web">
                        <div class="category-badge">Web Design</div>
                        <div class="portfolio-image" style="background-image: url('https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80')"></div>
                        <div class="portfolio-overlay">
                            <h3>E-Commerce Platform</h3>
                            <p>A complete online shopping solution with custom CMS and payment integration that increased client sales by 240%.</p>
                            <a href="#" class="portfolio-link">
                                View Project <span>→</span>
                            </a>
                        </div>
                    </div>
                    
                    <div class="portfolio-item" data-category="mobile">
                        <div class="category-badge">Mobile App</div>
                        <div class="portfolio-image" style="background-image: url('https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80')"></div>
                        <div class="portfolio-overlay">
                            <h3>Fitness Tracker App</h3>
                            <p>Cross-platform mobile application with health data synchronization and personalized workout plans.</p>
                            <a href="#" class="portfolio-link">
                                View Project <span>→</span>
                            </a>
                        </div>
                    </div>
                    
                    <div class="portfolio-item" data-category="branding">
                        <div class="category-badge">Branding</div>
                        <div class="portfolio-image" style="background-image: url('https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80')"></div>
                        <div class="portfolio-overlay">
                            <h3>Corporate Branding</h3>
                            <p>Complete visual identity for a financial services startup including logo, colors, and brand guidelines.</p>
                            <a href="#" class="portfolio-link">
                                View Project <span>→</span>
                            </a>
                        </div>
                    </div>
                    
                    <div class="portfolio-item" data-category="web">
                        <div class="category-badge">Web Design</div>
                        <div class="portfolio-image" style="background-image: url('https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80')"></div>
                        <div class="portfolio-overlay">
                            <h3>SAAS Dashboard</h3>
                            <p>Analytics dashboard with real-time data visualization and custom reporting tools.</p>
                            <a href="#" class="portfolio-link">
                                View Project <span>→</span>
                            </a>
                        </div>
                    </div>
                    
                    <div class="portfolio-item" data-category="marketing">
                        <div class="category-badge">Marketing</div>
                        <div class="portfolio-image" style="background-image: url('https://images.unsplash.com/photo-1552581234-26160f608093?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80')"></div>
                        <div class="portfolio-overlay">
                            <h3>Digital Campaign</h3>
                            <p>Social media marketing strategy that grew a retail brand's online following by 350% in 3 months.</p>
                            <a href="#" class="portfolio-link">
                                View Project <span>→</span>
                            </a>
                        </div>
                    </div>
                    
                    <div class="portfolio-item" data-category="mobile">
                        <div class="category-badge">Mobile App</div>
                        <div class="portfolio-image" style="background-image: url('https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80')"></div>
                        <div class="portfolio-overlay">
                            <h3>Travel Planner App</h3>
                            <p>Mobile application for itinerary planning, bookings, and local recommendations with AI integration.</p>
                            <a href="#" class="portfolio-link">
                                View Project <span>→</span>
                            </a>
                        </div>
                    </div>
                </div>

                <section class="cta-section">
                    <div class="cta-content">
                        <h2>Ready to Start Your Project?</h2>
                        <p>Let's create something amazing together. Get in touch with our team today.</p>
                        <a href="/contact" class="primary-btn">
                            Get Started
                        </a>
                    </div>
                </section>
            </div>
        </main>
    </div>

    <script>
        // Enhanced filter functionality with animations
        document.querySelectorAll('.filter-btn').forEach(button => {
            button.addEventListener('click', () => {
                // Update active button with animation
                document.querySelectorAll('.filter-btn').forEach(btn => {
                    btn.classList.remove('active');
                });
                button.classList.add('active');
                
                // Filter items with fade animation
                const filter = button.dataset.filter;
                const items = document.querySelectorAll('.portfolio-item');
                
                items.forEach(item => {
                    if (filter === 'all' || item.dataset.category === filter) {
                        item.style.opacity = '0';
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.style.opacity = '1';
                        }, 50);
                    } else {
                        item.style.opacity = '0';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });

        // Add hover effect to portfolio items
        document.querySelectorAll('.portfolio-item').forEach(item => {
            item.addEventListener('mouseenter', () => {
                item.style.transform = 'translateY(-10px)';
                item.style.boxShadow = '0 25px 50px -12px rgba(0, 0, 0, 0.25)';
            });
            
            item.addEventListener('mouseleave', () => {
                if (!item.classList.contains('active')) {
                    item.style.transform = '';
                    item.style.boxShadow = '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)';
                }
            });
        });
    </script>
</body>
</html>