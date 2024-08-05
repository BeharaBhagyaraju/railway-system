<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Railway Ticket Booking</title>
  <link rel="stylesheet" href="styles.css"> <!-- Link your CSS file here -->
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      padding: 20px;
    }
    h1 {
      text-align: center;
      color: #333;
    }
    form {
      max-width: 800px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    fieldset {
      border: none;
      margin-bottom: 15px;
    }
    legend {
      font-size: 1.2em;
      margin-bottom: 10px;
      color: #333;
    }
    label {
      width: 100%;
      margin-bottom: 5px;
      color: #333;
      display: block;
    }
    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="date"],
    select {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    select {
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none;
      background: url('down-arrow.png') no-repeat right #fff;
      background-size: 20px;
    }
    input[type="submit"] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 1em;
    }
    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <h1>Railway Ticket Booking</h1>
  <form action="booking_confirmation.php" method="post">
    <fieldset>
      <legend>Train Information</legend>
      <label for="train_name">Train Name:</label>
      <input type="text" id="train_name" name="train_name" placeholder="e.g., VSKP Express" required>

      <label for="train_number">Train Number:</label>
      <input type="text" id="train_number" name="train_number" placeholder="e.g., 12345" required>

      <label for="departure_station">Departure Station:</label>
      <input type="text" id="departure_station" name="departure_station" placeholder="e.g., Rayagada" required value="Agra">

      <label for="arrival_station">Arrival Station:</label>
      <input type="text" id="arrival_station" name="arrival_station" placeholder="e.g., Parvathipuram" required>

      <label for="departure_date">Departure Date:</label>
      <input type="date" id="departure_date" name="departure_date" required>
    </fieldset>

    <fieldset>
      <legend>Passenger Information</legend>
      <label for="passenger_name">Passenger Name:</label>
      <input type="text" id="passenger_name" name="passenger_name" placeholder="e.g., John Doe" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="e.g., myname@gmail.com" required>

      <label for="phone">Phone:</label>
      <input type="tel" id="phone" name="phone" placeholder="e.g., 1234567890" required>
    </fieldset>

    <fieldset>
      <legend>Booking Preferences</legend>
      <label for="seat_type">Seat Type:</label>
      <select id="seat_type" name="seat_type" required>
        <option value="" selected disabled>--- Select Seat Type ---</option>
        <option value="window">Window</option>
        <option value="aisle">Aisle</option>
        <option value="middle">Middle</option>
      </select>

      <label for="ticket_class">Ticket Class:</label>
      <select id="ticket_class" name="ticket_class" required>
        <option value="" selected disabled>--- Select Class ---</option>
        <option value="first_class">First Class</option>
        <option value="second_class">Second Class</option>
        <option value="sleeper">Sleeper</option>
      </select>
    </fieldset>

    <input type="submit" value="Book Ticket">
  </form>
</body>
</html>