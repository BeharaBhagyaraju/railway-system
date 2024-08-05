<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa; 
    }

    .login-card {
      max-width: 350px;
      margin: auto;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
      background-color: #ffffff;
    }

    .login-title {
      text-align: center;
      color: #333333;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .forgot-password-link {
      display: block;
      text-align: right;
      color: #6c757d;
    }

    .register-link {
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="bg-white">
    <div class="container p-3 bg-white">
      <div class="grid bg-white">
        <div class="row shadow ">
          <div class="col-lg-8 mx-auto text-center"> 
            <h2 class="fw-bold text-primary p-3">WELCOME TO RAILWAY RESERVATION SYSTEM</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-primary">
    <ul class="nav justify-content-end">
      <li class="nav-item">
        <a class="nav-link active text-white" aria-current="page" href="#">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="admin.php">Admin Login</a>
      </li>
    </ul>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto mt-5">
        <div class="login-card">
          <h2 class="login-title mb-4">Login</h2>
          <?php
          if (isset($_SESSION['error'])) {
              echo '<div class="alert alert-danger">' . $_SESSION['error'] . '</div>';
              unset($_SESSION['error']); // Clear the error after displaying
          }
          ?>
          <form action="login_process.php" method="POST" id="loginForm">
            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
              <a href="forgot.php" class="forgot-password-link">Forgot password?</a>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
            <p class="register-link mt-3 mb-0">Don't have an account? <a href="signup.php">Register here</a></p>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
