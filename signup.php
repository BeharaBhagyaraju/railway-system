<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="bg-white">
        <div class="container p-3 bg-white">
            <div class="grid bg-white">
                <div class="row shadow ">
                    <div class="col-lg-8 mx-auto text-center"> <!-- Centered text -->
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
    <h1 class="mt-5 mb-4">Registration Form</h1>
    <form action="signup.php" method="post">
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="firstName">First Name</label>
          <input type="text" class="form-control" id="firstName" name="first_name" placeholder="First Name">
        </div>
        <div class="form-group col-md-4">
          <label for="middleName">Middle Name</label>
          <input type="text" class="form-control" id="middleName" name="middle_name" placeholder="Middle Name">
        </div>
        <div class="form-group col-md-4">
          <label for="lastName">Last Name</label>
          <input type="text" class="form-control" id="lastName" name="last_name" placeholder="Last Name">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="dob">Date of Birth</label>
          <input type="date" class="form-control" id="dob" name="dob">
        </div>
        <div class="form-group col-md-4">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" name="address" placeholder="Address">
        </div>
        <div class="form-group col-md-4">
          <label for="gender">Gender</label>
          <select id="gender" class="form-control" name="gender">
            <option selected>Choose...</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
          </select>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="mobile">Mobile</label>
          <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile">
        </div>
        <div class="form-group col-md-4">
            <label for="confirmMobile">Confirm Mobile</label>
            <input type="text" class="form-control" id="confirmMobile" name="confirm_mobile" placeholder="Confirm Mobile">
          </div>
        <div class="form-group col-md-4">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Email">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="password">Create Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Create Password">
        </div>
        <div class="form-group col-md-6">
            <label for="confirmPassword">Confirm Password</label>
            <input type="password" class="form-control" id="confirmPassword" name="confirm_password" placeholder="Confirm Password">
          </div>
      </div>
      <button type="submit" class="btn btn-primary">Register</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <?php
// Include the database connection file
include_once 'dbcon.php'; // Assuming dbcon.php contains the database connection code

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = mysqli_real_escape_string($con, $_POST['first_name']);
    $lastName = mysqli_real_escape_string($con, $_POST['last_name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // SQL query to insert data into the database
    $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$firstName', '$lastName', '$email', '$hashedPassword')";

    // Execute the query
    if(mysqli_query($con, $sql)) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}

// Close the database connection
mysqli_close($con);
?>

</body>
</html>
