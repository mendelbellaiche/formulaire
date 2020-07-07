<?php
    require 'classes/Session.class.php';
    if ($_POST['reset']) {
        Session::resetSession();
    }
 ?>
