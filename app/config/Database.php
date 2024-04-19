<?php 

class Database extends Config {

    private static $con;

    public static function open() {
       
        try {
            if (self::$con == null) {
                self::$con = new PDO(
                    parent::root()['/'],
                    parent::root()['//'],
                    parent::root()['///']
                );
            }return self::$con;
        } catch (\Throwable $th) {
            Monolog::logException($th);
        }
    }

    public static function close() {
        if (self::$con != null) {
            self::$con = null;
        }
    }

}
