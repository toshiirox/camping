<?php

try
{
// Connexion à la base de données
    $db = new PDO('mysql:host=mysql1.alwaysdata.com;dbname=canargot_dtb', 'canargot', 'canargot');

// Configuration du pilote : nous voulons des exceptions
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Obligatoire pour la suite
}
catch(Exception $e)
{
    echo "Échec : " . $e->getMessage();
}

?>