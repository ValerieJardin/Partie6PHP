<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o"> 
        <!--Lien pour cssiser la vue-->
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <!--Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL 
            existent et les afficher: index.php?batiment=12&salle=101 -->
        <title>Exercice 6 de la partie 6 en PHP</title>
    </head>
    <body>
        <!--Mise en place d'une balise p pour mettre le script php-->
        <p>
            <?php
            /** Vérification de la présence des paramètres numéro du batiment et numéro de la salle
              Mise en place de la fonction qui teste la présence des variables = la fonction isset()
              À noter : $_GET est un tableau associatif * */
            if (isset($_GET['batiment']) AND isset($_GET['salle'])) { // On a le numéro de la semaine
// Afficher les éléments
                echo 'Votre formation a lieu dans le batiment ' . $_GET['batiment'] . ', la salle numéro' . $_GET['salle'] . ' !';
            } else { // Il manque des paramètres, on avertit le visiteur
                echo 'Il faut renseigner les paramètres batiment et salle !';
            }
            ?>
        </p>

    </body>
</html>