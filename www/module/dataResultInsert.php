<?php
require_once('init.php');

$name = $_POST['sessionName'];
$page2_time = $_POST['page2_time'];
$page2_error = $_POST['page2_error'];
$page3_time = $_POST['page3_time'];
$page3_error = $_POST['page3_error'];
$page4_time = $_POST['page4_time'];
$page4_error = $_POST['page4_error'];
$page5_time = $_POST['page5_time'];
$page5_error = $_POST['page5_error'];

$request = $bdd->prepare('INSERT INTO data_result(name,page2_time,page2_error,page3_time,page3_error,page4_time,page4_error,page5_time,page5_error) VALUES( :name, :page2_time, :page2_error, :page3_time, :page3_error, :page4_time, :page4_error, :page5_time, :page5_error)');
  $request->execute(array(
      'name' => $name,
      'page2_time' => $page2_time,
      'page2_error' => $page2_error,
      'page3_time' => $page3_time,
      'page3_error' => $page3_error,
      'page4_time' => $page4_time,
      'page4_error' => $page4_error,
      'page5_time' => $page5_time,
      'page5_error' => $page5_error,
  ));

