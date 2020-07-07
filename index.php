<?php
    session_id();
    require 'classes/Session.class.php';
    require 'classes/Utilisateur.class.php';

    if (Session::keyIsExists('user')) {
        $u = Session::getObject('user');
    }
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
     <head>
         <meta charset="utf-8">
         <title>Formulaire</title>

         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

         <link rel="stylesheet" href="css/styles.css">

     </head>
     <body>

         <?php include('includes/etape_1.php'); ?>
         <?php include('includes/etape_2.php'); ?>
         <?php include('includes/etape_3.php'); ?>
         <?php include('includes/etape_4.php'); ?>

         <script src="js/script.js" charset="utf-8"></script>
         <script src="js/loadSession.js" charset="utf-8"></script>

     </body>
 </html>
