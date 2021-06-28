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
<?php require_once 'header.php';
          require_once 'FacultyBookingHelper.php';
          $facultyHelper = new FacultyBookingHelper(); ?>
    <form name = "facultyInsertionForm" method="post" action = "Insertion.php">
<div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>FACULTY BOOKING DETAILS</h3>
                        <p>Fill in the data below.</p>
                        <form class="requires-validation" novalidate>

                            <div class="col-md-12">
                               <label>Name </label>
                               <input class="form-control" type="text" name="name" placeholder="Full Name" value = "<?php echo $facultyHelper->getName();?>" required>
                               <div class="valid-feedback">Username field is valid!</div>
                               <div class="invalid-feedback">Username field cannot be blank!</div>
                            </div>

                            <div class="col-md-12">
                            <label>Email </label>
                                <input class="form-control" type="email" name="email" placeholder="E-mail Address" value = "<?php echo $facultyHelper->getEmail();?>" required>
                                 <div class="valid-feedback">Email field is valid!</div>
                                 <div class="invalid-feedback">Email field cannot be blank!</div>
                            </div>

                           
                            <div class="col-md-12">
                            <label>Age </label>
                              <input class="form-control" type="age" name="age" placeholder="Age" value = "<?php echo $facultyHelper->getAge();?>" required>
                               <div class="valid-feedback">Password field is valid!</div>
                               <div class="invalid-feedback">Password field cannot be blank!</div>
                           </div>

                           <div class="col-md-12">
                           <label>Department </label>
                                <select class="form-select mt-3" name = "dept" required>
                                    
                                      <option selected disabled value=""></option>
                                      <option value="CSE" <?php echo $facultyHelper->isDeptSelected('CSE'); ?>>CSE</option>
                                      <option value="ISE" <?php echo $facultyHelper->isDeptSelected('ISE'); ?>>ISE</option>
                                      <option value="ECE" <?php echo $facultyHelper->isDeptSelected('ECE'); ?>>ECE</option>
                                      <option value="MECH" <?php echo $facultyHelper->isDeptSelected('MECH'); ?>>MECH</option>
                                      <option value="CIV" <?php echo $facultyHelper->isDeptSelected('CIV'); ?>>CIV</option>
                                      <option value="ADMISSION" <?php echo $facultyHelper->isDeptSelected('ADMISSION'); ?>>ADMISSION</option>      
                               </select>
                           </div>


                           <div class = "col-md-12">
                           <label>Date </label>
                                <input type="date" id="firstdose" name="firstdose" value = "<?php echo $facultyHelper->getFirstDose();?>">
                            </div>    

                           <div class="col-md-12">
                           <label>Slot </label>
                                <select class="form-select mt-3" name = "time" required>
                                    
                                      <option selected disabled value=""></option>
                                      <option value="9AM - 10AM" <?php echo $facultyHelper->isTimeSelected('9AM - 10AM');?>>9AM - 10AM</option>
                                      <option value="10AM - 11AM" <?php echo $facultyHelper->isTimeSelected('10AM - 11AM');?>>10AM - 11AM</option>
                                      <option value="11AM - 12PM" <?php echo $facultyHelper->isTimeSelected('11AM - 12PM');?>>11AM - 12PM </option>
                                      <option value="12PM - 1PM"  <?php echo $facultyHelper->isTimeSelected('12PM - 1PM');?>>12PM - 1PM </option>
                                      <option value="1PM - 2PM"  <?php echo $facultyHelper->isTimeSelected('1PM - 2PM');?>>1PM - 2PM</option>
                                      <option value="2PM - 3PM"  <?php echo $facultyHelper->isTimeSelected('2PM - 3PM');?>>2PM - 3PM</option>
                                      <option value="3PM - 4PM"  <?php echo $facultyHelper->isTimeSelected('3PM - 4PM');?>>3PM - 4PM</option>
                                      <option value="4PM - 5PM"  <?php echo $facultyHelper->isTimeSelected('4PM - 5PM');?>>4PM - 5PM</option>
                               </select>
                           </div>

                            <div class="form-button mt-3">
                            &emsp;<button id="submit" name = "submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>

                            <div class="form-button mt-3">
                            &emsp;<button id="ack" name = "ack" type="submit" formaction = "pdf.php" class="btn btn-primary">Download Acknowledgement</button>
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