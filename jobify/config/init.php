<?php

session_start();
// Config File
require_once 'config.php';

require_once 'helpers/system_helper.php';

// AutoLoader
spl_autoload_register('myAutoloader');

function myAutoloader($class_name){
    $path = 'lib/';
    include $path.$class_name.'.php';
}



?>
