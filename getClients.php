<?php
require 'connexion.php';

try
{

	$req = $db->prepare('SELECT * FROM CLIENT');
	$req->execute();
	$resultats = $req->fetch();
}
catch (Exception $e)
{
	echo 'Erreur :'.$e->getMessage();
}

if (isset($resultats))
{
	print_r($resultats);
}
else
{
	echo 'Malheureusement, il semble n\'y avoir aucun client...';
}
