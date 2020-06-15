<?php

require __DIR__ . './../../../../vendor/autoload.php';

require 'clientCode.php';

use Facade\CategoryApi;
use Facade\Facade;
use Facade\ProductApi;

$productApi = new ProductApi();
$categoryApi = new CategoryApi();

$facade = new Facade($categoryApi,$productApi);

clientCode($facade,1);
