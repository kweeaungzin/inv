<?php

require_once "config/config.php";
// require_once "libraries/Core.php";

spl_autoload_register(function ($class) {
    require_once 'libraries/' . $class . '.php';
});