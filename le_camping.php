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
    <div id="contenu">  <!-- contenu de la page -->
        <h1>Les installations du camping</h1>

        <table> <!-- Al'origine deux colonnes sont pr�vues pour le tableau -->

            <tr>  <!-- premi�re ligne  -->
                <td colspan="2">
                    <!-- colspan permet de sp�cifier que deux colonnes vont �tre regroup�es pour n'en faire plus qu'une -->
                    <hr/>
                    <!-- tracer une ligne  -->
                    <h4> La piscine </h4>
                    <img class="gauche" alt="photo de la piscine" src="image/piscine.jpg"/>

                    <p>
                        Suspendisse at justo in elit scelerisque congue. Curabitur tortor. Vestibulum libero. In cursus
                        augue. Donec nisl nulla, lacinia nec, suscipit venenatis, feugiat vel, libero. Etiam feugiat
                        neque quis erat. Nullam id enim ut libero auctor blandit. Sed fermentum est eget justo. Donec
                        elit. Maecenas tempor, tellus vitae porta elementum, lorem massa lobortis nisi, ut cursus tellus
                        mauris a orci. Sed ultrices libero vel ipsum. Integer porta fringilla libero. Suspendisse
                        sagittis dui in turpis. Nam quis justo. Praesent hendrerit enim ultricies urna.
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <!-- colspan permet de sp�cifier que deux colonnes vont �tre regroup�es pour n'en faire plus qu'une -->
                    <hr/>
                    <!-- tracer une ligne -->
                    <h4> Les emplacements Caravane et Tente </h4>
                </td>
            </tr>

            <tr>  <!-- Ligne suivante -->

                <td>  <!-- premi�re colonne -->
                    <p class="centre"><img alt="photo de l'emplacement1" src="image/emplacement.jpg"/></p>
                </td>
                <td>  <!-- seconde colonne -->
                    <p class="centre"><img alt="photo de l'emplacement tente" src="image/emplacement_tente_1.png"/></p>
                </td>
            </tr>

            <tr>
                <td colspan="2">

                    <p>
                        Praesent risus dui, luctus quis, eleifend non, imperdiet vitae, mi. Proin rutrum enim a ipsum.
                        Cras aliquam congue ipsum. Fusce vel enim. Duis lorem odio, gravida in, vulputate facilisis,
                        facilisis ut, ligula. Sed erat. Cras ipsum sapien, laoreet non, placerat eget, consectetuer
                        vehicula, justo. Quisque metus. Suspendisse potenti.
                    </p>

                    <p>
                        Proin pede enim, gravida vitae, pulvinar ac, bibendum sit amet, leo. Curabitur sit amet odio vel
                        nisi egestas faucibus. Donec auctor egestas orci. Sed tristique gravida urna.
                    </p>

                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <hr/>
                    <h4> L'acc&egrave;s Wi-Fi </h4>

                    <p>
                        Praesent risus dui, luctus quis, eleifend non, imperdiet vitae, mi. vitae, pulvinar ac, bibendum
                        sit amet, leo. Curabitur sit amet odio vel nisi egestas faucibus. Donec auctor egestas orci. Sed
                        tristique gravida urna.
                        Proin rutrum enim a ipsum. Cras aliquam congue ipsum. Fusce vel enim. Duis lorem odio, gravida
                        in, vulputate facilisis, facilisis ut, ligula. Sed erat. Cras ipsum sapien, laoreet non,
                        placerat eget, consectetuer vehicula, justo. Quisque metus. Suspendisse potenti.
                    </p>
                    <img class="droite" alt="acc�s Wi-Fi" src="image/wifi-zone.jpg"/>
                </td>
            </tr>


        </table>


        <p id='pied'>  <!-- pied de page  -->
            copyright Camping l'Escargot - R&eacute;alis&eacute; par Dev'Web - <a href="#">Mentions l&eacute;gales</a>
        </p>

    </div>
    <!-- fin du div contenu -->
</div>
<!-- fin du div conteneur -->

</body>
</html>