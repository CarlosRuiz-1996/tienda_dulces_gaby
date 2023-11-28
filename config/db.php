<?php 
    class Database{

        public static function connect(){
            // $server ="localhost";
            // $user = "root";
            // $pass = "";
            // $db = "smock";
            // $db = new mysqli($server, $user, $pass, $db);
            // $db->query("SET NAMES 'utf8'");
            // return $db;
            $db = new mysqli('localhost', 'root', '', 'smock');
            $db->query("SET NAMES 'utf8'");
            return $db;
        }

    }
?>