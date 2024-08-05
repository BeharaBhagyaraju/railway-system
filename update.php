<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .train-item {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg sticky-top">
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
        <button class="btn btn-success mb-3" onclick="showInsertForm()">Insert Train</button>
        <div id="insertTrainForm" class="mb-4" style="display: none;">
            <form onsubmit="insertTrain(event)">
                <div class="mb-3">
                    <label for="trainNumber" class="form-label">Train Number</label>
                    <input type="text" class="form-control" id="trainNumber" required>
                </div>
                <div class="mb-3">
                    <label for="trainName" class="form-label">Train Name</label>
                    <input type="text" class="form-control" id="trainName" required>
                </div>
                <button type="submit" class="btn btn-success">Add Train</button>
            </form>
        </div>
        <div id="trainResults"></div>
    </div>

    <script>
        const simulatedApiResponse = {
            "12345": [
                { "number": "12345", "name": "Express Train 1" },
                { "number": "12345", "name": "Express Train 2" }
            ],
            "67890": [
                { "number": "67890", "name": "Local Train 1" }
            ],
            "45689": [
                { "number": "45689", "name": "Prasanthi Express" }
            ],
            "104102": [
                { "number": "104102", "name": "Visakha Express" }
            ],
            "101102": [
                { "number": "101102", "name": "Thirumala Express" }
            ],
            "201202": [
                { "number": "201202", "name": "Vande Bharat Train" }
            ],
            "301302": [
                { "number": "301302", "name": "Telangana Express" }
            ],
            "401401": [
                { "number": "401402", "name": "Delhi Express" }
            ],
            "501502": [
                { "number": "501502", "name": "Agra Express" }
            ],
            "601602": [
                { "number": "601602", "name": "Goa Express" }
            ],
            "701702": [
                { "number": "701702", "name": "Godavari Express" }
            ],
            "801802": [
                { "number": "801802", "name": "Mumbai Express" }
            ],
        };

        function renderTrains(trains) {
            const resultsContainer = document.getElementById('trainResults');
            resultsContainer.innerHTML = '';

            if (trains.length === 0) {
                resultsContainer.innerHTML = '<p>No trains found</p>';
            } else {
                const ul = document.createElement('ul');
                ul.classList.add('list-group');
                trains.forEach(train => {
                    const li = document.createElement('li');
                    li.classList.add('list-group-item', 'd-flex', 'justify-content-between', 'align-items-center', 'train-item');
                    li.innerHTML = `Train Number: ${train.number}, Train Name: ${train.name}`;
                    const button = document.createElement('button');
                    button.classList.add('btn', 'btn-danger', 'ms-3');
                    button.textContent = 'Delete';
                    button.onclick = () => confirmDelete(train.number, train.name);
                    li.appendChild(button);
                    ul.appendChild(li);
                });
                resultsContainer.appendChild(ul);
            }
        }

        function getAllTrains() {
            const allTrains = Object.values(simulatedApiResponse).flat();
            return allTrains;
        }

        function confirmDelete(trainNumber, trainName) {
            if (`confirm(Are you sure you want to delete Train Number: ${trainNumber}, Train Name: ${trainName}?)`) {
                deleteTrain(trainNumber, trainName);
            }
        }

        function deleteTrain(trainNumber, trainName) {
            // Find the train in the simulatedApiResponse and remove it
            Object.keys(simulatedApiResponse).forEach(key => {
                simulatedApiResponse[key] = simulatedApiResponse[key].filter(train => !(train.number === trainNumber && train.name === trainName));
                if (simulatedApiResponse[key].length === 0) {
                    delete simulatedApiResponse[key];
                }
            });
            // Re-render the list of trains
            const allTrains = getAllTrains();
            renderTrains(allTrains);
        }

        function showInsertForm() {
            document.getElementById('insertTrainForm').style.display = 'block';
        }

        function insertTrain(event) {
            event.preventDefault();
            const trainNumber = document.getElementById('trainNumber').value;
            const trainName = document.getElementById('trainName').value;

            if (!simulatedApiResponse[trainNumber]) {
                simulatedApiResponse[trainNumber] = [];
            }
            simulatedApiResponse[trainNumber].push({ number: trainNumber, name: trainName });

            // Alert the user
            alert(`Train added successfully!\nTrain Number: ${trainNumber}\nTrain Name: ${trainName}`);

            // Clear the form and hide it
            document.getElementById('trainNumber').value = '';
            document.getElementById('trainName').value = '';
            document.getElementById('insertTrainForm').style.display = 'none';

            // Re-render the list of trains
            const allTrains = getAllTrains();
            renderTrains(allTrains);
        }

        async function searchTrain(event) {
            event.preventDefault();
            const searchbox = document.getElementById('searchbox');
            const query = searchbox.value;
            const data = simulatedApiResponse[query] || [];
            renderTrains(data);
        }

        document.addEventListener('DOMContentLoaded', () => {
            const allTrains = getAllTrains();
            renderTrains(allTrains);
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>