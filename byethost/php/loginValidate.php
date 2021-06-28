<?php
$email=$_POST['email'];
$pass=$_POST['pass'];



if($email == 'karthikbhargav1718@gmail.com' && $pass =='Karthik@18')
{	
	echo "<script>alert('Login Succesful');window.location.href='../html/adm.html';</script>";
}
else
{
	echo "<script>alert('Wrong email or password');</script>";
}
?>