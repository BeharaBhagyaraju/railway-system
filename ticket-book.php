<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ticket Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Railway Reservation</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Signup|Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h2 class="mb-4">Ticket Booking</h2>
        <div id="ticketDetails" class="mt-3"></div>
    </div>

    <script>
        window.onload = function() {
            const ticketDetailsContainer = document.getElementById('ticketDetails');

            const urlParams = new URLSearchParams(window.location.search);
            const trains = [
                {
                    number: urlParams.get('number'),
                    name: urlParams.get('name'),
                    from: urlParams.get('from'),
                    to: urlParams.get('to'),
                    departure: urlParams.get('departure'),
                    arrival: urlParams.get('arrival')
                }
            ];

            if (trains.length === 0) {
                ticketDetailsContainer.innerHTML = '<p class="text-center">No train details found</p>';
            } else {
                const table = document.createElement('table');
                table.classList.add('table');
                table.innerHTML = `
                    <thead>
                        <tr>
                            <th scope="col">Train Number</th>
                            <th scope="col">Train Name</th>
                            <th scope="col">From</th>
                            <th scope="col">To</th>
                            <th scope="col">Departure</th>
                            <th scope="col">Arrival</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                `;
                trains.forEach(train => {
                    table.innerHTML += `
                        <tr>
                            <td>${train.number}</td>
                            <td>${train.name}</td>
                            <td>${train.from}</td>
                            <td>${train.to}</td>
                            <td>${train.departure}</td>
                            <td>${train.arrival}</td>
                            <td><button class="btn btn-primary" onclick="bookTicket('${train.number}', '${train.name}', '${train.from}', '${train.to}', '${train.departure}', '${train.arrival}')">Book Now</button></td>
                        </tr>
                    `;
                });
                table.innerHTML += `</tbody>`;
                ticketDetailsContainer.appendChild(table);
            }
        };

        function bookTicket(number, name, from, to, departure, arrival) {
            const ticketDetails = `
                Ticket booked successfully!\n
                Train Number: ${number}\n
                Train Name: ${name}\n
                From: ${from}\n
                To: ${to}\n
                Departure: ${departure}\n
                Arrival: ${arrival}
            `;
            alert(ticketDetails);
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
