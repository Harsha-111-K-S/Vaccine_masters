<?php
$host="localhost";
$root="root";
$password="";
$database="students";
$conn= mysqli_connect($host,$root,$password,$database);
if(!$conn){
	die(" error in connection to database");
}
?>