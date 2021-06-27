<?php
$myhost="localhost";
$myuser="root";
$mypass="";
$mydb="hkms";
    $conn = mysqli_connect($myhost,$myuser,$mypass,$mydb);

    if(!$conn){
        die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
    }

?>



