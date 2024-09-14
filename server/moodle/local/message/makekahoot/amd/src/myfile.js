// Path: local/message/amd/src/myfile.js
define(function() {
    return {
        init: function() {
            console.log("AMD modulet er indlæst!");

            // Opret en ny div
            var newDiv = document.createElement('div');
            
            // Tilføj tekst til div'en
            newDiv.textContent = "Dette er en ny div tilføjet af AMD modulet!";
            
            // Find elementet med id "page"
            var pageElement = document.getElementById('page');

            // Tjek om elementet findes og tilføj div'en til det
            if (pageElement) {
                pageElement.appendChild(newDiv);
            } else {
                console.error('Elementet med id "page" blev ikke fundet.');
            }
        }
    };
});
