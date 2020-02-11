<?php
$request = $bdd->prepare('SELECT * FROM data_result LIMIT 1');

while($data = $request->fetch()){
  $name_show = $data['name'];
  $page2_time_show = $data['page2_time'];
  $page2_error_show = $data['page2_error'];
  $page3_time_show = $data['page3_time'];
  $page3_error_show = $data['page3_error'];
  $page4_time_show = $data['page4_time'];
  $page4_error_show = $data['page4_error'];
  $page5_time_show = $data['page5_time'];
  $page5_error_show = $data['page5_error'];
}

?>
<div class="resultContainer">

</div>
