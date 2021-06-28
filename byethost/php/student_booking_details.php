<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student booking details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/table.css">
   
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
        <h1 style="margin-left:40%;color:#00334d;">Covid-19 Symptoms</h1>
        <div class="row">
            <marquee class="mov" behavior="alternate">
                <img src="../images/symp-a.png" height="100px" width="100px"><caption>Dry Cough</caption>
                <img src="../images/symp-b.png" height="100px" width="100px"><caption>Sore throat</caption>
                <img src="../images/symp-c.png" height="100px" width="100px"><caption>Cold</caption>
                <img src="../images/symp-d.png" height="100px" width="100px"><caption>Fever</caption>
                <img src="../images/symp-e.png" height="100px" width="100px"><caption>Head ache</caption>
                <img src="../images/symp-f.png" height="100px" width="100px"><caption>Vomiting</caption>
            </marquee> 
    </div>
        <br>
        <h1>Student Booking details</h1>
        <br>
        <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered" style="">
        <thead>
            <tr>
                <th class="text-center">USN</th>
                <th class="text-center">Name</th>
                <th class="text-center">Department</th>
                <th class="text-center">Semester</th>
                <th class="text-center">Email</th>
                <th class="text-center">Date</th>
                <th class="text-center">Time</th>
                
            </tr>

        </thead>
        <tbody>
            
            
        <?php

            require_once '../configuration.php';

            $sql ="select * from booking";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['usn']; ?></td>
            <td class="py-2"><?php echo $rows['name']; ?></td>
            <td class="py-2"><?php echo $rows['department']; ?></td>
            <td class="py-2"><?php echo $rows['semester']; ?> </td>
            <td class="py-2"><?php echo $rows['email_id']; ?> </td>
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