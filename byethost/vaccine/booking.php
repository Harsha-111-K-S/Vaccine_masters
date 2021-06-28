<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <link rel="stylesheet" href = "style.css">
</head>
<body>

<?php
    require_once 'help.php';
	$studenthelper= new StudentBookingHelper();
	?>
	
	
	
    <div id="nav">
        <div id="heading">
            <img src="Images/canvas6.jpeg" alt="no image" width="200px" height="100px" style="margin-left:5px;">
          
        </div>
        <div id="navlinks">
            <a href="../project-hack-2/frontpage.html">Home</a>
        </div>
      </div>
       <h1 style="margin-left: 40%;color:white;">Student Booking Form</h1>
    <br>
  <div class="container-fluid">

    <div class="col-md-4-col-sm-4-col-xs-12"></div>
    <div class="col-md-4-col-sm-4-col-xs-12">
      <form class="form-container" style="width:425px;height: 680px;padding: 60px 60px;margin-left:38%;font-size: 15px;" action="" method="POST">
    <div class="form-group">
    <label for="exampleInputText1">USN</label>
    <input type="text" class="form-control" id="exampleInputText1" placeholder="USN" style="width:300px" name="usn" value="<?php echo $studenthelper->getUsn();?>" />
  </div>

     <div class="form-group">
    <label for="exampleInputText2">Name</label>
    <input type="text" class="form-control" id="exampleInputText2" placeholder="Name" style="width:300px" name="name" value="<?php echo $studenthelper->getName();?>" />
  </div>
   <div class="form-group">
    <label for="exampleInputText3">Department</label>
<input type="text" class="form-control" id="exampleInputText3" placeholder="Department" style="width:300px" name="department" value="<?php echo $studenthelper->getDep();?>" />
  </div>

   <div class="form-group">
    <label for="exampleInputText4">Semester</label>
<input type="text" class="form-control" id="exampleInputText4" placeholder="Semester" style="width:300px" name="semester" value="<?php echo $studenthelper->getSem();?>" />
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" style="width:300px" name="email_id" value="<?php echo $studenthelper->getEmail();?>" />
  </div>

  <div class="form-group">
    <label for="exampleInputDate1">Date</label>
    <input type="Date" class="form-control" id="exampleInputDate1" placeholder="Date" style="width:300px" name="date" value="<?php echo $studenthelper->getFirstdosedate();?>" />
  </div>
<div class="form-group">
    <label for="TimeInput">Time</label>
   <select class="form-control" name="time" id="TimeInput" style="width:300px;">
                                      <option value="10AM-11AM"<?php echo $studenthelper->isTimeSelected("10AM-11AM");?>>10AM - 11AM</option>
                                      <option value="11AM-12PM" <?php echo $studenthelper->isTimeSelected("11AM-12PM");?>>11AM - 12PM </option>
                                      <option value="12PM-1PM" <?php echo $studenthelper->isTimeSelected("12PM-1PM");?>>12PM - 1PM </option>
                                      <option value="1PM-2PM"<?php echo $studenthelper->isTimeSelected("1PM-2PM");?>>1PM - 2PM</option>
                                      <option value="2PM-3PM"<?php echo $studenthelper->isTimeSelected("2PM-3PM");?>>2PM - 3PM</option>
                                      <option value="3PM-4PM"<?php echo $studenthelper->isTimeSelected("3PM-4PM");?>>3PM - 4PM</option>
                                      <option value="4PM-5PM"<?php echo $studenthelper->isTimeSelected("4PM-5PM");?>>4PM - 5PM</option>
                               
    </select>
  </div>

 <input type="submit" name="submit" value="submit" style="background-color: green;">
 <input type="submit" id="ack" name="ack"  value="download" formaction="pdf.php" style="background-color: black;">

</form>

                        <?php
                       require_once '../configuration.php';

                     if(!$conn){
                            die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
                            }
						
						if(isset($_POST['submit'])){

						$sql1 = "SELECT * FROM booking WHERE email_id='".$_POST["email_id"]."' ";
             		    $result = mysqli_query($conn,$sql1);	
             		    if ($result->num_rows > 0) {
			                  echo "<script>alert('Sorry, user already exist!');</script>";
			             }
						else{
							$sql = "INSERT INTO booking(usn,name,department,semester,email_id,date,time)
							VALUES ('" . $_POST["usn"] ."','" . $_POST["name"] . "','" . $_POST["department"] . "','" . $_POST["semester"] . "','" . $_POST["email_id"] . "', '" . $_POST["date"] . "','" . $_POST["time"] . "' )";

                            $query =mysqli_query($conn, $sql);
                            if($query)
                            {
                                echo "<script>alert('Insertion Successful');</script>";
                            }

							$conn->close();
                        }
						
					}
				?> 
</body>
</html>