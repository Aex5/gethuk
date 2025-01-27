<?php 
define('GETHUK', true);

spl_autoload_register(function($class) {
  require_once 'core/' . $class . '.php';
  require_once 'core/class/form_builder.php';
});

$GLOBALS['path'] = '/my-framework/public/';
?>
