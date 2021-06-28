<?php

   require_once '../../configuration.php';
  if(isset($_POST['name']))
     $name = $_POST['name'];
  if(isset($_POST['first']))
     $first = date('d-m-Y',strtotime($_POST['first']));
  
  
  $sql1 = "select * from faculty_details where name = '$name' ";
  $query1=mysqli_query($conn,$sql1);
  if(!$query1)
  {
      echo "Error ".$sql."<br>".mysqli_error($conn);
  }
   while($row = mysqli_fetch_assoc($query1))
       $vaccine = $row['vaccine_name']; 

    if($vaccine=='CovidShield')
    {
        $secdose = date('d-m-Y',strtotime($first. ' + 42 days'));
        $sql2 = "update faculty_details set first_dose ='$first', second_dose = '$secdose' where name = '$name' ";
        $query2=mysqli_query($conn,$sql2);
        if($query2){
        echo "<script> alert('Updation Successful');
                       alert('First dose scheduled on $first');
                       alert('Second dose scheduled on $secdose');
        window.location='facultyDetailsInsertion.php';
              </script>";
    }
}
    else if ($vaccine == 'Covaxin'){
        $secdose1 = date('d-m-Y',strtotime($first. ' + 28 days'));
        $sql3 = "update faculty_details set first_dose ='$first', second_dose = '$secdose1' where name = '$name' ";
        $query3=mysqli_query($conn,$sql3);
        if($query3){
        echo "<script> alert('Updation Successful');
                       alert('First dose scheduled on $first');
                       alert('Second dose scheduled on $secdose1');
        window.location='facultyDetailsInsertion.php';
              </script>";

    }
    
    }
     
?>

