<?php
require_once('init.php');
/*
call : adminTreatmentPreco.js -> updateClassMessage()
*/

if(!empty($_GET['id'])){

  $id = (int) $_GET['id'];
  $newStatus = $_GET['stat'];
  $typeM = $_GET['typeM'];

  $request = $bdd->prepare('UPDATE `preco_message` SET `status`= :stat WHERE id = :id');
  $request->execute(array(
          "id" => $id,
          "stat" =>$newStatus
      ));

  $request = $bdd->prepare('INSERT INTO even_log(id_value,new_class,type_of_m) VALUES(:id, :class, :type_of_m)');
  $request->execute(array(
          "id" => $id,
          "class" => $newStatus,
          "type_of_m" => $typeM
      ));
}

/*require_once('init.php');

if(!empty($POST['id'])){

  $id = (int) $POST['id'];
  $newStatus = $POST['stat'];
  $typeM = $POST['typeM'];
  $typeEven = $POST['typeEven'];

  $request = $bdd->prepare('UPDATE `preco_message` SET `status`= :stat WHERE id = :id');
  $request->execute(array(
          "id" => $id,
          "stat" =>$newStatus
      ));

  $request = $bdd->prepare('INSERT INTO even_log(id_value,new_class,type_of_m,type_even) VALUES(:id, :class, :type_of_m, :type_even)');
  $request->execute(array(
          "id" => $id,
          "class" => $newStatus,
          "type_of_m" => $typeM,
          "type_even" => $typeEven
      ));
}*/
