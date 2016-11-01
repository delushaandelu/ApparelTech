<?php
    require_once(tcpdf/config/lang/eng.php);
    require_once(tcpdf/tcpdf.php);

    //create a new pdf
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION,PDF_UNIT,PDF_PAGE_FORMAT,true,'UTF-8',false);

    //set header and footer
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '' , PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '' , PDF_FONT_SIZE_DATA));

    //set default monospaced font
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

    //set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT,PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    //set auto page break
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

    //set image scale factor
    //$pdf->setImageScale->(PDF_IMAGE_SCALE_RATIO);

    //set some language dependent string
    //$pdf->setLanguageArray($1);

    //set font
    $pdf->SetFont('helvetica', 'B', 20);

    //add a page
    $pdf->AddPage();
    $pdf->Write(0, 'supplier Details', '', 0, 'L', true, 0, false, false, 0);
    $pdf->SetFont('helvetica', '', 8);
    $pdf->SetCreator(PDF_CREATOR);
    $tbl = '
    <table cellspacing="0" cellpadding="1" border="1">
    <thead>
    <tr>
        <th scope="col" width=35% style="text-align:left">Supplier ID</th>
        <th scope="col" width=35% style="text-align:left">Name</th>
        <th scope="col" width=35% style="text-align:left">E mail</th>
        <th scope="col" width=35% style="text-align:left">Address</th>
        <th scope="col" width=35% style="text-align:left">Location</th>
        <th scope="col" width=35% style="text-align:left">Tele number</th>
        <th scope="col" width=35% style="text-align:left">Tele number</th>
    </tr>
    </thead>
    </table>';

    $pdf->writeHTML($table,true,false,false,false,'');
    $pdf->Output("supplier.pdf");


?>