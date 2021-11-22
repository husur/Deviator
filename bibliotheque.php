<?php
include "database.php";

$pdf = $bdd->query('SELECT * FROM devis');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_navbar.css">
    <link rel="stylesheet" href="css/style_bibliotheque.css">
    <title>Bibliothèque</title>
</head>
<body>

<header>
    <div class="header-text">
        <span class="devi-text">Devi</span><span class="a-text">a</span><span class="t-text">t</span><span class="o-text">o</span><span class="r-text">r</span>
    </div>
    <div id="ligne-header"></div>
    <div class="rightSide">
        <div class="btn menuToggle">
            <ion-icon name="menu-outline" onclick="disableScroll()"></ion-icon>
            <ion-icon name="close-outline" onclick="enableScroll()"></ion-icon>
        </div>
    </div>

    <!-- Bar de navigation -->
    <ul class="navigation">
        <li><a href="index.php">Creation du devis</a></li>
        <li><a href="modif_devis.php">Modification du devis</a></li>
        <li><a href="bibliotheque.php">Bibliothèque</a></li>
    </ul>

</header>

<main>
	<div class="container">
		<?php while ($p = $pdf->fetch()) { 
            
        $devis = 'pdf/pdf-generer/'.$p['nom_devis'].'.pdf';

        $date_explode = str_replace("-", " ", $p['date_devis']);
        $date_explode = str_replace(":", " ", $date_explode);

        $date_explode = explode(" ", $date_explode);

        $date_explode = $date_explode[2]."/".$date_explode[1]."/".$date_explode[0];

            
        ?>

            <a href="download.php?path=<?=$devis?>"><div class="container-devis">
                <p class="text">
                    Télécharger le devis de <?= $p['nom'] ?> <?= $p['prenom'] ?> du <?= $date_explode ?>
                </p>
                <img src="img/logopdf.png">
            </div></a>
		<?php } ?> 
	</div>
    
</main>

<footer>
    <h3>&copy; Deviator - Husur Dev 2021</h3>
</footer>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="js/main.js"></script>

</body>
</html>