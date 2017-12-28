<?php
class HouseMediator
{
    public function doSomething(Tenant $tenant)
    {
        $obj = new Landlord('房东');
        $obj->rentHouse($tenant->name);
    }
}