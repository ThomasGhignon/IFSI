<?php
require_once('init.php');

$request = $bdd->query('SELECT * FROM `even_log` Limit 1');

while($data = $request->fetch()){
  $id = $data['id_value'];
  $className = $data['new_class'];
  $typeM = $data['type_of_m'];
}

if (!empty($id)) {
  $request = $bdd->query('DELETE FROM `even_log` Limit 1');

  $arrayData = [
    "id" => $id,
    "className" => $className,
    "typeM" => $typeM
  ];
  echo json_encode($arrayData);
}


