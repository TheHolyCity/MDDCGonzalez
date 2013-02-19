<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/web.css" media="screen" />
		<link rel="stylesheet" href="font/rockwell/stylesheet.css" media="screen" />
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen" />
		<title>Out.Spoken GPS Web Application</title>
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div id="branding"></div>
				<div class="logoutbtn"></div>
			</div>
			<div id="content">
				<form>
					<input type="text" class="trail_title" placeholder="Route Name">
					<textarea class="trail_description">
					</textarea>
					
					<div id="mapcontainer">
					 	<div id="map_canvas" style="width:400px; height:400px;"></div>
					</div>
					<!-- <a class="btn btn-inverse toggle" href="#" rel="start"><p>Start</p></a> -->
					<input type="submit" name="submit" value="Start" class="btn btn-inverse toggle" rel="start" />
				</form>
			</div>
			</div>
			<div id="footer">
			</div>
		</div>
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuL-tWUHYx26WSntf8-DwHKepRgxNEGqk&sensor=true"></script>
	<script type="text/javascript" src="js/mapapp.js"></script>
	
	</body>
</html>
