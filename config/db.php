<?php
class Database{
    public static function connect(){
        $db = new mysqli('localhost', 'root', 'C2B1N1T2102$', 'pilaresDB');

        $db->query("SET NAMES 'utf8'");
        return $db;
    }
}
?>