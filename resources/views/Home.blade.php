<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home || Your Brand</title>
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
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            margin: 0;
            color: var(--text);
            line-height: 1.6;
            background-color: #f9fafb;
        }

        /* Main Content Styles */
        .hero {
            max-width: 1200px;
            margin: 0 auto;
            padding: 5rem 2rem;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.2;
            color: var(--text);
        }

        .hero p {
            font-size: 1.25rem;
            color: var(--text-light);
            max-width: 700px;
            margin: 0 auto 2rem;
        }

        .cta-button {
            display: inline-block;
            background: var(--primary);
            color: white;
            padding: 0.75rem 2rem;
            border-radius: 0.375rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: var(--shadow);
        }

        .cta-button:hover {
            background: #1d4ed8;
            transform: translateY(-2px);
        }

        .features {
            max-width: 1200px;
            margin: 4rem auto;
            padding: 0 2rem;
        }

        .features h2 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 3rem;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            background: var(--bg);
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: var(--shadow);
            transition: transform 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-card h3 {
            color: var(--primary);
            margin-bottom: 1rem;
        }

        footer {
            background: var(--text);
            color: white;
            text-align: center;
            padding: 2rem;
            margin-top: 4rem;
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.25rem;
            }
            
            .hero p {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
    @include('Navbar')
    
    <main>
        <section class="hero">
            <h1>Welcome to Our Platform</h1>
            <p>A modern solution for your business needs. Streamline operations and boost productivity with our innovative tools.</p>
            <a href="/Services" class="cta-button">Explore Services</a>
        </section>

        <section class="features">
            <h2>Why Choose Us</h2>
            <div class="feature-grid">
                <div class="feature-card">
                    <h3>Expert Solutions</h3>
                    <p>Our team delivers cutting-edge solutions tailored to your specific business requirements.</p>
                </div>
                <div class="feature-card">
                    <h3>24/7 Support</h3>
                    <p>Round-the-clock assistance to ensure your operations run smoothly at all times.</p>
                </div>
                <div class="feature-card">
                    <h3>Proven Results</h3>
                    <p>Trusted by industry leaders with a track record of successful implementations.</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Your Brand. All rights reserved.</p>
    </footer>
</body>
</html>