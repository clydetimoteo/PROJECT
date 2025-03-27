<?php
    include("dbconn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambiong Telehealth Online</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
        .header-content, .footer-content {
            background-color: #f8f9fa;
            padding: 10px 20px;
        }
        .content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            height: 50px;
        }
        .navbar {
            display: flex;
            gap: 15px;
        }
        .navbar a {
            text-decoration: none;
            color: #007bff;
            padding: 8px 15px;
            border-radius: 4px;
        }
        .navbar a:hover {
            background-color: #007bff;
            color: white;
        }
        .footer-content a {
            margin-right: 15px;
            color: #007bff;
            text-decoration: none;
        }
        .footer-content a:hover {
            text-decoration: underline;
        }
        .slideshow {
            position: relative;
            height: 300px;
            overflow: hidden;
        }
        .slideshow img {
            width: 100%;
            height: auto;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            transition: opacity 1s ease;
        }
        .slideshow img.active {
            opacity: 1;
        }
        .appointment-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 15px 30px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .services, .blog-section {
            padding: 20px;
            text-align: center;
        }
        .service, .blog {
            display: inline-block;
            width: 30%;
            margin: 10px;
            vertical-align: top;
        }
        .service img, .blog img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="header-content">
        <div class="content">
            <a href="index.php"><img src="path/to/logo.png" alt="Logo" class="logo"></a>
            <div class="navbar">
                <a href="index.php">HOME</a>
                <a href="services.php">SERVICES</a>
                <a href="appointment.php">APPOINTMENT</a>
                <a href="blog.php">BLOG</a>
                <a href="about.php">ABOUT</a>
                <a href="signin.php">SIGN IN</a>
                <a href="register.php">REGISTER</a>
            </div>
        </div>
    </div>

    <div class="slideshow" id="slideshow"></div>
    <button class="appointment-button" onclick="makeAppointment()">MAKE AN APPOINTMENT</button>

    <div class="services" id="services">
        <h2>Services Offered</h2>
    </div>

    <div class="blog-section" id="blog-section">
        <h2>Blog/News</h2>
    </div>

    <div class="footer-content">
        <div class="content">
            <a href="index.php"><img src="path/to/logo.png" alt="Logo" class="logo"></a>
            <a href="about.php">ABOUT</a>
            <a href="privacy_policy.php">PRIVACY POLICY</a>
            <a href="terms_of_service.php">TERMS OF SERVICE</a>
            <a href="terms_and_conditions.php">TERMS AND CONDITIONS</a>
            <a href="https://facebook.com" target="_blank">Facebook</a>
            <a href="https://instagram.com" target="_blank">Instagram</a>
            <a href="https://twitter.com" target="_blank">X</a>
            <a href="sitemap.php">Site Map</a>
        </div>
    </div>

</body>
</html>