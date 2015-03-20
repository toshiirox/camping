<?php
require 'class/autoload.php';

try
{
    $db;
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>