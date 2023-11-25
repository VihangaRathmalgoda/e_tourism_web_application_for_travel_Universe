<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nearby Places with Google Maps</title>
    <style>
        #map {
            height: 400px;
            width: 100%;
        }

        #locationInput {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <h1>Nearby Places with Google Maps</h1>
    
    <label for="locationInput">Enter Location:</label>
    <input type="text" id="locationInput" placeholder="Enter a location">
    
    <div id="map"></div>

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&libraries=places&callback=initMap">
    </script>

    <script>
        let map;

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: 0, lng: 0 },
                zoom: 2
            });

            // Add event listener to the textbox for location input
            const locationInput = document.getElementById('locationInput');
            locationInput.addEventListener('change', function () {
                geocodeLocation(locationInput.value);
            });
        }

        function geocodeLocation(location) {
            const geocoder = new google.maps.Geocoder();
            geocoder.geocode({ 'address': location }, function (results, status) {
                if (status === 'OK') {
                    map.setCenter(results[0].geometry.location);
                    map.setZoom(15);
                    findNearbyPlaces(results[0].geometry.location);
                } else {
                    alert('Geocode was not successful for the following reason: ' + status);
                }
            });
        }

        function findNearbyPlaces(location) {
            const service = new google.maps.places.PlacesService(map);
            service.nearbySearch({
                location: location,
                radius: 500, // Search within a 500-meter radius
                type: 'restaurant' // You can change this to any type supported by the Places API
            }, callback);
        }

        function callback(results, status) {
            if (status === google.maps.places.PlacesServiceStatus.OK) {
                for (let i = 0; i < results.length; i++) {
                    createMarker(results[i]);
                }
            }
        }

        function createMarker(place) {
            const marker = new google.maps.Marker({
                map: map,
                position: place.geometry.location,
                title: place.name
            });

            // Add additional information to the marker (you can customize this as needed)
            const infowindow = new google.maps.InfoWindow({
                content: `<strong>${place.name}</strong><br>${place.vicinity}`
            });

            marker.addListener('click', function () {
                infowindow.open(map, marker);
            });
        }
    </script>

</body>
</html>
