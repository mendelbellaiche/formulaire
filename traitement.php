<?php
    require 'classes/Session.class.php';
    require 'classes/Bdd.class.php';
    $insertRes = BDD::insertUser($_POST['nom'], $_POST['prenom'], $_POST['email'], SHA1($_POST['pwd']), $_POST['modeChauffage'], $_POST['superficie']);
    $response = array();
    $response["code"] = $insertRes == true;
    echo json_encode($response);
    Session::resetSession();
 ?>
