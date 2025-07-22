<?php
	ob_start(); //Turns on output buffering 

	$timezone = date_default_timezone_set("Europe/London");
	$conn = mysqli_connect("localhost", "root", "simm", "feedback"); //Connection variable

	if($conn) {
		echo "Successful " ;

	}else{
		echo "Not Connected";
	}
?>