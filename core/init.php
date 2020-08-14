<?php
session_start();
$GLOBALS['Config'] = array(
    'mysql'=>array(
    'host'=> '127.0.0.1',
    'username'=> 'root',
    'password'=> '',
     'db'=> 'login'
    ),
    'remember'=>array(
      'cookie_name'=>'hash',
      'cookie_expiry'=> 604800
    ),
    'session'=>array(
    'session_name' => 'user'
    )
);
//you shud include all classes
//require_once 'classes/Config.php';
//require_once 'classes/Config.php';
//spl-standard php library
spl_autoload_register(function($class){
   require_once 'classes/'.$class.'.php';
});
require_once 'functions/sanitize.php';
