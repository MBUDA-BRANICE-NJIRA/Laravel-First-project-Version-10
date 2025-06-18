<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Navigation</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap">
</head>
<body>
    <nav class="navbar">
        <ul class="nav-links">
            <li><a href="/" class="nav-item">Home</a></li>
            <li><a href="/About" class="nav-item">About</a></li>
            <li><a href="/Services" class="nav-item">Services</a></li>
            <li><a href="/Portfolio" class="nav-item">Portfolio</a></li>
            <li><a href="/Testimonial" class="nav-item">Testimonial</a></li>
            <li><a href="/Contact" class="nav-item">Contact</a></li>
            <li><a href="/Events" class="nav-item">Events</a></li>
            <li><a href="/LogIn" class="nav-cta">Log In</a></li>
        </ul>
    </nav>

    <style>
        :root {
            --primary: #2563eb;
            --primary-hover: #1d4ed8;
            --text: #1f2937;
            --text-light: #6b7280;
            --bg: #ffffff;
            --border: #e5e7eb;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            margin: 0;
            background-color: #f9fafb;
            color: var(--text);
            line-height: 1.5;
        }

        .navbar {
            background: var(--bg);
            border-bottom: 1px solid var(--border);
            box-shadow: var(--shadow);
            position: sticky;
            top: 0;
            z-index: 50;
        }

        .nav-links {
            display: flex;
            justify-content: center;
            align-items: center;
            list-style: none;
            margin: 0 auto;
            padding: 0 2rem;
            max-width: 1280px;
            height: 72px;
            margin-right: 100px;
        }

        .nav-item {
            color: var(--text);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9375rem;
            padding: 0.75rem 1.25rem;
            margin: 0 0.125rem;
            border-radius: 0.375rem;
            transition: var(--transition);
            position: relative;
        }

        .nav-item:hover {
            color: var(--primary);
            background: rgba(37, 99, 235, 0.05);
        }

        .nav-item::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 1.25rem;
            right: 1.25rem;
            height: 2px;
            background: var(--primary);
            transform: scaleX(0);
            transform-origin: center;
            transition: var(--transition);
        }

        .nav-item:hover::after {
            transform: scaleX(1);
        }

        .nav-cta {
            background: var(--primary);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.375rem;
            font-weight: 600;
            font-size: 0.9375rem;
            margin-left: 1rem;
            text-decoration: none;
            transition: var(--transition);
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        }

        .nav-cta:hover {
            background: var(--primary-hover);
            transform: translateY(-1px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .nav-links {
                padding: 0 1.5rem;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                height: 64px;
                padding: 0 1rem;
                justify-content: space-between;
            }
            
            .nav-item {
                padding: 0.5rem 0.75rem;
                font-size: 0.875rem;
                margin: 0;
            }
            
            .nav-cta {
                padding: 0.5rem 1rem;
                margin-left: 0.5rem;
            }
        }

        @media (max-width: 640px) {
            .nav-links {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                padding: 0 0.5rem;
                justify-content: flex-start;
            }
            
            .nav-links::-webkit-scrollbar {
                display: none;
            }
            
            .nav-item, .nav-cta {
                white-space: nowrap;
            }
        }
    </style>
</body>
</html>