<?php
require("pdf/fpdf.php");
//require "dbcon/DBcon.php";



$pdf=new FPDF();
$pdf->AddPage();

$pdf->output();






?>