<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Countries Dropdown Example</title>
    <style>
        /* Style to make the dropdown wider for better visibility */
        #country {
            width: 190px;
        }
    </style>
</head>
<body>

    <!-- <label for="country">Select a Country:</label>
    <select id="country" name="country">
    </select> -->

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Function to fetch all countries from the REST Countries API
            function fetchAllCountries() {
                fetch('https://restcountries.com/v3.1/all')
                    .then(response => response.json())
                    .then(data => populateDropdown(data))
                    .catch(error => console.error('Error fetching countries:', error));
            }

            // Function to populate the dropdown with all countries
            function populateDropdown(countries) {
                var select = document.getElementById('country');
                
                // Add the default "Select" option
                var defaultOption = document.createElement('option');
                defaultOption.value = '';
                defaultOption.text = 'Select';
                select.add(defaultOption);

                // Populate the dropdown with countries
                countries.forEach(country => {
                    var option = document.createElement('option');
                    option.value = country.name.common.toLowerCase();
                    option.text = country.name.common;
                    select.add(option);
                });
            }

            // Call the fetchAllCountries function to get the country data
            fetchAllCountries();
        });
    </script>

</body>
</html>
