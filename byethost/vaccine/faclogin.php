<!doctype html>  
<html>  
<head>  
<title>Login</title>  

    <style>  
 body {
   
    
	background-color: #EBDEF0 ;
	background-position: center;
	 background-size: cover;
	 position: relative;
	height:auto;
     
      
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

.login{
  background-color: white;
  font-size:1.3em; 
  float:center;
  border:1px solid black;
  margin:30px;
  padding : 50px;
  width:400px
}

       
</style>  
</head> 
<div id="nav">
<div id="heading">
         <img src="Images/canvas6.jpeg" alt="no image" width="200px" height="100px" style="float:left">
         </div>       
        <div id="navlinks">
                <a href="../project-hack-2/frontpage.html" style="color:black;">Home</a>
				
        </div>
	   </div>		 
<body>    

<img src="../images/doc2.png" style = "float:right;"/>
<form action="" method="POST"> 
      
 <div class="id" style="margin:2%;">
<div class="row">
    <div class="col-sm" style="margin-left:10%">
    <div style="padding-top:0.5%;display:inline;"><h1 class="font-weight-bold" style="color:black;font-size:170%;display:inline;margin:10px 10px 0px 32px;padding-top:10%;">FACULTY LOGIN FORM</h1>
    </div> 
        <br><br>
        
       <h3 style = " font-size:2em;margin-left:3%;">Login Form</h3>  
       <div class = "login"> 
    
     
        Email_Id: <input type="text"  style="height:25px; width:350px; font-size:14pt; "  name="user" ><br/> 
        <br>		
        Password: <input type="password"  style="height:25px; width:350px; font-size:14pt;" name="pass"><br/> 
         <button type="submit" name="submit" class = "btn btn-info" style = "margin-top:20px;">Submit</button>	
</div>
</div>
</div>
</div>

</form> 

<h2 style = "float:right; margin-right:7%;">Don't panic if you're tested positive</h2>



 
 
<?php 

     require_once '../configuration.php';

if(isset($_POST["submit"])){  
  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
  
     
  
    $query=mysqli_query($conn,"SELECT * FROM faclogin WHERE username='".$user."' AND password='".$pass."'");  
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
echo "<script>alert('Login Succesful');window.location.href='../../VaccineMasters/PHP/FacultyBooking.php';</script>";
     
  
   
    }  
    } else {  
    echo "<script>alert('Invalid username or password!');</script>";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  
</body>  
</html>   