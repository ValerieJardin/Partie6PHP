<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o"> 
        <!--Lien pour cssiser la vue-->
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <!--Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent 
            et les afficher: index.php?dateDebut=2/05/2016&dateFin=27/11/2016 -->
        <title>Exercice 3 de la partie 6 en PHP</title>
    </head>
    <body>
        <!--Mise en place d'une balise p pour mettre le script php-->
        <p>
            <?php
/** Vérification de la présence des paramètres date de début et date de fin
            Mise en place de la fonction qui teste la présence des variables = la fonction isset()
            À noter : $_GET est un tableau associatif **/
            
            if (isset($_GET['dateDebut']) AND isset($_GET['dateFin'])) { // On a les dates de début et de fin
// Afficher les éléments
                echo 'Date de début est  ' . $_GET['dateDebut'] . ' et la date de fin est ' . $_GET['dateFin'] . ' !';
            } else { // Il manque des paramètres, on avertit le visiteur
                echo 'Il faut renseigner les dates de début et de fin !';
            }
            ?>
        </p>

    </body>
</html>