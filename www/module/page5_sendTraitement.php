<?php
require_once('init.php');

if(!empty($_POST['message'])){

  $message = $_POST['message'];
  $nameTable = $_POST['valId'];
  $stat = 'treatment';

  $insertion = $bdd->prepare('INSERT INTO '.$nameTable.'(status,message) VALUES(:stat, :message)');
  $insertion->execute(array(
      'stat' => $stat,
      'message' => $message
  ));
}
