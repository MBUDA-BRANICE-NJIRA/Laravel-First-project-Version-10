<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Your Company</title>
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

        .contact-header {
            text-align: center;
            margin: 3rem 0;
        }

        .contact-header h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .contact-header p {
            color: var(--text-light);
            max-width: 700px;
            margin: 0 auto;
        }

        .contact-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            margin: 4rem 0;
        }

        .contact-info {
            background: var(--bg);
            padding: 2rem;
            border-radius: 8px;
            box-shadow: var(--shadow);
        }

        .contact-info h2 {
            color: var(--primary);
            margin-bottom: 1.5rem;
        }

        .contact-method {
            margin-bottom: 1.5rem;
        }

        .contact-method h3 {
            margin-bottom: 0.5rem;
            font-size: 1.1rem;
        }

        .contact-method p {
            margin: 0;
            color: var(--text-light);
        }

        .contact-form {
            background: var(--bg);
            padding: 2rem;
            border-radius: 8px;
            box-shadow: var(--shadow);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid var(--border);
            border-radius: 4px;
            font-family: inherit;
        }

        .form-group textarea {
            min-height: 150px;
            resize: vertical;
        }

        .submit-btn {
            background: var(--primary);
            color: white;
            border: none;
            padding: 0.75rem 2rem;
            border-radius: 4px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .submit-btn:hover {
            background: #1d4ed8;
        }

        @media (max-width: 768px) {
            .contact-header h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    @include('Navbar')
    
    <main class="container">
        <section class="contact-header">
            <h1>Contact Us</h1>
            <p>Have questions or need assistance? Reach out to our team—we're here to help.</p>
        </section>

        <div class="contact-container">
            <div class="contact-info">
                <h2>Get in Touch</h2>
                
                <div class="contact-method">
                    <h3>Email</h3>
                    <p>info@yourcompany.com</p>
                </div>
                
                <div class="contact-method">
                    <h3>Phone</h3>
                    <p>+1 (555) 123-4567</p>
                </div>
                
                <div class="contact-method">
                    <h3>Office Hours</h3>
                    <p>Monday - Friday: 9AM - 5PM</p>
                    <p>Saturday - Sunday: Closed</p>
                </div>
                
                <div class="contact-method">
                    <h3>Address</h3>
                    <p>123 Business Avenue</p>
                    <p>City, State 10001</p>
                </div>
            </div>

            <div class="contact-form">
                <h2>Send Us a Message</h2>
                <form action="/submit-contact" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject">
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    
                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>
        </div>
    </main>

   
</body>
</html>