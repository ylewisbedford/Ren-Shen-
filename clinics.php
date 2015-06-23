<?php
$title = 'Clinics';
include 'includes/header.php'; ?>
    <h1>Clinics</h1>
    <div id="map-canvas"></div>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
  function initialize() {
    var mapCanvas = document.getElementById('map-canvas');
    var mylocation = new google.maps.LatLng(50.821530, -0.143106)
    var mapOptions = {
      center: mylocation,
      zoom: 12,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(mapCanvas, mapOptions);
    var marker = new google.maps.Marker({
        position: mylocation,
        map: map,
        title: 'Hello World!'
    });
  }
  initialize();
</script>
<?php include 'includes/footer.php'; ?>
