<?php
    require 'classes/Session.class.php';
    $response = array();
    $response["code"] = false;
    if (Session::keyIsExists('user')) {
        $response["code"] = true;
    }
    echo json_encode($response);
 ?>
