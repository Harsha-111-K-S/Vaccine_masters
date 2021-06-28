<?php
$opt= $_POST['staff'];

if($opt == 'cse')
{
	 header("Location: ../VaccineMasters/PHP/Faculty details.php");
}
else
{	echo "<h1>You Selected $opt </h1>";
	echo "<h2>Implementations not done for remaining options.</h2>";
	echo "<h2>Please select CSE to continue</h2>";
}
?>