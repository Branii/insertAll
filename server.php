<?php
date_default_timezone_set('Asia/Shanghai');
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/autoload.php';
use React\EventLoop\Factory;
$loop = Factory::create();

//var_dump(Database::open());

$loop->addPeriodicTimer(1,function (){

    $currentTime = date('H:i:s');
    if(isset(Timer::time1x0()[$currentTime])){ // 1 min games
        $count = Timer::time1x0()[$currentTime];
       echo "Current period: " . Utils::getDate(). '-' . Utils::withLeadingZero(4,$count) . PHP_EOL;
    }

});
 
echo "Server started\n";
//Start the event loop
$loop->run();