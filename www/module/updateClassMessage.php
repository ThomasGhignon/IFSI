<?php
require_once('init.php');

if(!empty($_GET['id'])){

  $id = (int) $_GET['id'];
  $newStatus = $_GET['stat'];

  $request = $bdd->prepare('UPDATE `preco_message` SET `status`= :stat WHERE id = :id');
  $request->execute(array(
          "id" => $id,
          "stat" =>$newStatus
      ));

  $request = $bdd->prepare('INSERT INTO even_log(id_value,new_class) VALUES(:id, :class)');
  $request->execute(array(
          "id" => $id,
          "class" =>$newStatus
      ));
}

