<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Map View</title>
    <!-- Include Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <!-- Set the height of the map container -->
    <style>
        #map {
            height: 400px;
        }

        #data {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<!-- Create a container for the map -->
<div id="map"></div>

<!-- Create a container for data -->
<div id="data">
    <!-- Display your data here -->
    <h2>Data Section</h2>
    <p>This is where your data will be displayed.</p>
</div>

<!-- Include Leaflet JavaScript -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<script>
    // Initialize the map
    var map = L.map('map').setView([0, 0], 2); // Set the initial center and zoom level

    // Add a tile layer to the map (you can use other tile providers)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);
</script>

</body>
</html>
