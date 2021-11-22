<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_navbar.css">
    <title>Deviator</title>
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
            <form action="" method="POST">
                <label for="nom">Nom <br>
                    <input type="text" id="nom" name="nom" placeholder="Nom">
                </label>
                <label for="prenom" class="label-gauche">Prénom <br>
                    <input type="text" id="prenom" name="prenom" placeholder="Prénom">
                </label>
                <label for="mail">Adresse mail <br>
                    <input type="email" id="mail" name="mail" placeholder="Adresse mail">
                </label>
                <label for="adresse" class="label-gauche">Adresse <br>
                    <input type="text" id="adresse" name="adresse" placeholder="Adresse">
                </label>
                <label for="complement">Complément <br>
                    <input type="text" id="complement" name="complement" placeholder="Complément">
                </label>
                <label for="cp" class="label-gauche">Code Postal <br>
                    <input type="number" id="cp" name="cp" placeholder="Code Postal">
                </label>
                <label for="ville">Ville <br>
                    <input type="text" id="ville" name="ville" placeholder="Ville">
                </label>
                <label for="pays" class="label-gauche">Pays <br>
                    <input type="text" id="pays" name="pays" placeholder="Pays">
                </label>
                <label for="tel">Numéro de téléphone <br>
                    <input type="number" id="tel" name="tel" placeholder="Numéro de Téléphone">
                </label>
                <label for="submit" class="label-gauche"> <br>
                    <input type="submit" id="submit" name="submit" value="Générer PDF">
                </label>
            </form>
        </div>

    </main>

    <footer>
        <h3>&copy; Deviator - Husur Dev 2021</h3>
    </footer>

    <?php

        if(isset($_POST['submit'])){
            if($_POST['nom'] != ""){
                $nom = $_POST['nom'];
                if($_POST['prenom'] != ""){
                    $prenom = $_POST['prenom'];
                    if($_POST['mail'] != ""){
                        $mail = $_POST['mail'];
                        if($_POST['adresse'] != ""){
                            $adresse = $_POST['adresse'];
                            $complement = $_POST['complement'];
                            if($_POST['cp'] != ""){
                                $cp = $_POST['cp'];
                                if($_POST['ville'] != ""){
                                    $ville = $_POST['ville'];
                                    if($_POST['pays'] != ""){
                                        $pays = $_POST['pays'];
                                        if($_POST['tel'] != ""){
                                            $tel = $_POST['tel'];
                                            header("Location: creation_pdf.php?nom=$nom&prenom=$prenom&mail=$mail&adresse=$adresse&complement=$complement&cp=$cp&ville=$ville&pays=$pays&tel=$tel");
                                        }else{
                                            echo "Tous les champs doivent être copmplétés";
                                        }
                                    }else{
                                        echo "Tous les champs doivent être copmplétés";
                                    }
                                }else{
                                    echo "Tous les champs doivent être copmplétés";
                                }
                            }else{
                                echo "Tous les champs doivent être copmplétés";
                            }
                        }else{
                            echo "Tous les champs doivent être copmplétés";
                        }
                    }else{
                        echo "Tous les champs doivent être copmplétés";
                    }
                }else{
                    echo "Tous les champs doivent être copmplétés";
                }
            }else{
                echo "Tous les champs doivent être copmplétés";
            }
        }

    ?>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="js/main.js"></script>

</body>
</html>