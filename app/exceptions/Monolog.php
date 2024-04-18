<?php 
require __DIR__ . 'vendor/autoload.php';
require __DIR__ . 'autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class Monolog {
    public static function logException(Throwable $th) : void {
        $log = new Logger('Checkers');
        $log->pushHandler(new StreamHandler('app/exceptions/logs.log', Logger::WARNING));
        $log->warning($th->getMessage());
    }
}
// simple logger