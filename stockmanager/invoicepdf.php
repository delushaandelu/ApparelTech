<?php
require("pdf/fpdf.php");
//require "dbcon/DBcon.php";
if(isset($_POST["submit"]))
{
$invoiceno=$_POST['invoiceno'];
$invoicedate=$_POST['invoicedate'];
$duedate=$_POST['duedate'];
$cusname=$_POST['customer'];
    
    

$pdf=new FPDF();
$pdf->AddPage();

$pdf->SetFont("Arial","",10); 
$pdf->Cell(0,5,"Invoice",0,1,'C');
    
$pdf->Cell(50,10,"Invoice No",1,0);    
$pdf->Cell(50,10,$invoiceno,1,0);
    
$pdf->Cell(50,10,"Invoice Date",1,0);
$pdf->Cell(50,10,$invoicedate,1,1);
    
$pdf->Cell(50,10,"Due Date",1,0);
$pdf->Cell(50,10,$duedate,1,0);   
        
$pdf->Cell(50,10,"Name",1,0);
$pdf->Cell(50,10,"$cusname",1,1);
    
$pdf->output();



}


?>