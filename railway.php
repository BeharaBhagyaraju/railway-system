
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Railway Reservation</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .navbar-brand {
      font-size: 1.5em;
    }
    .nav{
        background: transparent;
    }
    .box{
        background-image: url("views/maxresdefault.jpg");
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 644px;
        position: relative;
    }
    .quote{
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        text-align: center;
        color: white;
    }
    .quote span{
        font-size: 2em;
    }
    .book-now-btn {
        background-color: transparent;
        border: 2px solid white;
        color: white;
        padding: 10px 20px;
        font-size: 20px;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    .book-now-btn:hover {
        background-color: white;
        color: black;
    }
    .card {
        transition: 0.5s;
    }
    .card img {
        height: 30vh;
    }
    .card:hover {
        border: 1px solid black;
        transform: scale(1.05);
    }
    .questions p {
        margin: 0;
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
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="trains.php">Trains</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about us.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact_us.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Signup|Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="box">
    <div class="quote">
        <span>Safe Journey</span>
        <a href="login.php" class="btn btn-primary btn-lg book-now-btn bg-success">Book Now</a>
    </div>
</div>
<div class="places py-5">
    <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="card col-lg-3 col-md-5 text-center p-2 m-3 shadow-lg" style="width: 18rem;">
            <img src="views/tirupathi.jpg" class="card-img-top" alt="Tirupathi">
            <div class="card-body">
              <h5 class="card-title">TIRUPATHI</h5>
              <p class="card-text">A popular pilgrimage city in Andhra Pradesh.</p>
              <a href="tirupathi.php" class="btn btn-primary">Book now</a>
            </div>
          </div>
          <div class="card col-lg-3 col-md-5 text-center p-2 m-3 shadow-lg" style="width: 18rem;">
            <img src="views/delhi.jpg" class="card-img-top" alt="Delhi">
            <div class="card-body">
              <h5 class="card-title">DELHI</h5>
              <p class="card-text">The capital city of India, rich in history and culture.</p>
              <a href="delhi.php" class="btn btn-primary">Book now</a>
            </div>
          </div>
          <div class="card col-lg-3 col-md-5 text-center p-2 m-3 shadow-lg" style="width: 18rem;">
            <img src="views/goa.jpg" class="card-img-top" alt="Goa">
            <div class="card-body">
              <h5 class="card-title">GOA</h5>
              <p class="card-text">Famous for its beaches, nightlife, and Portuguese heritage.</p>
              <a href="goa.php" class="btn btn-primary">Book now</a>
            </div>
          </div>
          <div class="card col-lg-3 col-md-5 text-center p-2 m-3 shadow-lg" style="width: 18rem;">
            <img src="views/hyderabad.jpg" class="card-img-top" alt="Hyderabad">
            <div class="card-body">
              <h5 class="card-title">HYDERABAD</h5>
              <p class="card-text">Known for its historical sites, including the Charminar.</p>
              <a href="hyderabad.php" class="btn btn-primary">Book now</a>
            </div>
          </div>
          <div class="card col-lg-3 col-md-5 text-center p-2 m-3 shadow-lg" style="width: 18rem;">
            <img src="views/mumbai.jpg" class="card-img-top" alt="Mumbai">
            <div class="card-body">
              <h5 class="card-title">MUMBAI</h5>
              <p class="card-text">The financial capital of India, home to Bollywood.</p>
              <a href="mumbai.php" class="btn btn-primary">Book now</a>
            </div>
          </div>
          <div class="card col-lg-3 col-md-5 text-center p-2 m-3 shadow-lg" style="width: 18rem;">
            <img src="views/agra.jpg" class="card-img-top" alt="Agra">
            <div class="card-body">
              <h5 class="card-title">AGRA</h5>
              <p class="card-text">Famous for the iconic Taj Mahal, a wonder of the world.</p>
              <a href="agra.php" class="btn btn-primary">Book now</a>
            </div>
          </div>
        </div>
    </div>
</div>
<div class="questions bg-secondary py-5">
  <div class="container text-white">
    <p><strong>Q) How can I book tickets?</strong></p>
    <p>A) You can easily book your train tickets by visiting our website/app and selecting your boarding and arrival destinations.</p>
    <p><strong>Q) How many passengers can I book on a single train ticket booking?</strong></p>
    <p>A) You can book up to 6 passengers on a single train booking. For Tatkal train ticket booking, the maximum number is 4 persons per booking. Two children below 5 years are allowed per booking but not ticketed.</p>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>