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
    <img alt="label qualite" src="image/camping_qualite.jpg" class="droite"/>


    <div id="entete">  <!-- bandeau en haut de la page -->
        <p>Bienvenue au camping l'Escargot</p>
    </div>
    <!-- fin du div entete -->
    <?php include("core/menu.php"); ?>
    <!-- fin du div conteneurmenu  -->

    <div id="contenu">  <!-- contenu de la page -->
        <h1>Les diff&eacute;rentes activit&eacute;s de la r&eacute;gion</h1>

        <table>

            <tr>
                <td width=50%>
                    <p>Le <b><u>Golfe du Morbihan</u></b>, un des lieux les plus visit&eacute;s de Bretagne, appartient
                        au "club des plus belles baies du monde". C'est un site unique, une v&eacute;ritable petite mer
                        int&eacute;rieure parsem&eacute;e d'&icirc;les et d'&icirc;lots dont l'&Icirc;le-aux-Moines et
                        l'&Icirc;le d'Arz. C'est un lieu privil&eacute;gi&eacute; avec ses sentiers de randonn&eacute;es,
                        ses ports, la p&ecirc;che, la voile, les r&eacute;gates de bateaux anciens, les excursions sur
                        les &icirc;les. &Agrave; la r&eacute;ception du camping, vous pouvez r&eacute;server votre
                        croisi&egrave;re pour visiter le Golfe du Morbihan ou bien encore Belle-&Icirc;le-en-mer...
                        Les &eacute;quipages de la Compagnie des &Icirc;les vous attendent &agrave; bord de leurs
                        embarcations.</p>
                </td>
                <td>
                    <img class="centre" alt="photo du golfe du Morbihan" src="image/golfeMorbihan.jpg"/>
                </td>
            </tr>
            <tr>
                <td>
                    <img class="centre" alt="photo de la ville de Vannes" src="image/vannes.jpg"/>
                </td>
                <td>
                    <p><b><u>Vannes </u></b>carrefour privil&eacute;gi&eacute; en Bretagne Sud est une cit&eacute; m&eacute;di&eacute;vale
                        qui poss&egrave;de un patrimoine remarquable : ses vieux lavoirs, ses remparts, ses vieux
                        quartiers pi&eacute;tonniers aux maisons &agrave; pans de bois. Chaque ann&eacute;e, la r&eacute;gion
                        de Vannes est un lieu riche en animations, quelles soient maritimes, historiques ou culturelles.
                    </p>
                </td>

            </tr>
            <tr>

                <td>
                    <p><b><u>Belle-Ile en Mer</u></b> est la plus vaste des &icirc;les Bretonnes (longueur 20 km,
                        largeur 9 km avec 100 km de c&ocirc;tes). Elle doit son nom &agrave; la beaut&eacute;
                        et &agrave; la diversit&eacute; de ses paysages. Belle-Ile offre deux types de c&ocirc;tes
                        distinctes ; la c&ocirc;te "en dedans" particuli&egrave;rement vallonn&eacute;e et bord&eacute;e
                        de grandes plages de sable blond et la c&ocirc;te "sauvage" rocheuse et abrupte sur laquelle la
                        mer se brise avec fracas. R&eacute;chauff&eacute;e par les courants du Gulf-Stream, Belle-Ile b&eacute;n&eacute;ficie
                        d'un climat particuli&egrave;rement ensoleill&eacute;. Belle-Ile a toujours su &eacute;galement
                        attirer les peintres et les artistes : Matisse, Monet, Arletty, Sarah Bernhardt...</p>
                </td>
                <td>
                    <img class="centre" alt="Belle-Ile en Mer" src="image/belle-ile-en-mer.jpg"/>
                </td>
            </tr>
            <tr>

                <td><img class="centre" alt="tour de l'&icirc;le" src="image/berder.jpg"/>
                </td>
                <td>
                    A Larmor-Baden, nous vous conseillons vivement cette balade: &agrave; mar&eacute;e basse, vous
                    pouvez passer sur l'<b><u>&icirc;le Berder</u></b>. Cette &icirc;le est magnifiquement bois&eacute;e,
                    et en faisant son tour &agrave; pied (environ 1 heure) vous d&eacute;couvrirez une vari&eacute;t&eacute;
                    v&eacute;g&eacute;tale de type m&eacute;diterran&eacute;en peu commune dans la r&eacute;gion. Au sud
                    de l'&icirc;le, vous aurez une belle vue sur le courant tr&egrave;s fort de "la jument", le deuxi&egrave;me
                    courant d'Europe pour sa puissance.
                </td>
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
