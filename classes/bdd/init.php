<?php
    require 'constantes.php';

    try
    {
    	$bdd = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset='.DB_CHARSET.'', DB_LOGIN, DB_PASSWORD);
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
?>
