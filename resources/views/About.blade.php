<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Your Company</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <style>
        :root {
            --primary: #3b82f6;
            --primary-dark: #1d4ed8;
            --secondary: #06b6d4;
            --accent: #8b5cf6;
            --text: #0f172a;
            --text-light: #64748b;
            --bg: #ffffff;
            --bg-secondary: #f8fafc;
            --border: #e2e8f0;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            color: var(--text);
            line-height: 1.7;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .page-wrapper {
            background: var(--bg);
            border-radius: 20px;
            box-shadow: var(--shadow-lg);
            overflow: hidden;
            margin-top: 2rem;
        }

        .hero-section {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 50%, var(--accent) 100%);
            color: white;
            padding: 4rem 2rem;
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
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="white" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="white" opacity="0.1"/><circle cx="50" cy="10" r="0.5" fill="white" opacity="0.15"/><circle cx="10" cy="60" r="0.5" fill="white" opacity="0.15"/><circle cx="90" cy="40" r="0.5" fill="white" opacity="0.15"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            pointer-events: none;
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .page-header h1 {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 700;
            margin-bottom: 1.5rem;
            background: linear-gradient(45deg, #ffffff, #e0e7ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .page-header p {
            font-size: 1.25rem;
            font-weight: 300;
            max-width: 700px;
            margin: 0 auto;
            opacity: 0.95;
        }

        .content-section {
            padding: 4rem 2rem;
        }

        .about-section {
            display: flex;
            flex-wrap: wrap;
            gap: 4rem;
            margin: 4rem 0;
            align-items: center;
        }

        .about-content {
            flex: 1;
            min-width: 350px;
        }

        .about-content h2 {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 2rem;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .about-content p {
            font-size: 1.1rem;
            color: var(--text-light);
            margin-bottom: 1.5rem;
            line-height: 1.8;
        }

        .about-image {
            flex: 1;
            min-width: 350px;
            height: 500px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background: linear-gradient(45deg, #f0f9ff, #e0f2fe);
            position: relative;
        }

        .about-image:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        .company-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            background: url('https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80') center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-size: 1.2rem;
            font-weight: 500;
            text-align: center;
            padding: 2rem;
        }

        .values {
            margin: 6rem 0;
            padding: 4rem 0;
            background: var(--bg-secondary);
            border-radius: 20px;
        }

        .values h2 {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 4rem;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            padding: 0 2rem;
        }

        .value-card {
            background: var(--bg);
            padding: 2.5rem;
            border-radius: 16px;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
            border: 1px solid var(--border);
            position: relative;
            overflow: hidden;
        }

        .value-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--secondary), var(--accent));
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .value-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-lg);
        }

        .value-card:hover::before {
            transform: scaleX(1);
        }

        .value-card h3 {
            color: var(--primary);
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .value-card h3::before {
            content: '⚡';
            font-size: 1.2rem;
        }

        .value-card p {
            color: var(--text-light);
            font-size: 1rem;
            line-height: 1.7;
        }

        .floating-elements {
            position: absolute;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
        }

        .floating-circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            animation: float 6s ease-in-out infinite;
        }

        .floating-circle:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .floating-circle:nth-child(2) {
            width: 60px;
            height: 60px;
            top: 60%;
            right: 15%;
            animation-delay: 2s;
        }

        .floating-circle:nth-child(3) {
            width: 40px;
            height: 40px;
            bottom: 30%;
            left: 20%;
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }
            
            .hero-section {
                padding: 3rem 1.5rem;
            }
            
            .content-section {
                padding: 3rem 1.5rem;
            }
            
            .about-section {
                flex-direction: column;
                gap: 3rem;
            }
            
            .about-content,
            .about-image {
                min-width: unset;
            }
            
            .values {
                margin: 4rem 0;
                padding: 3rem 0;
            }
            
            .values-grid {
                grid-template-columns: 1fr;
                padding: 0 1rem;
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
    @include('Navbar')
    
    <main class="container">
        <div class="page-wrapper">
            <section class="hero-section">
                <div class="floating-elements">
                    <div class="floating-circle"></div>
                    <div class="floating-circle"></div>
                    <div class="floating-circle"></div>
                </div>
                <div class="hero-content">
                    <div class="page-header">
                        <h1>About Our Company</h1>
                        <p>Learn about our mission, values, and the passionate team behind our success story.</p>
                    </div>
                </div>
            </section>

            <div class="content-section">
                <section class="about-section">
                    <div class="about-content">
                        <h2>Our Story</h2>
                        <p>Founded in 2010, we started as a small team with a big vision to revolutionize the industry. Today, we're proud to serve thousands of clients worldwide with our innovative solutions.</p>
                        <p>Our journey has been marked by continuous growth, learning, and adaptation to the changing needs of our customers. We believe in building long-term relationships based on trust and exceptional service.</p>
                    </div>
                    <div class="about-image">
                        <div class="company-image">
                            <!-- Professional office space image from Unsplash -->
                        </div>
                    </div>
                </section>

                <section class="values">
                    <h2>Our Core Values</h2>
                    <div class="values-grid">
                        <div class="value-card">
                            <h3>Integrity</h3>
                            <p>We conduct business with honesty and transparency, building trust with every interaction.</p>
                        </div>
                        <div class="value-card">
                            <h3>Innovation</h3>
                            <p>Constantly pushing boundaries to deliver cutting-edge solutions for our clients.</p>
                        </div>
                        <div class="value-card">
                            <h3>Excellence</h3>
                            <p>Committed to the highest standards in everything we do.</p>
                        </div>
                        <div class="value-card">
                            <h3>Community</h3>
                            <p>We believe in giving back and making a positive impact where we work and live.</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
</body>
</html>