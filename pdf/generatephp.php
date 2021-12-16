<?php
require_once('TCPDF/tcpdf.php');
require_once('../includes/dbh.php');




class PDF extends TCPDF {

    //Page header
     public function Header() {
        // Logo
      /*$imageFile = K_PATH_IMAGES.'icon.png';
        $this->Image($imageFile, 10, 10, 15, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);*/
        $this->setImageScale(PDF_IMAGE_SCALE_RATIO);
        $html= '<div><img src="icon.png" width="185" height="50" /><br></div>';
        $this->writeHTML($html, true, false, true, false, '');

      //  $this->LN(5);
        $this->SetFont('helvetica', 'B', 20);
          $this->SetTextColor(118, 21, 21);
        $this->Cell(168, 5, 'RTPCR REPORT', 0, 1, 'C');
          $this->SetFont('helvetica', '', 8);
            $this->Cell(168, 5, 'RTPCR Report By Covid Intellecta', 0, 1, 'C');
            $this->Cell(168, 5, 'Government Of India Intiative', 0, 1, 'C');
            $this->Cell(168, 5, 'Toll-Free Number-1800 803 205', 0, 1, 'C');
                    $this->LN(8);
            $this->writeHTML("<hr>", true, false, false, false,'');
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-180);
        $this->LN(5);
        $this->SetFont('times', 'B', 10);
        $this->MultiCell(189,15,'This Certificate Is legally Valid Through Out The Country.Authenticity of the Certificate Can Be verified at Covid Intellecta Website');

          $this->SetX(160);
        $this->cell(50,5,'Certfied By',0,0,'L',0);
        $this->LN(8);
          $this->SetX(160);
        $this->cell(50,5,'Arun Baby',0,0,'L',0);
        $this->LN(9);
          $this->SetX(160);
        $this->cell(50,5,'WHO President',0,0,'L',0);


        // Set font
        $this->SetFont('helvetica', 'I', 8);


    }
  }

$pdf = new PDF('p', 'mm', 'A4', true, 'UTF-8', false);

$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('CovidIntellecta');
$pdf->SetTitle('RTPCR_report');
$pdf->SetSubject('report');
$pdf->SetKeywords('TCPDF, PDF, RTPCR, test, result');
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
$pdf->setFooterData(array(0,64,0), array(0,64,128));
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
$pdf->setFooterData(array(0,64,0), array(0,64,128));
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
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

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 14, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();
/*$selectdata="SELECT name,address,adhaarno,status from activebooking where bookingid='" . $_GET['id'] . "'";
$query=mysqli_query($conn,$selectdata);
while($select=mysqli_fetch_array($query));
{
  $name=$select['name'];
  $add=$select['address'];
  $aadhar=$select['adhaarno'];
  $status=$select['status'];
}*/

$sql="SELECT * from activebooking where bookingid='" . $_GET['id'] . "'";

$result=mysqli_query($conn, $sql);
 $resultCheck = mysqli_num_rows($result);


if($resultCheck > 0)
    {
       while($row = mysqli_fetch_assoc($result))
          {
            $name=$row['name'];
            $add=$row['address'];
            $aadhar=$row['adhaarno'];
            $status=$row['status'];
            $resultd=$row['testresult'];


$pdf->LN(20);
$pdf->SetXY(60,60);
$pdf->SetFillColor(224,235,255);
  $pdf->SetFont('times','',10);
$pdf->cell(50,5,'NAME:',0,0,'L',0);
$pdf->cell(80,5,$name,0,0,'L',0);
$pdf->LN(21);
$pdf->SetXY(60,70);
$pdf->cell(50,15,'ADDRESS',0,0,'L',0);
$pdf->cell(50,15,$add,0,0,'L',0);
$pdf->LN(22);
$pdf->SetXY(60,90);
$pdf->cell(50,5,'AADHAR NUMBER',0,0,'L',0);
$pdf->cell(80,5,$aadhar,0,0,'L',0);
$pdf->LN(23);
$pdf->SetXY(60,100);
$pdf->cell(50,5,'STATUS',0,0,'L',0);
$pdf->cell(80,5,$status,0,0,'L',0);
$pdf->LN(24);
$pdf->SetXY(60,110);
$pdf->cell(50,5,'RESULT',0,0,'L',0);
$pdf->cell(80,5,$resultd,0,0,'L',0);



   $pdf->image('http://localhost/covidintellecta/pdf/qr.php?id='.$_GET["id"].'',80,165,60,60,"png");


}
}

// set text shadow effect
//$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));



// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.


$pdf->Output('example_001.pdf', 'I');

?>
