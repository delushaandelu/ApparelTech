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

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', '', 14);

// add a page
$pdf->AddPage();



// column titles
$header = array('Supplier ID', 'Name', 'Email', 'Address', 'Location', 'tele', 'Mobile');

// Set some content to print
$tbl_header = '<table border="1">';
$tbl_footer = '</table>';
$tbl ='';
$iid = 'ID';
$iname = 'Name';
$bprice = 'Buying price';
$sprice = 'Selling price';
$brnd = 'Brand';
$cat = 'Category';
$sqty = 'Stock Qty';
$tbl .= '<tr><th><h6 align="center">'.$iid.'</h6></th><th><h6 align="center">'.$iname.'</h6></th><th><h6 align="center">'.$bprice.'</h6></th><th><h6 align="center">'.$sprice.'</h6></th><th><h6 align="center">'.$brnd.'</h6></th><th><h6 align="center">'.$cat.'</h6></th><th><h6 align="center">'.$sqty.'</h6></th></tr>';
$con=mysqli_connect("ap-cdbr-azure-east-c.cloudapp.net","bbff2134fa7f9a","68d089ed","appareltech");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  //query
$result = mysqli_query($con,"SELECT * FROM item");

while($row = mysqli_fetch_array($result))
  {
  $id = $row['item_id'];
  $name = $row['itemName'];
  $bprc = $row['buyingPrice'];
  $sprc = $row['sellingPrice'];
  $brand = $row['brand'];
  $catagery = $row['catagery'];
  $qty = $row['stockQty'];
  
$tbl .= '<tr><td><h6 align="center">'.$id.'</h6></td><td><h6 align="center">'.$name.'</h6></td><td><h6 align="center">'.$bprc.'</h6></td><td><h6 align="center">'.$sprc.'</h6></td><td><h6 align="center">'.$brand.'</h6></td><td><h6 align="center">'.$catagery.'</h6></td><td><h6 align="center">'.$qty.'</h6></td></tr>';
}
// Print text using writeHTMLCell()
$pdf->writeHTML($tbl_header . $tbl . $tbl_footer, true, false, false, false, '');

// ---------------------------------------------------------

// close and output PDF document
$pdf->Output('stockdetails.pdf', 'I');
