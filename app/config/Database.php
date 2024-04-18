<?php 

class Database extends Config {
    private static $pdo;
    public static function open() : pdo {
        return self::$pdo = new \PDO(parent::root()['/'],parent::root()['//'] ,parent::root()['///']);
    }

    public static function close() : null {
        return self::$pdo = null;
    }

}

