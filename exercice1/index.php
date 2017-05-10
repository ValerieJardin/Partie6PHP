<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o"/> 
        <!--Lien pour cssiser la vue-->
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <!--Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL 
            existent et les afficher: index.php?nom=Nemare&prenom=Jean.-->
        <title>Exercice 1 de la partie 6 en PHP</title>
    </head>
    <body>
        <!--Mise en place d'une balise p pour mettre le script php-->
        <p>
            <?php
/** Vérification de la présence des paramètres nom et prénom et de leur valeur respective Nemar et Jean
            Mise en place de la fonction qui teste la présence des variables = la fonction isset()
            À noter : $_GET est un tableau associatif **/

            if (isset($_GET['prenom']) && isset($_GET['nom'])) { // On a le nom et le prénom
// Afficher les éléments
                echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !';
            } else { // Il manque des paramètres, on avertit le visiteur
                echo 'Il faut renseigner un prénom et un nom !';
            }
            ?>
        </p>
    </body>
</html>