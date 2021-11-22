<?php

include "database.php";

$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$mail = $_GET['mail'];
$adresse = $_GET['adresse'];
$cp = $_GET['cp'];
$complement = $_GET['complement'];
$ville = $_GET['ville'];
$pays = $_GET['pays'];
$tel = $_GET['tel'];


require_once('fpdf/fpdi.php');
define('FPDF_FONTPATH','fpdf/font/');


// initiate FPDI
$pdf = new FPDI('P','mm','A4');

define('devise',chr(128));

$fichier_pdf = "pdf/devis.pdf";
//echo $fichier_pdf;
//echo "</br>";
$pagecount = $pdf->setSourceFile($fichier_pdf);
//echo $pagecount;


for ($j=1;$j<=$pagecount;$j++)
{
   $tplidx = $pdf->importPage($j);
   $pdf->addPage();
   $pdf->useTemplate($tplidx, 0, 0, 0, 0, true);
   $pdf->SetAutoPageBreak(TRUE, 0);
   if ($j==1){
    $pdf->SetFont('Arial');
    $pdf->SetFontSize(11);
                           
    $pdf->SetXY(27,94);
    $pdf->MultiCell(50,5,utf8_decode($nom),0,'L','L',0);
   
    }           
                          
}


$fichier='pdf/pdf-generer/devis-'.substr(time(),3,8).'.pdf';
$pdf->Output($fichier,'F'); 

$nom_fichier = "devis-".substr(time(),3,8);
$date = date("Y-m-d H:i:s");

$insertpdf = $bdd->prepare("INSERT INTO devis(nom_devis, nom, prenom, date_devis) VALUES(?, ?, ?, ?)");
$insertpdf->execute(array($nom_fichier, $nom, $prenom, $date));

$path = $fichier;
header("Location: download.php?path=$path");

?>