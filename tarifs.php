<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
    <!-- titre de la page -->
    <title>Camping l'Escargot - H&ocirc;tellerie de Plein-Air - Accueil</title>

    <!-- balise m�ta pr�cisant le jeu de caract�re utilis� -->
    <meta http-equiv="Content-Type" content="text/HTML; charset=utf-8"/>

    <!-- Int�gration de la feuille de style -->
    <link rel="stylesheet" type="text/css" href="style/principal.css"/>
    <link rel="stylesheet" type="text/css" href="style/secondaire.css"/>
    <link rel="stylesheet" type="text/css" href="style/complement.css"/>
</head>

<body>
<div id="conteneur">  <!-- le conteneur entoure tout le contenu de la page -->
    <a href="index.php"><img alt="logo du camping" src="image/logo_camping.jpg" class="gauche"/></a>
    <!-- permet de revenir � la page index en cliquant sur le logo du camping  -->
    <img alt="label qualite" src="image/camping_qualite.jpg" class="droite"/>


    <div id="entete">  <!-- bandeau en haut de la page -->
        <p>Bienvenue au camping l'Escargot</p>
    </div>
    <!-- fin du div entete -->
    <?php include("core/menu.php"); ?>
    <!-- fin du div conteneurmenu  -->
    <div id="conteneurlien">  <!-- menu des liens apparaissant � gauche en bas de la page -->
        <ul>
            <li><a href="http://www.tourisme-vannes.com">Office du tourisme de Vannes</a></li>
            <li><a href="http://www.morbihan.com">Site du Morbihan</a></li>
            <li><a href="http://www.bretagne.com">Site de la Bretagne</a></li>
        </ul>
    </div>
    <!-- fin du div conteneurlien  -->


    <div id="contenu">  <!-- contenu de la page -->

        <h1>Lorem Ipsum</h1> <!-- titre principal de niveau 1  -->
        <h2>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</h2>
        <!-- titre de niveau 2  -->
        <br/><br/>

        <table class="tarif">
            <tr>
                <td colspan="4">Neque porro quisquam est</td>
            </tr>
            <tr>
                <td colspan="2">Lorem Ipsum</td>
                <td colspan="2">Lorem Ipsum</td>
            </tr>
            <tr>
                <td rowspan="2">dolor sit amet</td>
                <td>999.99</td>
                <td>999.99</td>
                <td>999.99</td>
            </tr>
            <tr>
                <td>999.99</td>
                <td>999.99</td>
                <td>999.99</td>
            </tr>
            <tr>
                <td rowspan="2">dolor sit amet</td>
                <td>999.99</td>
                <td>999.99</td>
                <td>999.99</td>
            </tr>
            <tr>
                <td>999.99</td>
                <td>999.99</td>
                <td>999.99</td>
            </tr>
        </table>
        <br/><br/>

        <div id="retrait">
            <p>

                Maecenas at lacus eget elit interdum varius. Proin nulla. Phasellus lobortis, justo ac tincidunt mollis,
                risus magna aliquet augue, eget congue augue magna in ipsum. Mauris ac nulla eu neque hendrerit congue.
                Integer consequat vehicula ligula. Fusce metus mauris, euismod a, viverra at, dictum eu, nisl. Proin sed
                metus sit amet lacus condimentum ullamcorper. Donec dapibus, ipsum at viverra gravida, elit nisl congue
                nisi, in sollicitudin erat sapien vitae enim. Curabitur tempor ligula et mauris. Aenean et velit. Proin
                ultrices.
            </p>
        </div>
        <!-- fin du div retrait -->


        <p id='pied'>  <!-- pied de page  -->
            copyright Camping l'Escargot - R&eacute;alis&eacute; par Dev'Web - <a href="#">Mentions l&eacute;gales</a>
        </p>

    </div>
    <!-- fin du div contenu -->
</div>
<!-- fin du div conteneur -->

</body>
</html>
