<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
          body{
    background-color: black;
    color: goldenrod;
    font-family: 'Arial', sans-serif;
}
.navbar {
    background-color: black;
    border-bottom: 2px solid goldenrod;
}
.navbar-brand {
    font-size: 1.5rem;
    font-weight: bold;
}
.navbar-brand, .nav-link {
    color: goldenrod !important;
    transition: color 0.3s ease;
}
.navbar-brand:hover, .nav-link:hover {
    color: darkgoldenrod !important;
}
.btn-signup {
    color: black;
    background-color: goldenrod;
    border: 2px solid goldenrod;
    border-radius: 20px;
    padding: 5px 15px;
    transition: all 0.3s ease;
}
.btn-signup:hover {
    background-color: black;
    color: goldenrod;
}
.login-container {
    margin-top: 100px;
    padding: 30px;
    background-color: #1a1a1a;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
}
h2 {
    font-size: 2rem;
    margin-bottom: 20px;
    text-transform: uppercase;
    letter-spacing: 2px;
    text-align: center;
}
.form-label {
    font-weight: bold;
    font-size: 0.9rem;
    text-transform: uppercase;
}
.form-control {
    background-color: black;
    color: goldenrod;
    border: 1px solid goldenrod;
    border-radius: 5px;
    transition: all 0.3s ease;
}
.form-control:focus {
    box-shadow: 0 0 5px goldenrod;
    border-color: darkgoldenrod;
}
.btn-login {
    background-color: goldenrod;
    color: black;
    border: none;
    border-radius: 20px;
    padding: 10px 20px;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.3s ease;
}
.btn-login:hover {
    background-color: darkgoldenrod;
    color: black;
}
.login-container a {
    color: goldenrod;
    text-decoration: none;
    font-size: 0.9rem;
}
.login-container a:hover {
    color: darkgoldenrod;
}


    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images\ma1web.webp" alt="Logo" style="height: 40px; margin-right: 10px;"> Logo
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="btn btn-signup" href="signup.php">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Login Form -->
    <div class="container d-flex justify-content-center align-items-center">
        <div class="login-container col-md-4">
            <h2 class="text-center mb-4">Login</h2>
            <form action="login_check.php" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-login">Login</button>
                </div>
            </form>
            <div class="text-center mt-3">
                <a href="forgot_password.php">Forgot Password?</a>
            </div>
        </div>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
