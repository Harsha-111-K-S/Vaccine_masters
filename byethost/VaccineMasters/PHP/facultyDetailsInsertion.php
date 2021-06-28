<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href = "../CSS/style2.css">
</head>
<body>
    <?php require_once 'header.php'?>
    <form name = "facultyInsertionForm" method="post" action = "Updation.php">
<div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>FACULTY INSERTION DETAILS</h3>
                       
                        <form class="requires-validation" novalidate>

                            <div class="col-md-12">
                            <label>Name </label>
                            <select name="name" class="form-control" required>
                                <option value="" disabled selected>Name</option>
                                   <?php
                                       require_once '../../configuration.php';
                                           $sql = "SELECT * FROM faculty_details where first_dose = ' ' ";
                                           $result=mysqli_query($conn,$sql);
                                           if(!$result)
                                           {
                                               echo "Error ".$sql."<br>".mysqli_error($conn);
                                           }
                                           while($row = mysqli_fetch_assoc($result)) {
                                               ?>
                                              <option class="names" value="<?php echo $row['name'];?>" >
                                              <?php echo $row['name'] ; ?>
                                              </option>
                                           <?php 
                                           } 
                                    ?>
                            </select>
                           </div>   

                           <div class = "col-md-12">
                           <label>First dose date </label>
                                <input type="date" id="first" name="first">
                            </div>  
                            
                        
                            <div class="form-button mt-3">
                            &emsp;<button id="submit" type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>