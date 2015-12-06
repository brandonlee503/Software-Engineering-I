var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 44.5637806, lng: -123.2816329},
    zoom: 15
  });
}
