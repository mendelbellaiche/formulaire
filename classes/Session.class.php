
<?php
    session_start();

    class Session {

        static function printSessionValues() {
            echo '<pre>';
            print_r($_SESSION);
            echo '</pre>';
        }

        static function keyIsExists($key) {
            return array_key_exists($key, $_SESSION);
        }

        static function getSessionItem($key) {
            return $_SESSION[$key];
        }

        static function setSessionItem($key, $value) {
            $_SESSION[$key] = $value;
        }

        static function resetSession() {
            $_SESSION = array();
        }

        static function storeObject($key, $obj) {
            $_SESSION[$key] = serialize($obj);
        }

        static function getObject($key) {
            return unserialize($_SESSION[$key]);
        }
    }

 ?>
