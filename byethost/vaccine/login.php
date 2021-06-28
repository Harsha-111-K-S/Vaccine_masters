<!doctype html>  
<html>  
<head>  
<title>Login</title>  
    <style> 
    body{
        background-color: #ccddff;
    }  
 fieldset{

  -webkit-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
  -moz-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
  box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
  }
   h1 {  
    color: Black;  
    font-family: verdana;  
    font-size: 200%; 
      height: 10px;	
	  
	  
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
   
 #button {
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
                <a href="../project-hack-2/frontpage.html">Home</a>
				
        </div>
	   </div>
       <br>

       <img src="images/cov1.jpg" style="float:right;margin-right: 50px; margin-top:60px">
      <h1 style="margin-left: 8%;">STUDENT LOGIN FORM</h1>

	  
      
      <div class="id" >
     <div class="row">
    <div class="col-sm" style="margin-left: 8%">
   
        <br><br>
        <div  style="font-size:1.2em; float:center;"> 
		<p><a href="register.php " style="text-decoration: none;color:Black">Register</a> | <a href="login.php" style="text-decoration: none;color:Black">Login</a></p>  
       <h3>Login Form</h3>  
    <div id="form-element">
       <form action="" method="POST">
       <fieldset style="width:400px;"> 
        <div style="padding-top: 20px;">
       Email_Id: <input type="text"   style="height:25px; width:300px; font-size:14pt;" name="user"><br />  
	   <br>
       Password: <input type="password"   style="height:25px; width:300px; font-size:14pt;" name="pass"><br />   
       <br>
       <input type="submit" name="submit" value="Login" id="button" style="margin-left: 40%;">
   </div>
       </fieldset>	
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
  
     
  
    $query=mysqli_query($conn,"SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user; 
     echo "<script>alert('Login Succesful');window.location.href='booking.php';</script>";  
  }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  
</body>  
</html>   