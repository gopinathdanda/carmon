<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Gopinath Danda">

		<title>
  
  
		</title>

		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--<link href='http://fonts.googleapis.com/css?family=Raleway:800,100|Roboto' rel='stylesheet' type='text/css'>-->

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Favicons -->
		<!--<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<link rel="icon" href="/favicon.ico">-->
		
	</head>
	
	<body>
		
		<h1 id="speed"></h1>
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<!--<script src="js/jquery.js"></script>-->
		<script src="js/bootstrap.min.js"></script>
		<script>
			$(document).ready(function(){
				if (navigator.geolocation) {
				    navigator.geolocation.watchPosition(showPos,errPos);
				} else {
				    $('#speed').html("Geolocation is not supported by this browser.");
				}
				
				function showPos(position){
					$('#speed').html(position.coords.speed+' m/s')
				}
				
				function errPos(error){
					switch(error.code) {
					        case error.PERMISSION_DENIED:
					            console.log("User denied the request for Geolocation.");
					            break;
					        case error.POSITION_UNAVAILABLE:
					            console.log("Location information is unavailable.");
					            break;
					        case error.TIMEOUT:
					            console.log("The request to get user location timed out.");
					            break;
					        case error.UNKNOWN_ERROR:
					            console.log("An unknown error occurred.");
					            break;
					    }
				}
			})
		</script>
	</body>
  
</html>