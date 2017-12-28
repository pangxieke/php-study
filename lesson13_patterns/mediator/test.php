<?php
function autoload($classname)
{
    require_once $classname . '.php';
}

spl_autoload_register('autoload');

$tenant = new Tenant('租客小明');

//直接租房
$landlord  = new Landlord('房东李四');
$landlord->rentHouse($tenant->name);

echo '<br>';

// 通过中介，不用理会房东是谁
(new HouseMediator())->doSomething($tenant);