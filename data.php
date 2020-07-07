<?php
    require 'classes/Session.class.php';
    require 'classes/Utilisateur.class.php';

    $keySession = 'user';
    $u = null;

    if (Session::keyIsExists($keySession) == false) {
        $u = new Utilisateur();
    } else {
        $u = Session::getObject($keySession);
    }

    if (array_key_exists('nom', $_POST)) {
        $u->setNom($_POST['nom']);
    }

    if (array_key_exists('prenom', $_POST)) {
        $u->setPrenom($_POST['prenom']);
    }

    if (array_key_exists('email', $_POST)) {
        $u->setEmail($_POST['email']);
    }

    if (array_key_exists('superficie', $_POST)) {
        $u->setSuperficie($_POST['superficie']);
    }

    if (array_key_exists('modechauffage', $_POST)) {
        $u->setModeChauffage($_POST['modechauffage']);
    }

    Session::storeObject($keySession, $u);


 ?>
