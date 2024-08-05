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
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg sticky-top">
        <div class="container">
          <a class="navbar-brand" href="#">Railway Reservation</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="railway.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="trains.html">Trains</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about us.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact us.html">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.html">Signup|Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto mt-5">
        <div class="login-card">
          <h2 class="login-title mb-4 text-danger">Admin Login</h2>
          <form id="loginForm">
            <div class="form-group">
              <input type="text" class="form-control" id="username" placeholder="Username" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="password" placeholder="Password" required>
            </div>
            <div class="form-group">
              <a href="forgot.html" class="forgot-password-link">Forgot password?</a>
            </div>
            <button type="submit" class="btn btn-danger btn-block">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    document.getElementById("loginForm").addEventListener("submit", function(event) {
      event.preventDefault();
      const username = document.getElementById("username").value;
      const password = document.getElementById("password").value;
      console.log(username);
      console.log(password);
      
      if (username === "santhosh" && password === "123456") {
        window.location.href = "update.php";
      } else {
        alert("Invalid credentials");
      }
    });
  </script>
</body>
</html>
