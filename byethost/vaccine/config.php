<?php
$myhost="localhost";
$myuser="root";
$mypass="";
$mydb="studentsdetails";
	$conn = mysqli_connect($myhost,$myuser,$mypass,$mydb);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
