<?php

include "database.php";

$nom = $_GET['nom'];
$tel = $_GET['tel'];
$mail = $_GET['mail'];
$adresse = $_GET['adresse'];
$cp = $_GET['cp'];
$complement = $_GET['complement'];
$ville = $_GET['ville'];
$pays = $_GET['pays'];
$siret = $_GET['siret'];

$pdf = $bdd->query('SELECT * FROM `image_devis` WHERE id = 1');
$p = $pdf->fetch();

$chemin_logo = 'img/logo/'.$p['nom_fichier'].'.jpg';

require_once('fpdf/fpdi.php');
define('FPDF_FONTPATH','fpdf/font/');


// initiate FPDI
$pdf = new FPDI('P','mm','A4');

define('devise',chr(128));

$fichier_pdf = "pdf/devis_vierge.pdf";
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
                           
    $pdf->Image($chemin_logo,100,100,30,30);
    $pdf->SetXY(27,94);
    $pdf->MultiCell(50,5,utf8_decode($nom),0,'L','L',0);
   
    }           
                          
}


$fichier='pdf/devis.pdf';
$pdf->Output($fichier,'F'); 

$path = $fichier;
header("Location: download.php?path=$path");

?>