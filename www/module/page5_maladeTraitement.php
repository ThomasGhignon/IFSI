<?php
require_once('init.php');

$message = $_POST['message'];
$stat = 'treatment';

$insertion = $bdd->prepare('INSERT INTO malade(status,message) VALUES(:stat, :message)');
$insertion->execute(array(
    'stat' => $stat,
    'message' => $message
));
