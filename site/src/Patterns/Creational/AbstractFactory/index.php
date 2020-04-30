<?php

require __DIR__ . './../../../../vendor/autoload.php';
require 'clientCode.php';

use AbstractFactory\B2BProductFactory;
use AbstractFactory\B2CProductFactory;

echo "Client: Testing client code with the first factory type:\n";
clientCode(new B2BProductFactory());

echo "Client: Testing the same client code with the second factory type:\n";
clientCode(new B2CProductFactory());