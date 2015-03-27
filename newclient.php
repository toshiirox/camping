<?php
require 'class/autoload.php';
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
    echo '<font color="red">Attention, les champs ne sont pas tous remplis !</font>';
} // Aucun champ n'est vide, on peut enregistrer dans la table
else {
    // connexion à la base
    $db = DBFactory::getMysqlConnexionWithPDO();
// sélection de la base  

    // on écrit la requête sql
    $nb = $db->exec("INSERT INTO CLIENT(nom, prenom, email, adresse, telephone) VALUES('$nom','$prenom','$email','$adresse','$tel');");

    if ($nb = 1) {
        echo 'Vos infos on été ajoutées.';

    } else {
        echo 'Erreur d\'insertion';

    }
    // on affiche le résultat pour le visiteur

}
?>