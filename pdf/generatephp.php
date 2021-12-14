<?php
require_once('TCPDF/tcpdf.php');

class PDF extends TCPDF {

    //Page header
    public function Header() {
        // Logo
      /*  $imageFile = K_PATH_IMAGES.'icon.png';
        $this->Image($imageFile, 10, 10, 15, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);*/
        $this->LN(5);
        $this->SetFont('helvetica', 'B', 20);
        $this->Cell(189, 5, 'RTPCR REPORT', 0, 1, 'C');
          $this->SetFont('helvetica', '', 8);
            $this->Cell(189, 5, 'RTPCR Report By Covid Intellecta', 0, 1, 'C');
            $this->Cell(189, 5, 'Government Of India Intiative', 0, 1, 'C');
            $this->Cell(189, 5, 'Toll-Free Number-1800 803 205', 0, 1, 'C');
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-149);
        $this->LN(5);
        $this->SetFont('times', 'B', 10);
        $this->MultiCell(189,15,'This Certificate Is legally Valid Through Out yhe Country.Authenticity of the Certificate Can Be verified at Covid Intellecta Website');
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
        date_default_timezone_set("Asian/Dhaka")
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

// set text shadow effect
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));



// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('example_001.pdf', 'I');

?>
