<?php

    require 'bdd/init.php';

    class BDD {

        static function insertUser($nom, $prenom, $email, $pwd, $mode, $superficie) {
            global $bdd;
            $count = self::countWithEmail($email);

            if ($count == 0) {
                $req = $bdd->prepare('INSERT INTO user(nom, prenom, email, pwd, mode, superficie) VALUES(:nom, :prenom, :email, :pwd, :mode, :superficie)');
                $req->execute(array(
                    'nom' => $nom,
                    'prenom' => $prenom,
                    'email' => $email,
                    'pwd' => $pwd,
                    'mode' => $mode,
                    'superficie' => $superficie
                    ));

                $req->closeCursor();
                return true;
            } else {
                return false;
            }
        }

        static function countWithEmail($email) {
            global $bdd;
            $response = $bdd->prepare("SELECT COUNT(*) AS COUNT FROM user WHERE email = ?;");
            $response->execute([$email]);
            $result = $response->fetch(PDO::FETCH_ASSOC);
            $response->closeCursor();
            return $result['COUNT'];
        }
    }

 ?>
