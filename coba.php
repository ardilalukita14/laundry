<html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

<!-- Langkah 1 --> 
<script type="text/javascript"
src="http://maps.google.com/maps/api/js?sensor=true&amp;key=ABQIAAAA8tt4eKTuB
ZMVnLJfP2BZrBT2yXp_ZAY8_ufC3CFXhHIE1NvwkxS4Rz1LFzG0odNPtk8VLkdrQF5grA"></script>

<script type="text/javascript">

  // Langkah 4
  function initialize() {
    var latlng = new google.maps.LatLng(-6.4, 106.8186111);
    var myOptions = {
      zoom: 13,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    // Langkah 3
    var map = new google.maps.Map(document.getElementById("map_canvas"),
myOptions);
  }

</script> 
</head>

<!-- Langkah 5 -->
<body onload="initialize()">

  <!-- Langkah 2 -->
  <div id="map_canvas" style="width:600px; height:600px"></div>

</body>
</html>
 