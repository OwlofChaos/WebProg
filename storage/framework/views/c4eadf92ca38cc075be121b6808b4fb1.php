<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Donate Page'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            background-color: #34BCF2;
        }

        .content {
            flex: 1;
            padding-bottom: 10px;
        }

        .footer {
            background-color: white;
            text-align: center;
            width: 100%;
            padding: 10px 0;
            color: black;
            display: flex;
            justify-content: center;
            align-items: flex-end;
            min-height: 10vh;
            border-radius: 15px 15px 0 0;
            box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1);
        }


        .nav-link {
            position: relative;
            padding-bottom: 5px;
        }

        .nav-link:hover {
            border-bottom: 3px solid #fff;
        }

        .nav-link.active {
            border-bottom: 3px solid #fff;
        }
    </style>
</head>
<body>
    <div class="container-fluid" style="background-color: #34BCF2; color: white; flex: 1;">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <a class="navbar-brand text-white" href="home" style="font-weight: bold; font-size: 32px; margin-left: 200px;">OCEAN</a>
            <div class="collapse navbar-collapse justify-content-end" style="margin-top: 25px;">
                <ul class="navbar-nav me-5">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="aboutus">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="donate">Donate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="impact">Impact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="project">Projects</a>
                    </li>
                </ul>
                <div class="d-flex" style="margin-right: 200px;">
                    <a href="profile" class="btn btn-light fw-bold text-dark me-4" style="width: 150px;">Profile</a>
                    <a href="login" class="btn btn-light fw-bold text-dark" style="width: 150px;">Logout</a>
                </div>
            </div>
        </nav>

        <div class="content">
            <?php echo $__env->yieldContent('content'); ?>
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
<?php /**PATH C:\Users\Inazu\Downloads\New folder\WebProg\resources\views/layouts/app.blade.php ENDPATH**/ ?>