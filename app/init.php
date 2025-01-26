<?php 
define('GETHUK', true);

spl_autoload_register(function($class) {
  require_once 'core/' . $class . '.php';
});

$GLOBALS['path'] = '/my-framework/public/';
?>
