<?php session_start();
require 'class/autoload.php';

if (isset($_POST['Insertion'])) {


// On commence par récupérer les champs
    if (isset($_POST['nom'])) $nom = $_POST['nom'];
    else      $nom = "";

    if (isset($_POST['prenom'])) $prenom = $_POST['prenom'];
    else      $prenom = "";

    if (isset($_POST['email'])) $email = $_POST['email'];
    else      $email = "";

    if (isset($_POST['adresse'])) $adresse = $_POST['adresse'];
    else      $adresse = "";

    if (isset($_POST['tel'])) $tel = $_POST['tel'];
    else      $tel = "";


// On vérifie si les champs sont vides
    if (empty($nom) OR empty($prenom) OR empty($email) OR empty($adresse) OR empty($tel)) {
    } // Aucun champ n'est vide, on peut enregistrer dans la table
    else {
        // connexion à la base
        $db = DBFactory::getMysqlConnexionWithPDO();
// sélection de la base

        // on écrit la requête sql
        $_SESSION['nb'] = $db->exec("INSERT INTO CLIENT(nom, prenom, email, adresse, telephone) VALUES('$nom','$prenom','$email','$adresse','$tel');");

        // on affiche le résultat pour le visiteur

    }

}
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
    <!-- titre de la page -->
    <title>Camping Canargot - H&ocirc;tellerie de Plein-Air - Accueil</title>

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
        <h1>Gestion des R�servations</h1>

        <form action="" method="post">
        	<label for="selectEmplacement">Emplacement :</label>
	        <input id="selectEmplacement" type="text" list="liste_Emplacements" name="lesEmplacements" required>
			<datalist id="liste_Emplacements" >
           	<?php 
           		$db = DBFactory::getMysqlConnexionWithPDO();
           		$lignesResult = $db->query("SELECT NOM FROM BUNGALOW;");
           		// A FINIR 
           		
           		Foreach ($lignesResult as $uneLigne)
           		{
           			echo 'test';
           			Var_dump($uneLigne) ; 
           			echo '<option value="'+$uneLigne->NomDuChamp+'"/>';
           		}
           	?>
           	</datalist>
            <p><input type="submit" value="Ajout"  name="submitSejour"></p>
        </form>

    </div>
    <!-- fin du div contenu -->
</div>
<!-- fin du div conteneur -->

</body>
</html>