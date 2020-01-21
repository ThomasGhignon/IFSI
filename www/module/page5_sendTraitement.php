<?php
require_once('init.php');

if(!empty($_POST['message']) && ($_POST['valId'] == 'methode' || $_POST['valId'] == 'materiel' || $_POST['valId'] == 'malade' || $_POST['valId'] == 'mainoeuvre' || $_POST['valId'] == 'milieu')){

  $message = $_POST['message'];
  $typeOf_m = $_POST['valId'];
  $stat = 'treatment';

  $request = $bdd->prepare('INSERT INTO preco_message(status,type_of_m,message) VALUES(:stat, :typeOf_m, :message)');
  $request->execute(array(
      'stat' => $stat,
      'typeOf_m' => $typeOf_m,
      'message' => $message
  ));
}
