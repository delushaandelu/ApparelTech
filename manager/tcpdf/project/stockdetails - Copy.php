<?php

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

// extend TCPF with custom functions
class MYPDF extends TCPDF {
    public function LoadData($file) {
		// Read file lines
		$lines = file($file);
		$data = array();
		foreach($lines as $line) {
			$data[] = explode(';', chop($line));
		}
		return $data;
	}

  public function Footer() {
        $this->SetY(-15);
        $this->SetFont('helvetica', 'I', 8);
        // Setting Date ( I have set the date here )
        $tDate = date("F j, Y, g:i a");
        $this->Cell(0, 10, 'Date : '.$tDate, 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}
    
// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);

$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, false.'               PRIYANTHA ENTERPRISES');

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// set font
$pdf->SetFont('freesans', '', 14);

// add a page
$pdf->AddPage();

$html = <<<EOF
<h5> Stock Details <\h5>
<html >
<head>
  <meta charset="UTF-8">
  <title>Animated chart with jQuery</title>
  
  
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css"/>
      <link rel="stylesheet" href="css/style.css">

  
</head>
<style>
  #contenitore{
position: relative;
width: 1000px;
margin: 20px auto;
text-align:center;
overflow:hidden;
font: 14px 'Trebuchet MS', sans serif;
}
.left{
float:left;
width:48%;
}
#grafico{
position:relative;
height:500px;
border-left:2px solid #000000;
border-bottom: 2px solid #000000;
width:40%;
margin-top:20px;
}
.riga{
position:absolute;
left:0;
height: 1px;
background-color:gray;
width: 100%;
}
.riga div{
float:left;
margin: -8px 0 0 -40px;
}
.canc{
clear:both;
}
table{
width:60%;
background-color: white;
color: #000;
margin: 1em auto;
}
table caption{
background-color: #D8EED8;
color: #004156;
text-align: left;
}
table tr:nth-child(2n){
background-color: #D8EED8;
}
table tr:nth-child(2n+1){
background-color: #BFDFFF;
}
table td{
text-align:center;
border-bottom: 1px solid #CDCDCD;
padding: 6px;
}
.column{
position:absolute;
width: 5%;
bottom: 0;
background-color: #003366;
margin-left:5%;
}
div.button {
    margin: 0 auto;
    text-align: center;
    width: 100px;
    background-color:#003366;
    border: 1px solid #003366;
    border-radius: 5px;
    padding: 8px;
    color: #E1E2CF;
    cursor: pointer;
}
.column div{
margin-top:-20px;
height:20px;
}
</style>
<script>
  function viewGraph(){
$('.column').css('height','0');
$('table tr').each(function(index) {
var ha = $(this).children('td').eq(1).text();
$('#col'+index).animate({height: ha}, 1500).html("<div>"+ha+"</div>");
});
}
$(document).ready(function(){
viewGraph();
});
</script>

<body>
  <div id="contenitore">
<div class="left">
<?php
require("database_connection.php");     
    
?>
<table>
<caption>Date table</caption>    
<?php 
    $sql = "select itemName,stockQty from item ";
    $result = mysqli_query($dbcon,$sql);        
    while($row = mysqli_fetch_array($result)) {
    
?>

<tbody>
<tr><td><?php echo $row['itemName'] ?></td><td><?php echo ($row['stockQty']/10) ?></td><td style="background-color:#336699">&nbsp;</td></tr>

</tbody><?php } ?></table>
<div class="button" onclick="viewGraph()">Return</div>
</div>
<div class="left">
<div id="grafico">
<div class="riga" style="top:25%"><div>75%</div></div>
<div class="riga" style="top:50%"><div>50%</div></div>
<div class="riga" style="top:75%"><div>25%</div></div>
<?php
    
    $sql1="SELECT item_id FROM item";
    $result1=mysqli_query($dbcon,$sql1);
    $num_row=mysqli_num_rows($result1);
   
    for( $i=0;$i<$num_row;$i++){
        while ($i<$num_row){
            
            ?><div id='col<?php echo $i;?>' style=left:<?php echo ($i *20)?>%; background-color:#336699; class='column'></div>
            <?php 
            $i++;
        }
       
    }
?>
<!--
<div id='col0' style=left:0; background-color:#336699; class='column'></div>
<div id='col1' style=left:10%; background-color:#336699; class='column'></div>
<div id='col2' style=left:20%; background-color:#336699; class='column'></div>
<div id='col3' style=left:30%; background-color:#336699; class='column'></div>
-->

</div>
</div>
<div class="canc"></div>
<div style="margin: 20px auto; text-align:center;">quellidelcucuzzolo.blogspot.com</div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

    
    <div class="ui animated button" tabindex="0">
  <div class="visible content">Next</div>
  <div class="hidden content">
    <i class="right arrow icon"></i>
  </div>
</div>
</body>
</html>


EOF;

$pdf->writeHTML($html, true, false, true, false, '');

// Print text using writeHTMLCell()
$pdf->writeHTML($tbl_header . $tbl . $tbl_footer, true, false, false, false, '');

// close and output PDF document
$pdf->Output('stockdetails.pdf', 'I');