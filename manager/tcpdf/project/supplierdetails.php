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

	
    
	// Load table data from file
	//public function LoadData($file) {
		
		//$data = array();
		//foreach($lines as $line) {
			//$data[] = explode(';', chop($line));
		//}
		//return $data;
	}
    
	// Colored table
    

		//}
 

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);



// set document information
$pdf->SetCreator(PDF_CREATOR);
//$pdf->SetAuthor('PRIYANTHA ENTERPRISES');
//$pdf->SetTitle('Supplier details');
//$pdf->SetSubject('Supplier Details');
//$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

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
$pdf->SetFont('helvetica', '', 12);

// add a page
$pdf->AddPage();



// column titles
$header = array('Supplier ID', 'Name', 'Email', 'Address', 'Location', 'tele', 'Mobile');

//data loading
//$data = $pdf->LoadData('data/table_data_demo.txt');

//print colored table
//$pdf->ColoredTable($header, $data);

// Set some content to print
$tbl_header = '<table border="1">';
$tbl_footer = '</table>';
$tbl ='';
$con=mysqli_connect("ap-cdbr-azure-east-c.cloudapp.net","bbff2134fa7f9a","68d089ed","appareltech");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$result = mysqli_query($con,"SELECT * FROM supplier");
while($row = mysqli_fetch_array($result))
  {
  $id = $row['supplier_id'];
  $name = $row['sname'];
  $mail = $row['email'];
  $add = $row['address'];
  $loc = $row['location'];
  $tele = $row['tele'];
  $mobi = $row['mobile'];
$tbl .= '<tr><td>'.$id.'</td><td>'.$name.'</td><td>'.$mail.'</td><td>'.$add.'</td><td>'.$loc.'</td><td>'.$tele.'</td><td>'.$mobi.'</td></tr>';
}
// Print text using writeHTMLCell()
$pdf->writeHTML($tbl_header . $tbl . $tbl_footer, true, false, false, false, '');

// ---------------------------------------------------------

// close and output PDF document
$pdf->Output('supplierdetails.pdf', 'I');
