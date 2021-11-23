<link rel="stylesheet" href="css/style_police.css">
<?php

include "database.php";

$from = $_GET['from'];

if($from == 1){
    $nom_entreprise = $_GET['nom'];
    $tel_entreprise = $_GET['tel'];
    $mail_entreprise = $_GET['mail'];
    $adresse_entreprise = $_GET['adresse'];
    $cp_entreprise = $_GET['cp'];
    $complement_entreprise = $_GET['complement'];
    $ville_entreprise = $_GET['ville'];
    $pays_entreprise = $_GET['pays'];
    $siret_entreprise = $_GET['siret'];
}

$pdf = $bdd->query('SELECT * FROM `image_devis` WHERE id = 1');
$p = $pdf->fetch();

$chemin_logo = 'img/logo/'.$p['nom_fichier'].'.jpg';

if($from == 0){
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
    $tel = $_GET['tel'];
    $mail = $_GET['mail'];
    $adresse = $_GET['adresse'];
    $cp = $_GET['cp'];
    $complement = $_GET['complement'];
    $ville = $_GET['ville'];
    $pays = $_GET['pays'];
    $desingation = $_GET['designation'];
    $quantite = $_GET['quantite'];
    $puvente = $_GET['puvente'];
    $titre = $_GET['titre'];

    $nom_entreprise = $p['nom_entreprise'];
    $tel_entreprise = $p['tel_entreprise'];
    $mail_entreprise = $p['mail_entreprise'];
    $adresse_entreprise = $p['adresse_entreprise'];
    $cp_entreprise = $p['cp_entreprise'];
    $complement_entreprise = $p['complement_entreprise'];
    $ville_entreprise = $p['ville_entreprise'];
    $pays_entreprise = $p['pays_entreprise'];
    $siret_entreprise = $p['siret_entreprise'];
}

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

$ligne1_client = 72;
$ligne2_client = 77;
$ligne3_client = 82;
$ligne4_client = 87;

$today = date("D M j Y");
$explode_today = explode(" ", $today);

include "trad_date.php";

$dateauj = $jour." ".$explode_today[2]." ".$mois." ".$explode_today[3];

$montantht = $puvente * $quantite;
$montantttc = $montantht * 1.2;
$tva = $montantttc - $montantht;

$nom_fichier = "Devis-".substr(time(),3,8);

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

        $pdf->SetFont('MontserratBold');
        $pdf->SetFontSize(11);

        $pdf->SetXY(10,62);
        $pdf->MultiCell(90,5,utf8_decode($nom_entreprise),0,'L','L',0);

        $pdf->SetFont('Montserrat');
        $pdf->SetFontSize(11);

        $pdf->SetXY(10,67);
        $pdf->MultiCell(90,5,utf8_decode($adresse_entreprise),0,'L','L',0);

        if($complement_entreprise != ""){
            $pdf->SetXY(10,72);
            $pdf->MultiCell(90,5,utf8_decode($complement_entreprise),0,'L','L',0);
            $ligne1 = 77;
            $ligne2 = 82;
            $ligne3 = 87;
            $ligne4 = 92;
            $ligne5 = 97;
        }

        $pdf->SetXY(10,$ligne1);
        $pdf->MultiCell(90,5,utf8_decode($cp_entreprise." ".$ville_entreprise),0,'L','L',0);

        $pdf->SetXY(10,$ligne2);
        $pdf->MultiCell(90,5,utf8_decode($pays_entreprise),0,'L','L',0);

        $pdf->SetXY(10,$ligne3);
        $pdf->MultiCell(90,5,utf8_decode($tel_entreprise),0,'L','L',0);

        $pdf->SetXY(10,$ligne4);
        $pdf->MultiCell(90,5,utf8_decode($mail_entreprise),0,'L','L',0);

        $pdf->SetXY(10,$ligne5);
        $pdf->MultiCell(90,5,utf8_decode("N° SIRET : ".$siret_entreprise),0,'L','L',0);

        if($from == 1){
            $pdf->SetFont('MontserratBold');
            $pdf->SetFontSize(13);
            $pdf->SetXY(100,40);
            $pdf->MultiCell(90,5,utf8_decode("Titre de votre devis"),0,'L','L',0);

            $pdf->SetFont('MontserratBold');
            $pdf->SetFontSize(11);

            $pdf->SetXY(130,62);
            $pdf->MultiCell(90,5,utf8_decode("Nom de votre client"),0,'L','L',0);

            $pdf->SetFont('Montserrat');
            $pdf->SetFontSize(11);

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

            $pdf->SetXY(10,140);
            $pdf->MultiCell(70,5,utf8_decode("Désignation"),1,'C',0);

            $pdf->SetXY(80,140);
            $pdf->MultiCell(30,5,utf8_decode("Quantité"),1,'C',0);

            $pdf->SetXY(110,140);
            $pdf->MultiCell(30,5,utf8_decode("PU Vente"),1,'C',0);

            $pdf->SetXY(140,140);
            $pdf->MultiCell(20,5,utf8_decode("TVA"),1,'C',0);

            $pdf->SetXY(160,140);
            $pdf->MultiCell(40,5,utf8_decode("Montant HT"),1,'C',0);

            // Tableau des totaux
            $pdf->SetXY(140,250);
            $pdf->MultiCell(60,15,"",1,'L','L',0);
            $pdf->SetXY(140,250);
            $pdf->MultiCell(60,5,utf8_decode("Total HT"),0,'L',0);

            $pdf->SetXY(140,255);
            $pdf->MultiCell(60,5,utf8_decode("TVA"),0,'L',0);

            $pdf->SetXY(140,260);
            $pdf->MultiCell(60,5,utf8_decode("Total TTC"),0,'L',0);
        }

        if($from == 0){
            $pdf->SetFont('MontserratBold');
            $pdf->SetFontSize(13);
            $pdf->SetXY(100,40);
            $pdf->MultiCell(90,5,utf8_decode($titre),0,'L','L',0);

            $pdf->SetFont('MontserratBold');
            $pdf->SetFontSize(11);

            $pdf->SetXY(130,62);
            $pdf->MultiCell(90,5,utf8_decode($nom." ".$prenom),0,'L','L',0);

            $pdf->SetFont('Montserrat');
            $pdf->SetFontSize(11);

            $pdf->SetXY(130,67);
            $pdf->MultiCell(90,5,utf8_decode($adresse),0,'L','L',0);

            if($complement != ""){
                $pdf->SetXY(130,72);
                $pdf->MultiCell(90,5,utf8_decode($complement),0,'L','L',0);
                $ligne1_client = 77;
                $ligne2_client = 82;
                $ligne3_client = 87;
                $ligne4_client = 92;
            }

            $pdf->SetXY(130,$ligne1_client);
            $pdf->MultiCell(90,5,utf8_decode($cp." ".$ville),0,'L','L',0);

            $pdf->SetXY(130,$ligne2_client);
            $pdf->MultiCell(90,5,utf8_decode($pays),0,'L','L',0);

            $pdf->SetXY(130,$ligne3_client);
            $pdf->MultiCell(90,5,utf8_decode($tel),0,'L','L',0);

            $pdf->SetXY(130,$ligne4_client);
            $pdf->MultiCell(90,5,utf8_decode($mail),0,'L','L',0);

            $pdf->SetXY(10,120);
            $pdf->MultiCell(90,5,utf8_decode($nom_fichier),0,'L','L',0);

            $pdf->SetFont('MontserratLight');
            $pdf->SetFontSize(10);

            $pdf->SetXY(10,130);
            $pdf->MultiCell(90,5,utf8_decode("Le ".$dateauj),0,'L','L',0);

            // Création du tableau
            $pdf->SetXY(10,140);
            $pdf->MultiCell(70,5,utf8_decode("Désignation"),1,'C',0);
            $pdf->SetXY(10,145);
            $pdf->MultiCell(70,10,utf8_decode($desingation),1,'C',0);

            $pdf->SetXY(80,140);
            $pdf->MultiCell(30,5,utf8_decode("Quantité"),1,'C',0);
            $pdf->SetXY(80,145);
            $pdf->MultiCell(30,10,utf8_decode($quantite),1,'C',0);

            $pdf->SetXY(110,140);
            $pdf->MultiCell(30,5,utf8_decode("PU Vente"),1,'C',0);
            $pdf->SetXY(110,145);
            $pdf->MultiCell(30,10,utf8_decode($puvente),1,'C',0);

            $pdf->SetXY(140,140);
            $pdf->MultiCell(20,5,utf8_decode("TVA"),1,'C',0);
            $pdf->SetXY(140,145);
            $pdf->MultiCell(20,10,utf8_decode("20%"),1,'C',0);

            $pdf->SetXY(160,140);
            $pdf->MultiCell(40,5,utf8_decode("Montant HT"),1,'C',0);
            $pdf->SetXY(160,145);
            $pdf->MultiCell(40,10,utf8_decode($montantht),1,'C',0);

            // Tableau des totaux
            $pdf->SetXY(140,250);
            $pdf->MultiCell(60,15,"",1,'L','L',0);
            $pdf->SetXY(140,250);
            $pdf->MultiCell(60,5,utf8_decode("Total HT"),0,'L',0);
            $pdf->SetXY(140,250);
            $pdf->MultiCell(60,5,utf8_decode($montantht),0,'R',0);

            $pdf->SetXY(140,255);
            $pdf->MultiCell(60,5,utf8_decode("TVA"),0,'L',0);
            $pdf->SetXY(140,255);
            $pdf->MultiCell(60,5,utf8_decode($tva),0,'R',0);

            $pdf->SetXY(140,260);
            $pdf->MultiCell(60,5,utf8_decode("Total TTC"),0,'L',0);
            $pdf->SetXY(140,260);
            $pdf->MultiCell(60,5,utf8_decode($montantttc),0,'R',0);
        }
    }                       
}



$fichier='pdf/pdf-generer/Devis-'.substr(time(),3,8).'.pdf';
$pdf->Output($fichier,'F');

if($from == 0){
    $date = date("Y-m-d H:i:s");
    
    $insertpdf = $bdd->prepare("INSERT INTO devis(nom_devis, nom, prenom, date_devis) VALUES(?, ?, ?, ?)");
    $insertpdf->execute(array($nom_fichier, $nom, $prenom, $date));
}

$path = $fichier;
header("Location: download.php?path=$path");

?>