<?php
require_once('init.php');

$progress_countdown = $_POST['progress_countdown'];
$progress_barre = $_POST['progress_barre'];

$request = $bdd->prepare('INSERT INTO time_update(countdown, progress_barre) VALUES(:countdown, :progress_barre)');
$request->execute(array(
    'countdown' => $progress_countdown,
    'progress_barre' => $progress_barre
));
