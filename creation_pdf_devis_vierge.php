<link rel="stylesheet" href="css/style_police.css">
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
$from = $_GET['from'];

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

$ligne1 = 72;
$ligne2 = 77;
$ligne3 = 82;
$ligne4 = 87;
$ligne5 = 92;

for ($j=1;$j<=$pagecount;$j++){
    $tplidx = $pdf->importPage($j);
    $pdf->addPage();
    $pdf->useTemplate($tplidx, 0, 0, 0, 0, true);
    $pdf->SetAutoPageBreak(TRUE, 0);

    if ($j==1){  
        $pdf->Image($chemin_logo,10,20,40,40);
        $pdf->AddFont('Montserrat','','Montserrat-Medium.php');
        $pdf->AddFont('MontserratBold','','Montserrat-Bold.php');
        $pdf->AddFont('MontserratLight','','Montserrat-ExtraLight.php');
        $pdf->SetFont('Montserrat');
        $pdf->SetFontSize(11);

        $pdf->SetXY(10,62);
        $pdf->MultiCell(50,5,utf8_decode($nom),0,'L','L',0);
        $pdf->SetXY(10,67);
        $pdf->MultiCell(50,5,utf8_decode($adresse),0,'L','L',0);

        if($complement != ""){
            $pdf->SetXY(10,72);
            $pdf->MultiCell(50,5,utf8_decode($complement),0,'L','L',0);
            $ligne1 = 77;
            $ligne2 = 82;
            $ligne3 = 87;
            $ligne4 = 92;
            $ligne5 = 97;
        }

        $pdf->SetXY(10,$ligne1);
        $pdf->MultiCell(50,5,utf8_decode($cp." ".$ville),0,'L','L',0);

        $pdf->SetXY(10,$ligne2);
        $pdf->MultiCell(50,5,utf8_decode($pays),0,'L','L',0);

        $pdf->SetXY(10,$ligne3);
        $pdf->MultiCell(50,5,utf8_decode($tel),0,'L','L',0);

        $pdf->SetXY(10,$ligne4);
        $pdf->MultiCell(55,5,utf8_decode($mail),0,'L','L',0);

        $pdf->SetXY(10,$ligne5);
        $pdf->MultiCell(50,5,utf8_decode("N° SIRET : ".$siret),0,'L','L',0);

        if($from == 1){
            $pdf->SetFont('MontserratBold');
            $pdf->SetFontSize(13);
            $pdf->SetXY(100,40);
            $pdf->MultiCell(90,5,utf8_decode("Titre de votre devis"),0,'L','L',0);

            $pdf->SetFont('Montserrat');
            $pdf->SetFontSize(11);

            $pdf->SetXY(130,62);
            $pdf->MultiCell(90,5,utf8_decode("Nom de votre client"),0,'L','L',0);

            $pdf->SetXY(130,67);
            $pdf->MultiCell(90,5,utf8_decode("Adresse de votre client"),0,'L','L',0);

            $pdf->SetXY(130,72);
            $pdf->MultiCell(90,5,utf8_decode("Complement de votre client"),0,'L','L',0);

            $pdf->SetXY(130,77);
            $pdf->MultiCell(90,5,utf8_decode("Ville et code postal de votre client"),0,'L','L',0);

            $pdf->SetXY(130,82);
            $pdf->MultiCell(90,5,utf8_decode("Pays de votre client"),0,'L','L',0);

            $pdf->SetXY(130,87);
            $pdf->MultiCell(90,5,utf8_decode("Téléphone de votre client"),0,'L','L',0);

            $pdf->SetXY(130,92);
            $pdf->MultiCell(90,5,utf8_decode("Mail de votre client"),0,'L','L',0);

            $pdf->SetXY(10,120);
            $pdf->MultiCell(90,5,utf8_decode("Numéro de devis"),0,'L','L',0);

            $pdf->SetFont('MontserratLight');
            $pdf->SetFontSize(10);

            $pdf->SetXY(10,130);
            $pdf->MultiCell(90,5,utf8_decode("Date du devis"),0,'L','L',0);
        }
    }                       
}


$fichier='pdf/devis.pdf';
$pdf->Output($fichier,'F'); 

$path = $fichier;
header("Location: download.php?path=$path");

?>