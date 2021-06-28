<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student booking details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style type="text/css">
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    
}
h1{
    margin-left: 38%;
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
  float: right;
  text-decoration: none;
}

#navlinks a {
  color: black;
  font-size: large;
  margin: 12px;
  text-decoration: none;
}

h2{
    font-size: 40px;
}
table{
    letter-spacing: 1.2px;
}
td{
    font-weight: 700;
    text-align: center;
}
button{
    border:none;
    background: #d9d9d9;
    transition: 1s;
}
.row{
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  justify-content: space-around;
}
@media only screen and (orientation: portrait){
    *{
        letter-spacing: 1px;
    }
}
    </style>
   
</head>

<body>

<div id="nav">
        <div id="heading">
                <img src="../images/canvas6.jpeg" alt="no image" width="200px" height="100px" style="float:left">
         </div>       
        <div id="navlinks">
                <a href="../project-hack-2/frontpage.html">Home</a>
        </div>
        </div>
        <h1 style="color: #00334d;">Do Yoga Stay Healthy</h1>
        <img src="../images/yoga.gif" style="margin-left: 35%; height: 500px; width:500px;">
        <br>
        <br>
        <br>
        <h1 style="margin-left: 36.5%;">Faculty Booking details</h1>
        <br>
        <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered" style="">
        <thead>
            <tr>
                
                <th class="text-center">Name</th>
                <th class="text-center">Age</th>
                <th class="text-center">Department</th>
                <th class="text-center">Email</th>
                <th class="text-center">Date</th>
                <th class="text-center">Time</th>
                
            </tr>


        </thead>
        <tbody>
           
            
           
        <?php

           require_once '../configuration.php';
           
            $sql ="select * from faculty_booking";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['name']; ?></td>
            <td class="py-2"><?php echo $rows['age']; ?></td>
            <td class="py-2"><?php echo $rows['dept']; ?></td>
            <td class="py-2"><?php echo $rows['email']; ?> </td>
            <td class="py-2"><?php echo $rows['date']; ?> </td>
            <td class="py-2"><?php echo $rows['time']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>