<?php

   require_once "../../configuration.php";

  if(isset($_POST['name']))
     $name = $_POST['name'];
  if(isset($_POST['email']))
     $email = $_POST['email']; 
  if(isset($_POST['age']))
      $age = $_POST['age'];
  if(isset($_POST['dept']))
      $dept = $_POST['dept'];   
  if(isset($_POST['firstdose']))
     $firstdose = date('d-m-Y',strtotime($_POST['firstdose']));
  if(isset($_POST['time']))
     $time = $_POST['time'];  

  

  $sql = "insert into faculty_booking values ('$name','$email','$dept','$age','$firstdose','$time')";
  echo $sql;
  $query=mysqli_query($conn,$sql);
        
                if($query){
                  echo "<script> alert('Booking Successful');
                                 alert('Happy vaccine!!! Please download the acknowledgement');
                  </script>";
                    
                }
   include 'FacultyBooking.php';             
?>