<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o"> 
        <!--Lien pour cssiser la vue-->
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <!--Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas 
            l'afficher sinon le signaler : index.php?nom=Nemare&prenom=Jean -->
        <title>Exercice 2 de la partie 6 en PHP</title>
    </head>
    <body>
        <!--Mise en place d'une balise p pour mettre le script php-->
        <p>
            <?php
// Vérification de la présence des paramètres nom, prénom et âge
            // Mise en place de la fonction qui teste la présence des variables = la fonction isset()

            if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['age'])) { // On a le nom, le prénom et l'âge
// Afficher les éléments
                echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' vous avez ' . $_GET['age'] . ' an(s) !';
            } else { // Il manque des paramètres, on avertit le visiteur
                echo 'Il faut renseigner un nom, un prénom et un âge !';
            }
            ?>
        </p>

    </body>
</html>