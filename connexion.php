<?php
require 'class/autoload.php';

try
{

   $db = DBFactory::getMysqlConnexionWithPDO();
   
   echo 'Connection successfull';
   $PrepREQ = new PreparationREQ($db);
}
	catch (Exception $e) {
	die("Impossible de se connecter: " . $e->getMessage());
}
?> 


