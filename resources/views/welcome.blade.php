<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Map</title>
    <!-- Include Leaflet CSS -->
    <link rel="stylesheet" href="{{ asset('node_modules/leaflet/dist/leaflet.css') }}" />
    <!-- Set the height of the map container -->
    <style>
        #map {
            height: 400px;
        }
    </style>
</head>
<body>

    <!-- Create a container for the map -->
    <div id="map"></div>

    <!-- Include Leaflet JavaScript -->
    <script src="{{ asset('node_modules/leaflet/dist/leaflet.js') }}"></script>

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
