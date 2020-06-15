<?php

use Facade\Facade;

function clientCode(Facade $facade,$id)
{
    echo $facade->getProductInfoById($id);
}
