<?php
/**
* Generates a pdf confirmation with the fpdf library
* 
* @lants1
*/
// Alle Klassen laden.
include_once ('../helperservices/loadclasses.php');
session_start();
// PDF lib
require("../lib/fpdf17/fpdf.php");
include_once ('../constants.php');
//Task 11 Rest Service Aufruf für Bitcoins inklusive Parsen der JSON Response...
include_once '../helperservices/bitcoinRestClient.php';

// Formparameter hohlen...
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$paymethod = $_GET['paymethod'];

// Task 12.4 Pdf Bestellbestätigung generieren...
$pdf=new FPDF();
$pdf->AddPage();
$title='Order confirmation';
$pdf->SetTitle($title);
$pdf->SetFont("Arial","B",16);
$pdf->Cell(40,10,"Order confirmation: ".$firstname.", ".$lastname);
$pdf->SetFont("Arial","B",12);

// Alle Produkte ausgeben...
if (isset ( $_SESSION ['chart'] )) {
	$cart = $_SESSION ['chart'];
	$pdf->Ln(20);
	$pdf->Cell(40,10,"Bestellte Produkte");
	$pdf->Ln(10);
	foreach ( $cart->getProducts () as $product_id ) {
		foreach ( $products as $product ) {
			if ($product_id == $product ['product_id']) {
			$pdf->Cell(40,10,"      - ".$product['name']." -> ".$product['preis']." CHF");
			$pdf->Ln(5);
			}
		}
	}
}
$pdf->Ln(10);
$pdf->SetFont("Arial","I",12);
// Bitcoint Wechselkurs Rest Service abfragen
$pdf->Cell(40,10,"Aktueller Bitcoin/CHF Wechselkurs: ".$jsonresponse["localbitcoins"]["rates"]["ask"]);
$pdf->Ln(10);
$pdf->Cell(40,10,"Ihre Bezahlmethode ist allerdings: ".$paymethod);
$pdf->Output();

?>