<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Languages Dropdown Example</title>
    <style>
        /* Style to make the dropdown wider for better visibility */
        #language {
            width: 190px;
        }
    </style>
</head>
<body>

    <!-- <label for="language">Select a Language:</label>
    <select id="language" name="language">
    </select> -->

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Function to fetch all languages from the ISO 639-1 API
            function fetchAllLanguages() {
                fetch('https://iso-639-1-api.herokuapp.com/languages')
                    .then(response => response.json())
                    .then(data => populateDropdown(data))
                    .catch(error => console.error('Error fetching languages:', error));
            }

            // Function to populate the dropdown with all languages
            function populateDropdown(languages) {
                var select = document.getElementById('language');
                
                // Add the default "Select" option
                var defaultOption = document.createElement('option');
                defaultOption.value = '';
                defaultOption.text = 'Select';
                select.add(defaultOption);

                // Populate the dropdown with languages
                languages.forEach(language => {
                    var option = document.createElement('option');
                    option.value = language.iso_639_1;
                    option.text = language.name;
                    select.add(option);
                });
            }

            // Call the fetchAllLanguages function to get the language data
            fetchAllLanguages();
        });
    </script>

</body>
</html>
