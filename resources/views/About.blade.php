<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Your Company</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap">
    <style>
        :root {
            --primary: #2563eb;
            --text: #1f2937;
            --text-light: #6b7280;
            --bg: #ffffff;
            --border: #e5e7eb;
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

        .page-header {
            text-align: center;
            margin: 3rem 0;
        }

        .page-header h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--text);
        }

        .page-header p {
            color: var(--text-light);
            max-width: 700px;
            margin: 0 auto;
        }

        .about-section {
            display: flex;
            flex-wrap: wrap;
            gap: 3rem;
            margin: 4rem 0;
            align-items: center;
        }

        .about-content {
            flex: 1;
            min-width: 300px;
        }

        .about-image {
            flex: 1;
            min-width: 300px;
            background-color: #e5e7eb;
            height: 400px;
            border-radius: 8px;
            /* Placeholder for actual image */
            background-image: url('https://via.placeholder.com/600x400');
            background-size: cover;
            background-position: center;
        }

        .values {
            margin: 5rem 0;
        }

        .values h2 {
            text-align: center;
            margin-bottom: 3rem;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .value-card {
            background: var(--bg);
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .value-card h3 {
            color: var(--primary);
        }

        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 2rem;
            }
            
            .about-section {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    @include('Navbar')
    
    <main class="container">
        <section class="page-header">
            <h1>About Our Company</h1>
            <p>Learn about our mission, values, and the team behind our success.</p>
        </section>

        <section class="about-section">
            <div class="about-content">
                <h2>Our Story</h2>
                <p>Founded in 2010, we started as a small team with a big vision to revolutionize the industry. Today, we're proud to serve thousands of clients worldwide with our innovative solutions.</p>
                <p>Our journey has been marked by continuous growth, learning, and adaptation to the changing needs of our customers. We believe in building long-term relationships based on trust and exceptional service.</p>
            </div>
            <div class="about-image">
                <!-- Image would go here -->
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
    </main>
    </body>
</html>