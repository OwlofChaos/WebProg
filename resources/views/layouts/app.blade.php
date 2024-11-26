<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Donate Page')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%; /* Ensure the body and html take up the full viewport height */
            margin: 0;
            display: flex;
            flex-direction: column;
            background-color: #34BCF2;
        }

        .content {
            flex: 1; /* Fills the remaining space between the navbar and the footer */
            padding-bottom: 10px; /* Optional: Adds some spacing before the footer */
        }

        .footer {
            background-color: white;
            text-align: center;
            width: 100%; /* Keep the footer spanning the full width */
            padding: 10px 0;
            color: black;
            display: flex;
            justify-content: center;
            align-items: flex-end;
            min-height: 10vh;
            border-radius: 15px 15px 0 0; /* Only rounds the top-left and top-right corners */
            box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1); /* Optional: Adds a shadow to make the footer stand out */
        }

        /* Navbar links hover effect */
        .nav-link {
            position: relative;
            padding-bottom: 5px; /* Space for the bottom border */
        }

        .nav-link:hover {
            border-bottom: 3px solid #fff; /* Adds a white line on hover */
        }

        .nav-link.active {
            border-bottom: 3px solid #fff; /* Keeps the line under the active page */
        }
    </style>
</head>
<body>
    <div class="container-fluid" style="background-color: #34BCF2; color: white; flex: 1;">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <a class="navbar-brand text-white" href="#" style="font-weight: bold; font-size: 32px; margin-left: 200px;">OCEAN</a>
            <div class="collapse navbar-collapse justify-content-end" style="margin-top: 25px;">
                <ul class="navbar-nav me-5">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white active" href="donate">Donate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Impact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Projects</a>
                    </li>
                </ul>
                <div class="d-flex" style="margin-right: 200px;">
                    <a href="#" class="btn btn-light fw-bold text-dark me-4" style="width: 150px;">Register</a>
                    <a href="#" class="btn btn-light fw-bold text-dark" style="width: 150px;">Login</a>
                </div>
            </div>
        </nav>

        <div class="content">
            @yield('content')
        </div>
    </div>

    <footer class="footer bg-white text-center py-2">
        <p>
            <a href="#" class="text-decoration-none" style="color: black;">Contact Us</a> |
            <a href="#" class="text-decoration-none" style="color: black;">Our Team</a> |
            <a href="#" class="text-decoration-none" style="color: black;">Terms and Conditions</a> |
            <a href="#" class="text-decoration-none" style="color: black;">Privacy Policy</a>
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Add hover effect and active class management
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('mouseover', function() {
                // Remove active class from all links
                document.querySelectorAll('.nav-link').forEach(nav => nav.classList.remove('active'));
                // Add hover underline to the current link
                this.classList.add('active');
            });

            link.addEventListener('mouseout', function() {
                // If this link is not active, remove underline when mouse leaves
                if (!this.classList.contains('active')) {
                    this.classList.remove('active');
                }
            });
        });
    </script>
</body>
</html>
