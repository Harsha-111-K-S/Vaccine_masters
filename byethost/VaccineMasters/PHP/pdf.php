<?php 

if(isset($_POST['ack'])){
    $name = $_POST['name'];
    $email = $_POST['email']; 
    $age = $_POST['age'];
    $dept = $_POST['dept'];  
    $firstdose = date('d-m-Y',strtotime($_POST['firstdose']));
    $secdose = date('d-m-Y',strtotime($firstdose. ' + 28 days'));
    $time = $_POST['time'];  
   
    require("fpdf183/fpdf.php");

    $pdf = new FPDF();
    $pdf->AddPage();

    $pdf->SetFont("Arial","B",16);
    $pdf->Image('../Images/logo.jpeg',10,10,30);
    $pdf->Cell(138,12,"Booking Details",1,1,'C');
    

    $pdf->Cell(38,10,"Name",1,0);
    $pdf->Cell(100,10,$name,1,1);
    $pdf->Cell(38,10,"Email",1,0);
    $pdf->Cell(100,10,$email,1,1);
    $pdf->Cell(38,10,"Age",1,0);
    $pdf->Cell(100,10,$age,1,1);
    $pdf->Cell(38,10,"Department",1,0);
    $pdf->Cell(100,10,$dept,1,1);
    $pdf->Cell(38,10,"First dose",1,0);
    $pdf->Cell(100,10,$firstdose,1,1);
    $pdf->Cell(38,10,"Second dose",1,0);
    $pdf->Cell(100,10,$secdose,1,1);
    $pdf->Cell(38,10,"Time",1,0);
    $pdf->Cell(100,10,$time,1,1);

   
    $pdf->output();
}

?>