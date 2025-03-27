<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Document Title</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .header-content {
            background-color: #f8f9fa;
            padding: 10px 20px;
        }
        .content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            height: 50px; /* Adjust height as needed */
        }
        .navbar {
            display: flex;
            gap: 15px;
        }
        .navbar a {
            text-decoration: none;
            color: #007bff; /* Bootstrap primary color */
            padding: 8px 15px;
            border-radius: 4px;
        }
        .navbar a:hover {
            background-color: #007bff;
            color: white;
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
</body>
</html>