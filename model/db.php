<?php

class BddConnection
{

    public static mysqli $db;

    public static function open()
    {
        self::$db->connect('127.0.0.1', 'root', '', 'sgt_db');
    }

    public static function close()
    {
        self::$db->close();
    }

    public static function getConnection()
    {
        return self::$db;
    }
}
BddConnection::$db = new mysqli;

?>