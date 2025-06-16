<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Portfolio | Your Company</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap">
    <style>
        :root {
            --primary: #2563eb;
            --primary-light: #eff6ff;
            --text: #1f2937;
            --text-light: #6b7280;
            --bg: #ffffff;
            --border: #e5e7eb;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            color: var(--text);
            line-height: 1.6;
            background-color: #f9fafb;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .portfolio-header {
            text-align: center;
            margin: 3rem 0;
        }

        .portfolio-header h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .portfolio-header p {
            color: var(--text-light);
            max-width: 700px;
            margin: 0 auto;
        }

        .filter-buttons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 0.75rem;
            margin: 2rem 0 3rem;
        }

        .filter-btn {
            background: var(--bg);
            color: var(--text);
            border: 1px solid var(--border);
            padding: 0.5rem 1.25rem;
            border-radius: 50px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-btn.active,
        .filter-btn:hover {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
        }

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2rem;
            margin: 3rem 0;
        }

        .portfolio-item {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: var(--shadow);
        }

        .portfolio-image {
            height: 250px;
            background-color: #e5e7eb;
            background-size: cover;
            background-position: center;
            transition: transform 0.5s ease;
        }

        .portfolio-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 1.5rem;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }

        .portfolio-item:hover .portfolio-overlay {
            transform: translateY(0);
        }

        .portfolio-item:hover .portfolio-image {
            transform: scale(1.05);
        }

        .portfolio-overlay h3 {
            margin-top: 0;
            margin-bottom: 0.5rem;
        }

        .portfolio-overlay p {
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 1rem;
        }

        .portfolio-link {
            color: white;
            font-weight: 500;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
        }

        .portfolio-link svg {
            margin-left: 0.5rem;
            transition: transform 0.3s ease;
        }

        .portfolio-link:hover svg {
            transform: translateX(3px);
        }

        .cta-section {
            text-align: center;
            margin: 5rem 0;
            padding: 3rem 2rem;
            background: var(--primary-light);
            border-radius: 8px;
        }

        .cta-section h2 {
            margin-top: 0;
        }

        .primary-btn {
            background: var(--primary);
            color: white;
            border: none;
            padding: 0.75rem 2rem;
            border-radius: 4px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .primary-btn:hover {
            background: #1d4ed8;
        }

        @media (max-width: 768px) {
            .portfolio-header h1 {
                font-size: 2rem;
            }
            
            .portfolio-grid {
                grid-template-columns: 1fr;
            }
            
            .portfolio-image {
                height: 200px;
            }
        }
    </style>
</head>
<body>
    @include('Navbar')
    
    <main class="container">
        <section class="portfolio-header">
            <h1>Our Portfolio</h1>
            <p>Explore our collection of successful projects and see how we've helped businesses like yours achieve remarkable results.</p>
        </section>

        <div class="filter-buttons">
            <button class="filter-btn active" data-filter="all">All Projects</button>
            <button class="filter-btn" data-filter="web">Web Design</button>
            <button class="filter-btn" data-filter="mobile">Mobile Apps</button>
            <button class="filter-btn" data-filter="branding">Branding</button>
            <button class="filter-btn" data-filter="marketing">Marketing</button>
        </div>

        <div class="portfolio-grid">
            <div class="portfolio-item" data-category="web">
                <div class="portfolio-image" style="background-image: url('https://via.placeholder.com/600x400')"></div>
                <div class="portfolio-overlay">
                    <h3>E-Commerce Platform</h3>
                    <p>A complete online shopping solution with custom CMS and payment integration.</p>
                    <a href="#" class="portfolio-link">
                        View Project
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            
            <div class="portfolio-item" data-category="mobile">
                <div class="portfolio-image" style="background-image: url('https://via.placeholder.com/600x400')"></div>
                <div class="portfolio-overlay">
                    <h3>Fitness Tracker App</h3>
                    <p>Cross-platform mobile application with health data synchronization.</p>
                    <a href="#" class="portfolio-link">
                        View Project
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            
            <div class="portfolio-item" data-category="branding">
                <div class="portfolio-image" style="background-image: url('https://via.placeholder.com/600x400')"></div>
                <div class="portfolio-overlay">
                    <h3>Corporate Branding</h3>
                    <p>Complete visual identity for a financial services startup.</p>
                    <a href="#" class="portfolio-link">
                        View Project
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            
            <div class="portfolio-item" data-category="web">
                <div class="portfolio-image" style="background-image: url('https://via.placeholder.com/600x400')"></div>
                <div class="portfolio-overlay">
                    <h3>SAAS Dashboard</h3>
                    <p>Analytics dashboard with real-time data visualization.</p>
                    <a href="#" class="portfolio-link">
                        View Project
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            
            <div class="portfolio-item" data-category="marketing">
                <div class="portfolio-image" style="background-image: url('https://via.placeholder.com/600x400')"></div>
                <div class="portfolio-overlay">
                    <h3>Digital Campaign</h3>
                    <p>Social media marketing strategy for a retail brand.</p>
                    <a href="#" class="portfolio-link">
                        View Project
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            
            <div class="portfolio-item" data-category="mobile">
                <div class="portfolio-image" style="background-image: url('https://via.placeholder.com/600x400')"></div>
                <div class="portfolio-overlay">
                    <h3>Travel Planner App</h3>
                    <p>Mobile application for itinerary planning and bookings.</p>
                    <a href="#" class="portfolio-link">
                        View Project
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <section class="cta-section">
            <h2>Ready to start your project?</h2>
            <p>Let's create something amazing together. Get in touch with our team today.</p>
            <a href="/contact" class="primary-btn">Get Started</a>
        </section>
    </main>

    

    <script>
        // Simple filter functionality
        document.querySelectorAll('.filter-btn').forEach(button => {
            button.addEventListener('click', () => {
                // Update active button
                document.querySelectorAll('.filter-btn').forEach(btn => {
                    btn.classList.remove('active');
                });
                button.classList.add('active');
                
                // Filter items
                const filter = button.dataset.filter;
                document.querySelectorAll('.portfolio-item').forEach(item => {
                    if (filter === 'all' || item.dataset.category === filter) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    </script>
</body>
</html>