<html>
<head>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbQvUzMljIxDUIRNAa3CYJr3l4jeVyQKs&libraries&callback=initMap"
  type="text/javascript"></script>
  <style type="text/css">

  	#map {
  			width: 400px;
  			height: 400px;
  	 }
  </style>

  <script type="text/javascript">

  		x = navigator.geolocation;

  		x.getCurrentPosition(success, failure);

  		function success(position)

  		{
  			var myLat = position.coords.latitude;
  			var myLong = position.coords.longitude;

  			var coords = new google.maps.LatLng(myLat,myLong);

  			var mapOptions = {

  				zoom:18,
  				center: coords,
  				mapTypeId: google.maps.MapTypeId.ROADMAP
  			}

  			var map = new google.maps.Map(document.getElementById("map"), mapOptions);
  			var marker = new google.maps.Marker({map:map, position:coords});	
  		}

  		function failure(){ }

  </script>

</head>

<body>
		<div id="map"></div>
		<form>
			
		</form>


</body>
</html>