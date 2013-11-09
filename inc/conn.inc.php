<?php
	$host = "localhost";
	$user = "root";
	$pass = "dwayne12";
	$base = "pt";
	
	$mysqli = new mysqli($host, $user, $pass, $base);
	
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	
	if (get_magic_quotes_gpc()) {
		function stripslashes_deep($value) {
			$value = is_array($value) ?
			array_map('stripslashes_deep', $value) :
			stripslashes($value);
			return $value;
		}
		
		$_POST = array_map('stripslashes_deep', $_POST);
		$_GET = array_map('stripslashes_deep', $_GET);
		$_COOKIE = array_map('stripslashes_deep', $_COOKIE);
		$_REQUEST = array_map('stripslashes_deep', $_REQUEST);
	}
?>