<?php

require_once('config.php');


//auto load 
function __autoload($class_name){
    require_once 'lib/'.$class_name.'.php';
}

