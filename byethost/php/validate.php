<?php
$opt= $_POST['booking'];
echo $opt;
if($opt == 'faculty')
{
	 header("Location: faculty_booking_details.php");
}
else
{
	header("Location: student_booking_details.php");
}

?>