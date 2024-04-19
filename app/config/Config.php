<?php 

class Config {

    private static $arr = [
        '/' => 'mysql:host=203.161.56.241;dbname=lottery',
        '//' => 'enzerhub',
        '///' => 'enzerhub'
    ];

    public static function root() : array  {
        return self::$arr;
    }

}