<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o"> 
        <!--Lien pour cssiser la vue-->
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <!--Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL 
            existent et les afficher: index.php?langage=PHP&serveur=LAMP -->
        <title>Exercice 4 de la partie 6 en PHP</title>
    </head>
    <body>
        <!--Mise en place d'une balise p pour mettre le script php-->
        <p>
            <?php
            /** Vérification de la présence des paramètres langage et serveur
              Mise en place de la fonction qui teste la présence des variables = la fonction isset()
              À noter : $_GET est un tableau associatif */
            if (isset($_GET['langage']) AND isset($_GET['serveur'])) { // On a le nom du langage et du serveur
// Afficher les éléments
                echo 'Tu essaies d\'utiliser le langage ' . $_GET['langage'] . ' et tu te sers du serveur ' . $_GET['serveur'] . ' !';
            } else { // Il manque des paramètres, on avertit le visiteur
                echo 'Il faut renseigner les paramètres langage et serveur !';
            }
            ?>
        </p>
    </body>
</html>