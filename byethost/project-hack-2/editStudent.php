<html>
<head>
	<title>EditStudentDetails</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="editStudent.css">
</head>
<body>
	<div class="navbar-at-top">
		<img src="logo2.png" class="logo2">
		<ul>
        	<li><a href="frontpage.html">HOME</a></li>
		</ul>
	</div>	
    <div class="container">
    	<br>
    	<h1 style="margin-left:10px;color: white;">Student Vaccination Details Insertion</h1>
	  <form method="POST" action="" >
    	<label for="usn">USN:</label><br>
		<input type="text" name="usn" placeholder="Enter the USN"><br><br>
		<label for="sdate"> FIRST VACCINE DATE:</label><br>
		<input type="date" name="fdate" placeholder="Enter the fist vaccine date"><br><br>
		<label for="fdate">SECOND VACCINE DATE:</label><br>
		<input type="date" name="sdate" placeholder="Enter the second vaccine date"><br><br>
		<input type="submit" name="submit" class="submit" value="SUBMIT">
	  </form>
    </div>
    <?php require_once '../configuration.php';
       if(isset($_POST['submit'])){
      $sql="UPDATE students SET FIRST_VAC_DATE='$_POST[fdate]',SECOND_VAC_DATE='$_POST[sdate]' WHERE USN='$_POST[usn]'";
      $res=mysqli_query($conn,$sql);
      
      if($res){
      	echo '<script  type="text/javascript"> alert("DATA UPDATION SUCCESSFUL")</script>';
      }
      else{
      	echo '<script  type="text/javascript"> alert("DATA UPDATION UNSUCCESSFUL")</script>';
      }
  }




    ?>
     
</body>
</html>