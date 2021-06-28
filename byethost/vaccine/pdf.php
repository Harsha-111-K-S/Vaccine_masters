<?php

if(!empty($_POST['ack']))
{
  $USN= $_POST['usn'];
  $NAME= $_POST['name'];
  $DEP= $_POST['department'];
  $SEM= $_POST['semester'];
   $firstdose = date('d-m-Y',strtotime($_POST['date']));
   $secdose = date('d-m-Y',strtotime($firstdose. '+28days'));
    $TIME= $_POST['time'];
   $EMAIL_ID= $_POST['email_id'];
   
  require("fpdf182/fpdf.php");
  
  $pdf = new FPDF();
   $pdf->AddPage();
   
   $pdf->Image("Images/canvas6.jpeg",12,12,30);
   $pdf->SetFont("Arial","B",16);
   $pdf->Cell(0,12,"Registration Details",1,1,'C');
    $pdf->Cell(60,10,"USN",1,0);
   $pdf->Cell(130,10,$USN,1,1);
   
   $pdf->Cell(60,10,"NAME",1,0);
    $pdf->Cell(130,10,$NAME,1,1);
   
   $pdf->Cell(60,10,"DEPARTMENT",1,0);
   $pdf->Cell(130,10,$DEP,1,1);
   
    $pdf->Cell(60,10,"SEMESTER",1,0);
	 $pdf->Cell(130,10,$SEM,1,1);
	
   
	$pdf->Cell(60,10,"FIRSTDOSE_DATE",1,0);
	$pdf->Cell(130,10,$firstdose,1,1);
	 
	$pdf->Cell(60,10,"SECONDDOSE_DATE",1,0);
	$pdf->Cell(130,10,$secdose,1,1);
	
	
	
	$pdf->Cell(60,10,"TIME",1,0);
	 $pdf->Cell(130,10,$TIME,1,1);
	
	$pdf->Cell(60,10,"EMAIL_ID",1,0);
	 $pdf->Cell(130,10,$EMAIL_ID,1,1);
   
   
	 $pdf->output();
  
  
  
}
?>
  
  

