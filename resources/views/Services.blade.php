<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services | Your Company</title>
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

        .services-header {
            text-align: center;
            margin: 3rem 0;
        }

        .services-header h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .services-header p {
            color: var(--text-light);
            max-width: 700px;
            margin: 0 auto;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin: 4rem 0;
        }

        .service-card {
            background: var(--bg);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: transform 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
        }

        .service-image {
            height: 200px;
            background-color: #e5e7eb;
            background-size: cover;
            background-position: center;
        }

        .service-content {
            padding: 1.5rem;
        }

        .service-content h2 {
            color: var(--primary);
            margin-top: 0;
        }

        .service-content p {
            color: var(--text-light);
            margin-bottom: 1.5rem;
        }

        .service-cta {
            display: inline-block;
            color: var(--primary);
            font-weight: 500;
            text-decoration: none;
            padding: 0.5rem 0;
            border-bottom: 2px solid var(--primary);
            transition: all 0.3s ease;
        }

        .service-cta:hover {
            color: #1d4ed8;
            border-color: #1d4ed8;
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
            .services-header h1 {
                font-size: 2rem;
            }
            
            .cta-section {
                padding: 2rem 1rem;
            }
        }
    </style>
</head>
<body>
    @include('Navbar')
    
    <main class="container">
        <section class="services-header">
            <h1>Our Services</h1>
            <p>Comprehensive solutions tailored to meet your business needs and drive growth.</p>
        </section>

        <div class="services-grid">
            <div class="service-card">
                <div class="service-image" style="background-image: url('https://via.placeholder.com/600x400')"></div>
                <div class="service-content">
                    <h2>Web Development</h2>
                    <p>Custom websites and web applications built with modern technologies to deliver exceptional user experiences.</p>
                    <a href="/contact" class="service-cta">Learn more →</a>
                </div>
            </div>
            
            <div class="service-card">
                <div class="service-image" style="background-image: url('https://via.placeholder.com/600x400')"></div>
                <div class="service-content">
                    <h2>Digital Marketing</h2>
                    <p>Data-driven strategies to increase your online visibility and attract quality leads to your business.</p>
                    <a href="/contact" class="service-cta">Learn more →</a>
                </div>
            </div>
            
            <div class="service-card">
                <div class="service-image" style="background-image: url('https://via.placeholder.com/600x400')"></div>
                <div class="service-content">
                    <h2>UI/UX Design</h2>
                    <p>Beautiful, intuitive interfaces designed to engage users and enhance customer satisfaction.</p>
                    <a href="/contact" class="service-cta">Learn more →</a>
                </div>
            </div>
            
            <div class="service-card">
                <div class="service-image" style="background-image: url('https://via.placeholder.com/600x400')"></div>
                <div class="service-content">
                    <h2>SEO Optimization</h2>
                    <p>Improve your search rankings and organic traffic with our proven SEO techniques.</p>
                    <a href="/contact" class="service-cta">Learn more →</a>
                </div>
            </div>
            
            <div class="service-card">
                <div class="service-image" style="background-image: url('https://via.placeholder.com/600x400')"></div>
                <div class="service-content">
                    <h2>Mobile App Development</h2>
                    <p>Cross-platform mobile applications that perform seamlessly across all devices.</p>
                    <a href="/contact" class="service-cta">Learn more →</a>
                </div>
            </div>
            
            <div class="service-card">
                <div class="service-image" style="background-image: url('https://via.placeholder.com/600x400')"></div>
                <div class="service-content">
                    <h2>Cloud Solutions</h2>
                    <p>Scalable cloud infrastructure to support your business growth and digital transformation.</p>
                    <a href="/contact" class="service-cta">Learn more →</a>
                </div>
            </div>
        </div>
        
    </main>
   
</body>
</html>