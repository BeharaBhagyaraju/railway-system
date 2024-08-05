<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TRAINS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .train-item {
            margin-bottom: 10px;
        }
        .spinner-border {
            width: 3rem;
            height: 3rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Railway Reservation</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-disabled="true">Signup|Login</a>
                    </li>
                </ul>
                <form class="d-flex" role="search" onsubmit="searchTrain(event)">
                    <input class="form-control me-2" type="search" placeholder="Search Train Number" aria-label="Search" id="searchbox">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div id="trainResults">
            <h2>Sample Trains</h2>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center train-item">
                    <div>
                        <strong>Train Number:</strong> 12345<br>
                        <strong>Train Name:</strong> Express Train 1<br>
                        <strong>From:</strong> Mumbai<br>
                        <strong>To:</strong> Delhi<br>
                        <strong>Departure:</strong> May 26, 2024, 10:00 AM<br>
                        <strong>Arrival:</strong> May 26, 2024, 6:00 PM
                    </div>
                    <button class="btn btn-primary ms-3" onclick="bookNow('12345', 'Express Train 1', 'Mumbai', 'Delhi', 'May 26, 2024, 10:00 AM', 'May 26, 2024, 6:00 PM')">Book Now</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center train-item">
                    <div>
                        <strong>Train Number:</strong> 67890<br>
                        <strong>Train Name:</strong> Local Train 1<br>
                        <strong>From:</strong> Bangalore<br>
                        <strong>To:</strong> Chennai<br>
                        <strong>Departure:</strong> May 26, 2024, 8:00 AM<br>
                        <strong>Arrival:</strong> May 26, 2024, 2:00 PM
                    </div>
                    <button class="btn btn-primary ms-3" onclick="bookNow('67890', 'Local Train 1', 'Bangalore', 'Chennai', 'May 26, 2024, 8:00 AM', 'May 26, 2024, 2:00 PM')">Book Now</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center train-item">
                    <div>
                        <strong>Train Number:</strong> 45689<br>
                        <strong>Train Name:</strong> Prasanthi Express<br>
                        <strong>From:</strong> Hyderabad<br>
                        <strong>To:</strong> Visakhapatnam<br>
                        <strong>Departure:</strong> May 26, 2024, 9:00 AM<br>
                        <strong>Arrival:</strong> May 26, 2024, 5:00 PM
                    </div>
                    <button class="btn btn-primary ms-3" onclick="bookNow('45689', 'Prasanthi Express', 'Hyderabad', 'Visakhapatnam', 'May 26, 2024, 9:00 AM', 'May 26, 2024, 5:00 PM')">Book Now</button>
                </li>
            </ul>
        </div>
    </div>

    <script>
        async function searchTrain(event) {
            event.preventDefault();
            const searchbox = document.getElementById('searchbox');
            const query = searchbox.value.trim();
            const resultsContainer = document.getElementById('trainResults');

            if (!query) {
                resultsContainer.innerHTML = '<p class="text-center">Please enter a train number</p>';
                return;
            }

            resultsContainer.innerHTML = '<div class="d-flex justify-content-center"><div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div></div>';

            // Simulated API response
            const simulatedApiResponse = {
                "12345": [
                    { "number": "12345", "name": "Express Train 1", "from": "Mumbai", "to": "Delhi", "departure": "May 26, 2024, 10:00 AM", "arrival": "May 26, 2024, 6:00 PM" },
                    { "number": "12345", "name": "Express Train 2", "from": "Mumbai", "to": "Delhi", "departure": "May 26, 2024, 7:00 PM", "arrival": "May 27, 2024, 3:00 AM" }
                ],
                "67890": [
                    { "number": "67890", "name": "Local Train 1", "from": "Bangalore", "to": "Chennai", "departure": "May 26, 2024, 8:00 AM", "arrival": "May 26, 2024, 2:00 PM" }
                ],
                "45689": [
                    { "number": "45689", "name": "Prasanthi Express", "from": "Hyderabad", "to": "Visakhapatnam", "departure": "May 26, 2024, 9:00 AM", "arrival": "May 26, 2024, 5:00 PM" }
                ],
                "104102": [
                    { "number": "104102", "name": "Visakha Express", "from": "Kolkata", "to": "Bhubaneswar", "departure": "May 26, 2024, 11:00 AM", "arrival": "May 26, 2024, 5:00 PM" }
                ],
                "101102": [
                    { "number": "101102", "name": "Thirumala Express", "from": "Chennai", "to": "Tirupati", "departure": "May 26, 2024, 7:00 AM", "arrival": "May 26, 2024, 11:00 AM" }
                ],
                "201202": [
                    { "number": "201202", "name": "Vande Bharat Train", "from": "Delhi", "to": "Varanasi", "departure": "May 26, 2024, 6:00 AM", "arrival": "May 26, 2024, 2:00 PM" }
                ],
                "301302": [
                    { "number": "301302", "name": "Tirupati Express",
                    "from": "Hyderabad",
                    "to": "Tirupati",
                    "departure": "May 26, 2024, 10:00 AM",
                    "arrival": "May 26, 2024, 6:00 PM"
                }],
                "401401": [{
                    "number": "401401",
                    "name": "Konark Express",
                    "from": "Mumbai",
                    "to": "Bhubaneswar",
                    "departure": "May 26, 2024, 1:00 PM",
                    "arrival": "May 27, 2024, 1:00 PM"
                }],
                "501502": [{
                    "number": "501502",
                    "name": "Coimbatore Express",
                    "from": "Chennai",
                    "to": "Coimbatore",
                    "departure": "May 26, 2024, 4:00 PM",
                    "arrival": "May 26, 2024, 9:00 PM"
                }],
                "601602": [{
                    "number": "601602",
                    "name": "Ganga Kaveri Express",
                    "from": "Varanasi",
                    "to": "Chennai",
                    "departure": "May 26, 2024, 5:00 PM",
                    "arrival": "May 27, 2024, 5:00 PM"
                }],
                "701702": [{
                    "number": "701702",
                    "name": "Godavari Express",
                    "from": "Hyderabad",
                    "to": "Visakhapatnam",
                    "departure": "May 26, 2024, 6:00 PM",
                    "arrival": "May 27, 2024, 4:00 AM"
                }],
                "801802": [{
                    "number": "801802",
                    "name": "Pune Express",
                    "from": "Mumbai",
                    "to": "Pune",
                    "departure": "May 26, 2024, 8:00 PM",
                    "arrival": "May 26, 2024, 11:00 PM"
                }]
            };

            setTimeout(() => { // Simulate API delay
                resultsContainer.innerHTML = '';
                const data = simulatedApiResponse[query] || [];

                if (data.length === 0) {
                    resultsContainer.innerHTML = '<p class="text-center">No trains found</p>';
                } else {
                    const ul = document.createElement('ul');
                    ul.classList.add('list-group');
                    data.forEach(train => {
                        const li = document.createElement('li');
                        li.classList.add('list-group-item', 'd-flex', 'justify-content-between', 'align-items-center', 'train-item');
                        li.innerHTML = `<div>
                            <strong>Train Number:</strong> ${train.number}<br>
                            <strong>Train Name:</strong> ${train.name}<br>
                            <strong>From:</strong> ${train.from}<br>
                            <strong>To:</strong> ${train.to}<br>
                            <strong>Departure:</strong> ${train.departure}<br>
                            <strong>Arrival:</strong> ${train.arrival}
                        </div>`;
                        const button = document.createElement('button');
                        button.classList.add('btn', 'btn-primary', 'ms-3');
                        button.textContent = 'Book Now';
                        button.onclick = () => bookNow(train.number, train.name, train.from, train.to, train.departure, train.arrival);
                        li.appendChild(button);
                        ul.appendChild(li);
                    });
                    resultsContainer.appendChild(ul);
                }
            }, 1000); // Simulate a 1 second delay
        }

        function bookNow(number, name, from, to, departure, arrival) {
            // Redirect to the ticket booking page with train details as query parameters
            window.location.href = `ticket-book.php?number=${number}&name=${name}&from=${from}&to=${to}&departure=${departure}&arrival=${arrival}`;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

