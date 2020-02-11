<?php
$requete = $bdd->prepare('SELECT * FROM data_result WHERE id > :id AND (type_of_m = :typeOf_m OR type_of_m = "all")');
$requete->execute(array(
    'name' => $name_show,
    'page2_time' => $page2_time_show,
    'page2_error' => $page2_error_show,
    'page3_time' => $page3_time_show,
    'page3_error' => $page3_error_show,
    'page4_time' => $page4_time_show,
    'page4_error' => $page4_error_show,
    'page5_time' => $page5_time_show,
    'page5_error' => $page5_error_show,
));
 ?>
<div>

</div>
