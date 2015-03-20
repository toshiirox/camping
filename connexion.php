<?php
require 'class/autoload.php';

try
{
   $db = DBFactory::getMysqlConnexionWithPDO();
   echo 'Connection successfull';
}
catch (Exception $e)
{
   echo 'Erreur :'.$e->getMessage();
}
?>