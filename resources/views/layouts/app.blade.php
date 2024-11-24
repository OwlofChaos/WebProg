<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Donate Page')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1; /* This makes the main content area take up the available space */
        }
        .footer {
            background-color: white;
            text-align: center;
            padding: 10px 0;
            border-radius: 50px 50px 0 0;
        }
    </style>
</head>
<body>
    <div class="content">
        @yield('content')
    </div>
    <footer class="footer bg-white text-center py-2" style="border-radius: 50px; margin-top: 0; min-height:10vh;">
        <p><a href="#" class="text-decoration-none">Contact Us</a> | <a href="#" class="text-decoration-none">Our Team</a> | <a href="#" class="text-decoration-none">Terms and Conditions</a> | <a href="#" class="text-decoration-none">Privacy Policy</a></p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
