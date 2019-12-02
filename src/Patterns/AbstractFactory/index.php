<?php

require __DIR__ . './../../../vendor/autoload.php';
require 'clientCode.php';

use Patterns\AbstractFactory\B2BProductPageFactory;
use Patterns\AbstractFactory\B2CProductPageFactory;

echo "Client: Testing client code with the first factory type:\n";
clientCode(new B2BProductPageFactory());

echo "Client: Testing the same client code with the second factory type:\n";
clientCode(new B2CProductPageFactory());