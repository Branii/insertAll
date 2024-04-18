<?php
spl_autoload_register(function ($class) {
    $dirs = [
        'app',
        'app/config',
        'app/exceptions',
        'app/utils',
        'app/model/',
        'app/services'
    ];

    foreach ($dirs as $dir) {
        $filename = $dir . DIRECTORY_SEPARATOR . $class . '.php';
        if (file_exists($filename)) {
            include $filename;
            return;
        }
    }
});