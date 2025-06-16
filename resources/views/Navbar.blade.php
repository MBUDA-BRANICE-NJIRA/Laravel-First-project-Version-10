<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul class="nav-links">
        <li><a href="/">Home</a></li>
        <li><a href="/About">About</a></li>
        <li><a href="/Contact">Contact</a></li>
        <li><a href="/Services">Services</a></li>
        <li><a href="/Portfolio">Portfolio</a></li>
        <li><a href="/Testimonial">Testimonial</a></li>
        <li><a href="/LogIn">Log In</a></li>
    </ul>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        
        .nav-links {
            display: flex;
            justify-content: center;
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: #2c3e50;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .nav-links li {
            position: relative;
        }
        
        .nav-links li a {
            display: block;
            color: #ecf0f1;
            text-align: center;
            padding: 15px 20px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .nav-links li a:hover {
            background-color: #34495e;
            color: #fff;
        }
        
        .nav-links li a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 3px;
            background: #3498db;
            transition: all 0.3s ease;
        }
        
        .nav-links li a:hover::after {
            width: 100%;
            left: 0;
        }
        
        @media (max-width: 768px) {
            .nav-links {
                flex-direction: column;
                align-items: center;
            }
            
            .nav-links li {
                width: 100%;
            }
            
            .nav-links li a {
                padding: 12px;
                border-bottom: 1px solid rgba(255,255,255,0.1);
            }
        }
    </style>
</body>
</html>