<?php

require_once('config.php');

try
{
    $bdd = new PDO('mysql:host='.$ipLocal.';dbname='.$nameBdd.'', ''.$userBdd.'',''.$passwordBdd.'');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
