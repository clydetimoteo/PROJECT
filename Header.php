<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCare Wellness Center</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        /* Animation Keyframes */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        /* Navigation Animations */
        .navbar-brand {
            animation: fadeIn 1s ease-out;
        }

        .nav-item {
            opacity: 0;
            animation: fadeIn 0.5s forwards;
        }

        .nav-item:nth-child(1) { animation-delay: 0.2s; }
        .nav-item:nth-child(2) { animation-delay: 0.4s; }
        .nav-item:nth-child(3) { animation-delay: 0.6s; }
        .nav-item:nth-child(4) { animation-delay: 0.8s; }
        .nav-item:nth-child(5) { animation-delay: 1s; }
        .nav-item:nth-child(6) { animation-delay: 1.2s; }

        /* Hover Effects */
        .navbar-brand:hover {
            animation: pulse 1s infinite;
        }

        /*CSS*/
        :root {
            --primary-color: #1A5F7A;
            --secondary-color: #159895;
            --accent-color: #57C5B6;
            --light-background: #F8FBFC;
            --text-color: #333;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: var(--light-background);
            color: var(--text-color);
            line-height: 1.6;
        }

        .navbar {
            background-color: var(--primary-color) !important;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
            padding: 15px 0;
        }

        .navbar-brand {
            color: #ffffff !important;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
        }

        .navbar-brand i {
            margin-right: 10px;
            color: var(--accent-color);
        }

        .nav-link {
            color: #ffffff !important;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 50%;
            background-color: var(--accent-color);
            transition: all 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
            left: 0;
        }

        .nav-link:hover {
            color: var(--accent-color) !important;
            transform: translateY(-2px);
        }

    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="fas fa-heartbeat"></i>
                MediCare Wellness
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="services.php">SERVICES</a></li>
                    <li class="nav-item"><a class="nav-link" href="appointment.php">APPOINTMENT</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog.php">BLOG</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">ABOUT</a></li>
                    <li class="nav-item"><a class="nav-link" href="register.php">REGISTER</a></li>
                </ul>
            </div>
        </div>
    </nav>