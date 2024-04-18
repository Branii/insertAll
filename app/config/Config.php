<?php 

class Config {

    private static $arr = [
        '/' => 'mysql:host=192.168.199.241;dbname=lottery',
        '//' => 'enzerhub',
        '///' => 'enzerhub'
    ];

    public static function root() : array  {
        return self::$arr;
    }

}