<?php
	error_reporting(0);
	session_start();
	
	$link = mysql_connect('localhost','root','root');
	mysql_select_db('mobile',$link);
	
	$type = $_POST['type'];
	$lng = $_POST['lng'];
	$lat = $_POST['lat'];
	$type = $_POST['type'];
	$title = $_POST['title'];
	$description = $_POST['description'];
	$trail_id = '';
	$type = strtolower($type);
	
	if($type == 'start') {
		$sql = "INSERT INTO trails (name) VALUES ('$title')";
		$query = mysql_query($sql) or die(mysql_error());
		$trail_id = mysql_insert_id();
		$_SESSION['last_trail_id'] = $trail_id;
	} else {
		$trail_id = $_SESSION['last_trail_id'];
	}
	$sql = "INSERT INTO points (`lat`,`lng`,`trail_id`,`type`) VALUES ('$lat','$lng','$trail_id','$type')";
	$query = mysql_query($sql) or die(mysql_error());
	
	echo 'true';
?>