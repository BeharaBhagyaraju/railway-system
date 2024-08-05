<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FOREGT PASSWORD</title>
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

    .otp-box {
      width: calc(20% - 5px); /* Adjust width to 20% of parent container with a margin */
      margin-right: 5px; /* Add a small margin between boxes */
    }

    @media (max-width: 576px) {
      .otp-box {
        width: calc(20% - 2px); /* Adjust width for smaller screens */
      }
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
          </ul>
    </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto mt-5">
        <div class="login-card">
          <h2 class="login-title mb-4">FORGET PASSWORD</h2>
          <form>
            <div class="form-group">
              <input type="text" class="form-control" id="mobile" placeholder="ENTER REGISTERED MOBILE">
            </div>
            <div class="form-group d-flex ">
                <div class="form label">
                    <label for="" style="font-size:20px; justify-items:space-around;">OTP:</label>
                </div><br>
              <input type="text" class="form-control otp-box" maxlength="1" placeholder="0">
              <input type="text" class="form-control otp-box" maxlength="1" placeholder="0">
              <input type="text" class="form-control otp-box" maxlength="1" placeholder="0">
              <input type="text" class="form-control otp-box" maxlength="1" placeholder="0">
              <input type="text" class="form-control otp-box" maxlength="1" placeholder="0">
            </div>
            <button type="submit" class="btn btn-primary btn-block">RESET</button>
            <p class="register-link mt-3 mb-0">can't reset password? <a href="signup.html">get help</a></p>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
