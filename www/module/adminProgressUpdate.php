<?php
require_once('module/init.php');

$request = $bdd->prepare('SELECT * FROM time_update ORDER BY ID DESC LIMIT 1');
$request->execute(array(
    'countdown' => $New_progress_countdown,
    'progress_barre' => $New_progress_barre
));
