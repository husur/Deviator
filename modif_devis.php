<?php

include "database.php";

if (isset($_POST['submit'])) {
	$nom = htmlspecialchars($_POST['nom']);
	$nom_fichier = $nom;
	$fichier = $_FILES['logo']['tmp_name'];
	$dossierimg = "../deviator/img/logo/";
	$nom_upload = $dossierimg.$nom_fichier.".png";

	if ($nom != "") {

		if(move_uploaded_file($fichier, $nom_upload)){
			$insertimg = $bdd->prepare("INSERT INTO image_devis(nom_fichier) VALUES(?)");
			$insertimg->execute(array($nom_fichier));
		}else{
			echo "Une erreur est survenue";
            echo $nom_upload;
		}
	}else{
		echo "Tous les champs doivent être complétés";
	}
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_navbar.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_modif_devis.css">
    <title>Modification des devis</title>
</head>
<body>

<header>
    <div class="header-text">
        <span class="devi-text">Devi</span><span class="a-text">a</span><span class="t-text">t</span><span class="o-text">o</span><span class="r-text">r</span>
    </div>
    <div id="ligne-header"></div>
    <div class="rightSide">
        <div class="btn menuToggle">
            <ion-icon name="menu-outline"></ion-icon>
            <ion-icon name="close-outline"></ion-icon>
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

    <div class="form-pdf">
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="nom">Nom de l'entreprise <br>
                <input type="text" name="nom_entreprise" id="nom_entreprise" placeholder="Nom de l'entreprise">
            </label>
            <label for="tel_entreprise" class="label-gauche">Numéro de téléphone <br>
                <input type="text" name="tel_entreprise" id="tel_entreprise" placeholder="Numéro de téléphone">
            </label>
            <label for="adresse_entreprise">Adresse <br>
                <input type="text" name="adresse_entreprise" id="adresse_entreprise" placeholder="Adresse">
            </label>
            <label for="complement_entreprise" class="label-gauche">Complément <br>
                <input type="text" name="complement_entreprise" id="complement_entreprise" placeholder="Complément">
            </label>
            <label for="cp_entreprise">Code Postal <br>
                <input type="text" name="cp_entreprise" id="cp_entreprise" placeholder="Code Postal">
            </label>
            <label for="ville_entreprise" class="label-gauche">Ville <br>
                <input type="text" name="ville_entreprise" id="ville_entreprise" placeholder="Ville">
            </label>
            <label for="pays_entreprise">Pays <br>
                <input type="text" name="pays_entreprise" id="pays_entreprise" placeholder="Pays">
            </label>
            <label for="siret_entreprise" class="label-gauche">SIRET <br>
                <input type="text" name="siret_entreprise" id="siret_entreprise" placeholder="SIRET">
            </label>
            <label for="">Importez votre logo <br>
            <input type="file" name="logo" id="logo">
            </label>
            <label for="submit" class="label-gauche"> <br>
                <input type="submit" name="submit" id="submit" value="Mettre à jour le profil">
            </label>
        </form>

        <button name="devis_vierge" id="devis_vierge">Visualiser le devis vierge</button>
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