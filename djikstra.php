<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shortest Path on Map</title>
    <!-- Include Leaflet CSS and JS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
</head>
<body>
    <div id="map" style="height: 400px;"></div>

    <script>
        // Contoh koordinat dan jalur terpendek
        var coordinates = {
            'A': [1.0, 1.0],
            'B': [2.0, 2.0],
            'C': [3.0, 1.5],
        };

        var shortestPath = ['A', 'B', 'C'];

        // Inisialisasi peta
        var map = L.map('map').setView([1.5, 1.5], 10);

        // Tambahkan tile layer dari OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

        // Tambahkan marker untuk setiap titik
        for (var coord in coordinates) {
            L.marker(coordinates[coord]).addTo(map).bindPopup(coord);
        }

        // Tambahkan jalur terpendek ke peta
        var pathCoordinates = shortestPath.map(coord => coordinates[coord]);
        L.polyline(pathCoordinates, { color: 'red' }).addTo(map);
    </script>
</body>
</html>
