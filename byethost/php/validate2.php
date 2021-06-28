<?php
$opt1= $_POST['dept'];
$opt2= $_POST['sem'];
if($opt1 == 'cse' && $opt2 == 'six')
{
	 header("Location: ../vaccine/viewstudent.php");
}
else
{	echo "<h1>You Selected Department=$opt1 and Sem=$opt2 </h1>";
	echo "<h2>Implementations not done for remaining options.</h2>";
	echo "<h2>Please select Department as CSE and Sem as six to continue</h2>";
}
?>