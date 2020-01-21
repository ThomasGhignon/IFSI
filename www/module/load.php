<?php
require_once('init.php');

if(!empty($_GET['id'])){

    $id = (int) $_GET['id'];
    $typeOf_m = $_GET['typeOf_m'];
    if (!empty($_GET['admin'])) {
       $pathAdmin = $_GET['admin'];
    }


    $requete = $bdd->prepare('SELECT * FROM preco_message WHERE id > :id AND (type_of_m = :typeOf_m OR type_of_m = "all")');
    $requete->execute(array(
        "id" => $id,
        "typeOf_m" =>$typeOf_m
    ));

    $messages = null;
    if (!empty($pathAdmin) && $pathAdmin == "admin.php") {
        while($data = $requete->fetch()){
        $idResponse = $data['id']."-input";
        $messages .= "<div><div id=".$idResponse."><input class='input_validated' value='' type='submit' name=". $data['id'] ."><input class='input_incomplete' value='' type='submit' name=". $data['id'] ."><input class='input_declined' value='' type='submit' name=". $data['id'] ."></div><div id=". $data['id'] ." class=". $data['status'] ."><p>" . $data['message'] . "</p></div></div>";
        }
    }
    else{
        while($data = $requete->fetch()){
        $messages .= "<div id=". $data['id'] ." class=". $data['status'] ."><p>" . $data['message'] . "</p></div>";
        }
    }
    echo $messages; // return to JS script (loadMessage.js)

}
