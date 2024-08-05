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
  <form id="bookingForm" action="booking_confirmation.php" method="post">
    <fieldset>
      <legend>Train Information</legend>
      <label for="train_number">Train Number:</label>
      <input type="text" id="train_number" name="train_number" placeholder="e.g., 12345" required>

      <label for="train_name">Train Name:</label>
      <input type="text" id="train_name" name="train_name" placeholder="Enter Train Name" required>

      <label for="departure_station">Departure Station:</label>
      <input type="text" id="departure_station" name="departure_station" placeholder="e.g., Rayagada" required>

      <label for="arrival_station">Arrival Station:</label>
      <input type="text" id="arrival_station" name="arrival_station" placeholder="e.g., Parvathipuram" required>

      <label for="departure_date">Departure Date:</label>
      <input type="date" id="departure_date" name="departure_date" required>
    </fieldset>

    <!-- Other form fields for passenger information, booking preferences, and submit button -->
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

      <label for="number_of_tickets">Number of Tickets:</label>
      <select id="number_of_tickets" name="number_of_tickets" required>
        <option value="" selected disabled>--- Select Number of Tickets ---</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
    </fieldset>

    <input type="submit" value="Book Ticket">
  </form>

  <script>
 const simulatedApiResponse = {
    "12345": [
        { "number": "12345", "name": "Express Train 1", "from": "Mumbai", "to": "Delhi", "departure": "May 26, 2024, 10:00 AM", "arrival": "May 26, 2024, 6:00 PM" }
        
    ],
    "67890": [
       
        { "number": "67890", "name": "Visakha Express", "from": "Bangolre", "to": "Chennai", "departure": "May 26, 2024, 11:00 AM", "arrival": "May 26, 2024, 5:00 PM" }
    ],
    "45689": [
       
        { "number": "45689", "name": "Vishaka Express", "from": "Hyderabad", "to": "Visakhapatnam", "departure": "May 26, 2024, 9:00 AM", "arrival": "May 26, 2024, 5:00 PM" }
    ],
    "104102": [
        
        { "number": "104102", "name": "Thirumala Express", "from": "Kolkata", "to": "Bhubaneswar", "departure": "May 26, 2024, 11:00        AM", "arrival": "May 26, 2024, 5:00 PM" }
    ],
    "101102": [
        { "number": "101102", "name": "Thirumala Express", "from": "Chennai", "to": "Tirupati", "departure": "May 26, 2024, 7:00 AM", "arrival": "May 26, 2024, 11:00 AM" }
    ],
    "201202": [
        { "number": "201202", "name": "Vande Bharat Train", "from": "Delhi", "to": "Varanasi", "departure": "May 26, 2024, 6:00 AM", "arrival": "May 26, 2024, 2:00 PM" }
    ],
    "301302": [
        { "number": "301302", "name": "Tirupati Express", "from": "Hyderabad", "to": "Tirupati", "departure": "May 26, 2024, 10:00 AM", "arrival": "May 26, 2024, 6:00 PM" }
    ],
    "401401": [
        { "number": "401401", "name": "Konark Express", "from": "Mumbai", "to": "Bhubaneswar", "departure": "May 26, 2024, 1:00 PM", "arrival": "May 27, 2024, 1:00 PM" }
    ],
    "501502": [
        { "number": "501502", "name": "Coimbatore Express", "from": "Chennai", "to": "Coimbatore", "departure": "May 26, 2024, 4:00 PM", "arrival": "May 26, 2024, 9:00 PM" }
    ],
    "601602": [
        { "number": "601602", "name": "Ganga Kaveri Express", "from": "Varanasi", "to": "Chennai", "departure": "May 26, 2024, 5:00 PM", "arrival": "May 27, 2024, 5:00 PM" }
    ],
    "701702": [
        { "number": "701702", "name": "Godavari Express", "from": "Hyderabad", "to": "Visakhapatnam", "departure": "May 26, 2024, 6:00 PM", "arrival": "May 27, 2024, 4:00 AM" }
    ],
    "801802": [
        { "number": "801802", "name": "Pune Express", "from": "Mumbai", "to": "Pune", "departure": "May 26, 2024, 8:00 PM", "arrival": "May 26, 2024, 11:00 PM" }
    ]
};

function populateTrainName(trainNumber) {
    const trainDetails = simulatedApiResponse[trainNumber];

    const trainNameInput = document.getElementById('train_name');

    if (trainDetails && trainDetails.length > 0) {
        const firstTrain = trainDetails[0];
        trainNameInput.value = firstTrain.name;

        // Populate departure station and arrival station
        document.getElementById('departure_station').value = firstTrain.from;
        document.getElementById('arrival_station').value = firstTrain.to;
    } else {
        alert('Train details not found for the entered train number.');
        trainNameInput.value = '';
    }
}

const trainNumberInput = document.getElementById('train_number');

trainNumberInput.addEventListener('blur', function () {
    populateTrainName(this.value.trim());
});

const bookingForm = document.getElementById('bookingForm');

bookingForm.addEventListener('submit', function (event) {
    // Validate departure date before form submission
    const departureDateInput = document.getElementById('departure_date');
    const today = new Date();
    const selectedDate = new Date(departureDateInput.value);

    if (selectedDate < today) {
        event.preventDefault();
        alert('Departure date cannot be in the past.');
    } else {
        // Get form data
        const passengerName = document.getElementById('passenger_name').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;
        const seatType = document.getElementById('seat_type').value;
        const ticketClass = document.getElementById('ticket_class').value;
        const numberOfTickets = document.getElementById('number_of_tickets').value;

        // Construct message
        const message = `Passenger Name: ${passengerName}\nEmail: ${email}\nPhone: ${phone}\nSeat Type: ${seatType}\nTicket Class: ${ticketClass}\nNumber of Tickets: ${numberOfTickets}`;

        // Display message in alert
        alert(message);
    }
});
  </script>
</body>
</html>

