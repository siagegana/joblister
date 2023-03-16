<?php session_start(); ?>
<?php 
//config file
require_once 'config.php';

//include helpers
require_once 'helpers/system_helper.php';


//Autoloader

spl_autoload_register(function ($class_name) 
{
    include 'classes/'.$class_name.'.php';
}); 
?>