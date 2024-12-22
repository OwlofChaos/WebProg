<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #34BCF2;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            flex-direction: row;
            border-radius: 15px;
            overflow: hidden;
            max-width: 900px;
        }

        .image-container {
            flex: 1;
            overflow: hidden;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .form-container {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: white;
        }

        .form-control {
            border-radius: 8px;
            padding: 12px;
            border: 1px solid #ced4da;
            margin-bottom: 20px;
        }

        .btn-primary {
            color: black;
            background-color: #50c878;
            border-color: #50c878;
            border-radius: 8px;
            padding: 12px 20px;
            font-size: 16px;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #45a049;
            border-color: #45a049;
        }

        h2 {
            color: #343a40;
            margin-bottom: 2rem;
            text-align: center;
            font-weight: bold;
            font-size: 1.75rem;
        }

        label {
            margin-bottom: 0.5rem;
            color: #495057;
            font-size: 0.9rem;
            font-weight: bold;
        }

        .mt-3 a {
            color: #007bff;
            text-decoration: none;
            font-size: 0.85rem;
        }

        .mt-3 a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="image-container">
        <img src="/images/images.jpeg" alt="Sea Turtle" style="border-radius: 15px 0 0 15px;">
    </div>
    <div class="form-container">
        <h2>REGISTRATION</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>
            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number">
            <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>
        <div class="mt-3 text-center">
            <a href="login">Already Have an Account?</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>