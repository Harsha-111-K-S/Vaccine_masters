<!doctype html>  
<html>  
<head>  
<title>Register</title>  
    <style>   
     
		
	body {
   
    
	background-image: url("images/home-bg.jpg");
	background-size: cover;
    background-repeat:no-repeat ;
	
     
      
    }  
	  #nav {
  
  background-color:rgba(0,0,0,0.1);
  color: white;
  display: flex;
  flex-direction: row;
  align-items: center;
 justify-content: space-between;
 
 
  
 
}
#navlinks {
  margin-right: 10px;
 text-decoration: none;
  float: right;
}

#navlinks a {
  color: white;
  font-size: large;
  margin: 30px;
  text-decoration: none;
}
  h1 {  
     
    font-family: verdana;  
    font-size: 30px; 
	  width: 100%;
	  color: #000;
	  position: absolute;  
     text-align: center; 
    	 
}  
  
 button {
  background-color:black;
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  padding: 10px 20px;
}
</style>  
</head>  
<body>  
     <div id="nav">
     <div id="heading">
         <img src="Images/canvas6.jpeg" alt="no image" width="200px" height="100px" style="float:left">
         </div>       
        <div id="navlinks">
                <a href="../project-hack-2/frontpage.html" style="color:black;">Home</a>
				
        </div>
	   </div>
     
    <h1><center>STUDENT REGISTRATION FORM<center></h1> 
     
   <div class="id" style="margin:2%;">
     <div class="row">
    <div class="col-sm" style="padding:1% 34%;">
   
        <br><br>
        <div  style="font-size:1.3em; float:center;"> 
		
		
     
       <form action="" method="POST">  
    
     <div style="padding-top: 10px">     
       Email_Id: <input type="text" style="height:25px; width:350px; font-size:14pt;border-radius: 7px;"name="user" >
       <br />  
	   <br>

Password: <input type="password" style="height:25px; width:350px; font-size:14pt;border-radius: 7px;"  name="pass" >
<br />   
         
		         
    <input type="submit" name="submit" value="Register"  style="width: 100px;border-radius: 2px;background-color: #007acc; color: white;margin-top: 21px;font-size: 15px;">
    <p style="float:right;"><a href="register.php" style="text-decoration: none;">Register</a> | <a href="login.php" style="text-decoration: none;">Login</a></p>
</div>
   
</div>
</div>
</div>
</div>	
         
         </form>  
<?php
require_once '../configuration.php';

if(isset($_POST["submit"])){  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
   
  
    $sql=mysqli_query($conn,"SELECT * FROM login WHERE username='".$user."'" );  
    $numrows=mysqli_num_rows($sql);  
    if($numrows==0)  
    {  
    $sql="INSERT INTO login(username,password) VALUES('$user','$pass')";  
  
    $result=mysqli_query($conn,$sql);  
        if($result){  
    echo "<script>alert('Account Successfully Created');</script>";  
    } else {  
    echo "Failure!";  
    }  
  
    } else {  
    echo "That username already exists! Please try again with another.";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  
</body>  
</html>   