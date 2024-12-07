<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Optional: Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        /* Full height for the 404 page */
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        /* Background with gradient effect */
        .error-page {
            background: linear-gradient(135deg, #ff6f61, #f0c27b);
            background-size: cover;
            color: white;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 30px;
        }

        .error-content {
            max-width: 600px;
            border-radius: 10px;
            padding: 50px;
            background: rgba(0, 0, 0, 0.5);
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.6);
        }

        /* Large error number styling */
        .error-code {
            font-size: 150px;
            font-weight: bold;
            animation: bounce 1.5s infinite;
        }

        /* Error description text styling */
        .error-description {
            font-size: 1.5rem;
            margin-top: 20px;
            animation: fadeInUp 1s ease-out;
        }

        /* Button styling */
        .btn-home {
            margin-top: 30px;
            font-size: 1.25rem;
            padding: 10px 25px;
            background-color: #f8b400;
            border: none;
            border-radius: 25px;
            color: white;
            transition: background-color 0.3s;
        }

        .btn-home:hover {
            background-color: #e68a00;
        }

        /* Bouncing Animation */
        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        /* Fade-in Animation for Text */
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

    <!-- Main 404 Page Content -->
    <div class="error-page">
        <div class="error-content">
            <div class="error-code text-warning">
                <i class="fas fa-exclamation-triangle"></i> 404
            </div>
            <div class="error-description mb-4">
                <h1 class="display-4">Oops! Page Not Found</h1>
                <p>The page you are looking for might have been removed, or it may never have existed.</p>
            </div>
            <a href="<?php echo ROOT; ?>" class="btn btn-home">Return to Home Page</a>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
