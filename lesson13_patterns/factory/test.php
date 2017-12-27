<?php
function autoload($classname){
    require_once $classname . '.php';
}

spl_autoload_register('autoload');

Zoo::produce('chicken')->produce();
Zoo::produce('pig')->produce();