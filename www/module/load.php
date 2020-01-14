<?php
require_once('init.php');

if(!empty($_GET['id'])){

    $id = (int) $_GET['id']; // nb entier
    $typeOf_m = $_GET['typeOf_m'];

    $requete = $bdd->prepare('SELECT * FROM preco_message WHERE id > :id AND (type_of_m = :typeOf_m OR type_of_m = "all")');
    $requete->execute(array(
        "id" => $id,
        "typeOf_m" =>$typeOf_m
    ));

    $messages = null;

    while($donnees = $requete->fetch()){
        $messages .= "<div id=". $donnees['id'] ." class=". $donnees['status'] ."><p>" . $donnees['message'] . "</p></div>";
    }

    echo $messages; // return to JS script

}

