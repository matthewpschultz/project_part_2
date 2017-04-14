/* JavaScript for Google Map. Taken nearly verbatim from the Google map adding tuorial */

function initMap() {
        var uluru = {lat: 40.494521, lng: -79.924930};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
}
