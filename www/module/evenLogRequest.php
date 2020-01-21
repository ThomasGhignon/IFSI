<?php
require_once('init.php');

$request = $bdd->query('SELECT * FROM `even_log` Limit 1');

while($data = $request->fetch()){
  $id = $data['id_value'];
  $className = $data['new_class'];
}

if (!empty($id)) {
  $request = $bdd->query('DELETE FROM `even_log` Limit 1');
  $arrayData = [
    "id" => $id,
    "className" => $className,
  ];
  echo json_encode($arrayData);
}


