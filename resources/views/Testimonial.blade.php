<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Testimonials | Your Company</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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

        .testimonials-header {
            text-align: center;
            margin: 3rem 0;
        }

        .testimonials-header h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .testimonials-header p {
            color: var(--text-light);
            max-width: 700px;
            margin: 0 auto;
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin: 4rem 0;
        }

        .testimonial-card {
            background: var(--bg);
            padding: 2rem;
            border-radius: 8px;
            box-shadow: var(--shadow);
            position: relative;
        }

        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: 1rem;
            left: 1.5rem;
            font-size: 4rem;
            color: var(--primary-light);
            font-family: Georgia, serif;
            line-height: 1;
        }

        .testimonial-content {
            position: relative;
            z-index: 1;
            margin-bottom: 1.5rem;
            font-style: italic;
            color: var(--text);
        }

        .testimonial-author {
            display: flex;
            align-items: center;
        }

        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: var(--border);
            margin-right: 1rem;
            overflow: hidden;
        }

        .author-info h4 {
            margin: 0 0 0.25rem;
            font-weight: 600;
        }

        .author-info p {
            margin: 0;
            color: var(--text-light);
            font-size: 0.875rem;
        }

        .rating {
            color: #f59e0b;
            margin: 0.5rem 0;
        }

        .stats-section {
            background: var(--primary-light);
            border-radius: 8px;
            padding: 3rem 2rem;
            margin: 5rem 0;
            text-align: center;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            max-width: 900px;
            margin: 0 auto;
        }

        .stat-item h3 {
            font-size: 2.5rem;
            color: var(--primary);
            margin: 0 0 0.5rem;
        }

        .stat-item p {
            margin: 0;
            color: var(--text-light);
        }

        .cta-section {
            text-align: center;
            margin: 5rem 0 3rem;
        }

        .cta-section h2 {
            margin-bottom: 1.5rem;
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
            .testimonials-header h1 {
                font-size: 2rem;
            }
            
            .testimonials-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    @include('Navbar')
    
    <main class="container">
        <section class="testimonials-header">
            <h1>What Our Clients Say</h1>
            <p>Don't just take our word for it - hear from businesses that have partnered with us to achieve remarkable results.</p>
        </section>

        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="testimonial-content">Working with this team transformed our online presence. Their web development expertise helped us increase conversions by 40% in just three months.</p>
                <div class="testimonial-author">
                    <div class="author-avatar">
                        <img src="https://randomuser.me/api/portraits/women/43.jpg" alt="Sarah Johnson" width="50" height="50">
                    </div>
                    <div class="author-info">
                        <h4>Sarah Johnson</h4>
                        <p>CEO, TechSolutions Inc.</p>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card">
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="testimonial-content">The mobile app they developed for us exceeded all expectations. User engagement has doubled since launch, and the interface is incredibly intuitive.</p>
                <div class="testimonial-author">
                    <div class="author-avatar">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael Chen" width="50" height="50">
                    </div>
                    <div class="author-info">
                        <h4>Michael Chen</h4>
                        <p>Director of Product, HealthTrack</p>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card">
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="testimonial-content">Their digital marketing strategy delivered a 300% ROI in the first quarter. We've never seen such impressive results from an agency before.</p>
                <div class="testimonial-author">
                    <div class="author-avatar">
                        <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Emma Rodriguez" width="50" height="50">
                    </div>
                    <div class="author-info">
                        <h4>Emma Rodriguez</h4>
                        <p>Marketing Director, StyleHub</p>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card">
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="testimonial-content">The branding work they did completely revitalized our company image. Our customer feedback has been overwhelmingly positive since the rebrand.</p>
                <div class="testimonial-author">
                    <div class="author-avatar">
                        <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="David Wilson" width="50" height="50">
                    </div>
                    <div class="author-info">
                        <h4>David Wilson</h4>
                        <p>Founder, GreenEarth Foods</p>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card">
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="testimonial-content">Their cloud solutions helped us scale our infrastructure seamlessly during our rapid growth phase. The team is responsive and incredibly knowledgeable.</p>
                <div class="testimonial-author">
                    <div class="author-avatar">
                        <img src="https://randomuser.me/api/portraits/women/33.jpg" alt="Lisa Thompson" width="50" height="50">
                    </div>
                    <div class="author-info">
                        <h4>Lisa Thompson</h4>
                        <p>CTO, DataFlow Systems</p>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card">
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="testimonial-content">The UI/UX design work they delivered for our SaaS platform has received constant praise from our users. Onboarding time decreased by 35%.</p>
                <div class="testimonial-author">
                    <div class="author-avatar">
                        <img src="https://randomuser.me/api/portraits/men/55.jpg" alt="James Park" width="50" height="50">
                    </div>
                    <div class="author-info">
                        <h4>James Park</h4>
                        <p>Product Manager, CloudAnalytics</p>
                    </div>
                </div>
            </div>
        </div>

        <section class="stats-section">
            <h2>Our Impact in Numbers</h2>
            <div class="stats-grid">
                <div class="stat-item">
                    <h3>150+</h3>
                    <p>Satisfied Clients</p>
                </div>
                <div class="stat-item">
                    <h3>4.9/5</h3>
                    <p>Average Rating</p>
                </div>
                <div class="stat-item">
                    <h3>98%</h3>
                    <p>Client Retention</p>
                </div>
            </div>
        </section>

       
    </main>
    
</body>
</html>