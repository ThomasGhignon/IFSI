<?php

require_once('config.php');

try
{
    $bdd = new PDO('mysql:host='.$ipLocal.';dbname=ifsi', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
