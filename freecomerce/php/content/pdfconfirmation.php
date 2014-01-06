<?php
/**
* Generates a pdf confirmation with the fpdf library
* 
* @lants1
*/
require("../lib/fpdf17/fpdf.php");

//Task 11 Rest Service Aufruf für Bitcoins inklusive Parsen der JSON Response...
include_once '../helperservices/bitcoinRestClient.php';

// Task 12.4 Pdf Bestellbestätigung generieren...
$pdf=new FPDF();
$pdf->AddPage();
$title='Order confirmation';
$pdf->SetTitle($title);
$pdf->SetFont("Arial","B",16);
$pdf->Cell(40,10,"Order confirmation:");
$pdf->Ln(10);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(40,10,"Aktueller Bitcoin/CHF Wechselkurs: ".$jsonresponse["localbitcoins"]["rates"]["ask"]);
$pdf->Output();

?>