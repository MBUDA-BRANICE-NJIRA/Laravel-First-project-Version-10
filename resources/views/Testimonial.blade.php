<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Testimonials | Your Company</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --primary-light: #e0e7ff;
            --secondary: #06b6d4;
            --accent: #f59e0b;
            --text: #1f2937;
            --text-light: #6b7280;
            --bg: #ffffff;
            --bg-secondary: #f8fafc;
            --border: #e5e7eb;
            --shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --shadow-lg: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            --gradient: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--text);
            line-height: 1.6;
            background: var(--bg-secondary);
            overflow-x: hidden;
        }

        .hero-section {
            background: var(--gradient);
            padding: 6rem 2rem 4rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="0.5"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
            opacity: 0.3;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            margin: 0 auto;
        }

        .hero-section h1 {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 700;
            color: white;
            margin-bottom: 1.5rem;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .hero-section p {
            font-size: 1.25rem;
            color: rgba(255,255,255,0.9);
            max-width: 600px;
            margin: 0 auto 2rem;
        }

        .trust-indicators {
            display: flex;
            justify-content: center;
            gap: 3rem;
            margin-top: 3rem;
            flex-wrap: wrap;
        }

        .trust-item {
            color: rgba(255,255,255,0.9);
            text-align: center;
        }

        .trust-item .number {
            font-size: 2rem;
            font-weight: 700;
            display: block;
        }

        .trust-item .label {
            font-size: 0.875rem;
            opacity: 0.8;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .testimonials-section {
            padding: 6rem 0;
            position: relative;
        }

        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-header h2 {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .filter-tabs {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 3rem;
            flex-wrap: wrap;
        }

        .filter-tab {
            background: white;
            border: 2px solid var(--border);
            color: var(--text-light);
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .filter-tab.active,
        .filter-tab:hover {
            background: var(--primary);
            border-color: var(--primary);
            color: white;
            transform: translateY(-2px);
            box-shadow: var(--shadow);
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
            gap: 2rem;
            margin: 4rem 0;
        }

        .testimonial-card {
            background: white;
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: var(--shadow);
            position: relative;
            transition: all 0.3s ease;
            opacity: 1;
            transform: translateY(0);
        }

        .testimonial-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-lg);
        }

        .testimonial-card.hidden {
            opacity: 0;
            transform: translateY(20px);
            pointer-events: none;
        }

        .testimonial-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient);
            border-radius: 20px 20px 0 0;
        }

        .quote-icon {
            width: 40px;
            height: 40px;
            background: var(--primary-light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            color: var(--primary);
            font-size: 1.2rem;
        }

        .testimonial-content {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 2rem;
            color: var(--text);
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .author-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            border: 3px solid var(--primary-light);
            flex-shrink: 0;
        }

        .author-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .author-info h4 {
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 0.25rem;
        }

        .author-info .company {
            color: var(--text-light);
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .rating {
            display: flex;
            gap: 0.25rem;
            color: var(--accent);
        }

        .stats-showcase {
            background: white;
            border-radius: 20px;
            padding: 4rem 2rem;
            margin: 6rem 0;
            box-shadow: var(--shadow);
            text-align: center;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 3rem;
            max-width: 1000px;
            margin: 3rem auto 0;
        }

        .stat-item {
            position: relative;
        }

        .stat-item .stat-number {
            font-size: 3rem;
            font-weight: 700;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.5rem;
            display: block;
        }

        .stat-item .stat-label {
            color: var(--text-light);
            font-weight: 500;
        }

        .cta-section {
            background: var(--gradient);
            border-radius: 20px;
            padding: 4rem 2rem;
            text-align: center;
            margin: 6rem 0;
            color: white;
        }

        .cta-section h2 {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .cta-section p {
            font-size: 1.2rem;
            opacity: 0.9;
            margin-bottom: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            padding: 1rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            cursor: pointer;
            border: none;
            font-size: 1rem;
        }

        .btn-primary {
            background: white;
            color: var(--primary);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }

        .btn-secondary {
            background: transparent;
            color: white;
            border: 2px solid white;
        }

        .btn-secondary:hover {
            background: white;
            color: var(--primary);
        }

        .floating-elements {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
        }

        .floating-shape {
            position: absolute;
            background: var(--primary-light);
            border-radius: 50%;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }

        .floating-shape:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }

        .floating-shape:nth-child(2) {
            width: 120px;
            height: 120px;
            top: 60%;
            right: 10%;
            animation-delay: 2s;
        }

        .floating-shape:nth-child(3) {
            width: 60px;
            height: 60px;
            bottom: 20%;
            left: 20%;
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        .testimonial-card[data-category] {
            transition: all 0.5s ease;
        }

        @media (max-width: 768px) {
            .hero-section {
                padding: 4rem 1rem 3rem;
            }
            
            .testimonials-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
            
            .testimonial-card {
                padding: 2rem;
            }
            
            .trust-indicators {
                gap: 2rem;
            }
            
            .filter-tabs {
                justify-content: flex-start;
                overflow-x: auto;
                padding-bottom: 1rem;
            }
            
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
    @include('Navbar')
    <section class="hero-section">
        <div class="floating-elements">
            <div class="floating-shape"></div>
            <div class="floating-shape"></div>
            <div class="floating-shape"></div>
        </div>
        <div class="hero-content">
            <h1>Stories of Success</h1>
            <p>Discover how we've helped businesses transform their digital presence and achieve remarkable growth through innovative solutions.</p>
            <div class="trust-indicators">
                <div class="trust-item">
                    <span class="number">150+</span>
                    <span class="label">Happy Clients</span>
                </div>
                <div class="trust-item">
                    <span class="number">4.9★</span>
                    <span class="label">Average Rating</span>
                </div>
                <div class="trust-item">
                    <span class="number">98%</span>
                    <span class="label">Retention Rate</span>
                </div>
            </div>
        </div>
    </section>

    <main class="container">
        <section class="testimonials-section">
            <div class="section-header">
                <h2>What Our Clients Say</h2>
                <p>Real stories from real businesses that have experienced transformative results</p>
            </div>

            <div class="filter-tabs">
                <button class="filter-tab active" data-filter="all">All Stories</button>
                <button class="filter-tab" data-filter="web">Web Development</button>
                <button class="filter-tab" data-filter="mobile">Mobile Apps</button>
                <button class="filter-tab" data-filter="marketing">Digital Marketing</button>
                <button class="filter-tab" data-filter="design">Design & Branding</button>
            </div>

            <div class="testimonials-grid">
                <div class="testimonial-card" data-category="web">
                    <div class="quote-icon">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="testimonial-content">"Working with this team transformed our online presence completely. Their web development expertise helped us increase conversions by 40% in just three months. The attention to detail and user experience is outstanding."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="https://randomuser.me/api/portraits/women/43.jpg" alt="Sarah Johnson">
                        </div>
                        <div class="author-info">
                            <h4>Sarah Johnson</h4>
                            <p class="company">CEO, TechSolutions Inc.</p>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card" data-category="mobile">
                    <div class="quote-icon">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="testimonial-content">"The mobile app they developed for us exceeded all expectations. User engagement has doubled since launch, and the interface is incredibly intuitive. Our customers love the seamless experience."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael Chen">
                        </div>
                        <div class="author-info">
                            <h4>Michael Chen</h4>
                            <p class="company">Director of Product, HealthTrack</p>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card" data-category="marketing">
                    <div class="quote-icon">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="testimonial-content">"Their digital marketing strategy delivered a 300% ROI in the first quarter. We've never seen such impressive results from an agency before. The data-driven approach really sets them apart."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Emma Rodriguez">
                        </div>
                        <div class="author-info">
                            <h4>Emma Rodriguez</h4>
                            <p class="company">Marketing Director, StyleHub</p>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card" data-category="design">
                    <div class="quote-icon">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="testimonial-content">"The branding work they did completely revitalized our company image. Our customer feedback has been overwhelmingly positive since the rebrand. Sales increased by 60% in the following quarter."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="David Wilson">
                        </div>
                        <div class="author-info">
                            <h4>David Wilson</h4>
                            <p class="company">Founder, GreenEarth Foods</p>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card" data-category="web">
                    <div class="quote-icon">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="testimonial-content">"Their cloud solutions helped us scale our infrastructure seamlessly during our rapid growth phase. The team is responsive and incredibly knowledgeable. Downtime reduced by 95%."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="https://randomuser.me/api/portraits/women/33.jpg" alt="Lisa Thompson">
                        </div>
                        <div class="author-info">
                            <h4>Lisa Thompson</h4>
                            <p class="company">CTO, DataFlow Systems</p>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card" data-category="design">
                    <div class="quote-icon">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="testimonial-content">"The UI/UX design work they delivered for our SaaS platform has received constant praise from our users. Onboarding time decreased by 35% and user satisfaction scores are at an all-time high."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="https://randomuser.me/api/portraits/men/55.jpg" alt="James Park">
                        </div>
                        <div class="author-info">
                            <h4>James Park</h4>
                            <p class="company">Product Manager, CloudAnalytics</p>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="stats-showcase">
            <h2>Our Impact in Numbers</h2>
            <p>These numbers tell the story of our commitment to client success</p>
            <div class="stats-grid">
                <div class="stat-item">
                    <span class="stat-number">150+</span>
                    <p class="stat-label">Satisfied Clients</p>
                </div>
                <div class="stat-item">
                    <span class="stat-number">4.9/5</span>
                    <p class="stat-label">Average Rating</p>
                </div>
                <div class="stat-item">
                    <span class="stat-number">98%</span>
                    <p class="stat-label">Client Retention</p>
                </div>
                <div class="stat-item">
                    <span class="stat-number">500+</span>
                    <p class="stat-label">Projects Delivered</p>
                </div>
            </div>
        </section>

        <section class="cta-section">
            <h2>Ready to Join Our Success Stories?</h2>
            <p>Let's discuss how we can help transform your business and create your own success story.</p>
            <div class="cta-buttons">
                <a href="#contact" class="btn btn-primary">Start Your Project</a>
                <a href="#portfolio" class="btn btn-secondary">View Our Work</a>
            </div>
        </section>
    </main>

    <script>
        // Filter functionality
        const filterTabs = document.querySelectorAll('.filter-tab');
        const testimonialCards = document.querySelectorAll('.testimonial-card');

        filterTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Update active tab
                filterTabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');

                const filter = tab.dataset.filter;

                // Filter testimonials with smooth animation
                testimonialCards.forEach(card => {
                    if (filter === 'all' || card.dataset.category === filter) {
                        card.classList.remove('hidden');
                    } else {
                        card.classList.add('hidden');
                    }
                });
            });
        });

        // Add subtle scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe testimonial cards for scroll animations
        testimonialCards.forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });

        // Add counter animation for stats
        const statNumbers = document.querySelectorAll('.stat-number');
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = entry.target;
                    const text = target.textContent;
                    const number = parseInt(text.replace(/\D/g, ''));
                    const suffix = text.replace(/[\d.]/g, '');
                    
                    if (number) {
                        animateCounter(target, 0, number, suffix, 2000);
                        statsObserver.unobserve(target);
                    }
                }
            });
        });

        statNumbers.forEach(stat => statsObserver.observe(stat));

        function animateCounter(element, start, end, suffix, duration) {
            const range = end - start;
            const increment = range / (duration / 16);
            let current = start;
            
            const timer = setInterval(() => {
                current += increment;
                if (current >= end) {
                    current = end;
                    clearInterval(timer);
                }
                element.textContent = Math.floor(current) + suffix;
            }, 16);
        }

        // Smooth scrolling for CTA buttons
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>