<?php
require_once('init.php');

$request = $bdd->query('SELECT * FROM time_update ORDER BY ID ASC LIMIT 1');

while($resultData = $request->fetch()){
  $id = $resultData['id'];
  $time = $resultData['countdown'];
  $sideBarre = $resultData['progress_barre'];
}

if (!empty($id))
{
  $request = $bdd->query('DELETE FROM `time_update` WHERE id = '.$id.'');

  $arrayData = [
    "id" => $id,
    "countdown" => $time,
    "progress_barre" => $sideBarre
  ];
  echo json_encode($arrayData);
}
