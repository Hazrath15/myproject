function loadMap() {
  var RUET = {lat: 24.3636, lng:88.6284};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17.5,
          center: RUET
        });
        var marker = new google.maps.Marker({
         position: RUET,
         map: map
       });
}
