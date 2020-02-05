<?php

use AbstractFactory\B2BProductPageFactory;
use AbstractFactory\B2CProductPageFactory;

require __DIR__ . './../../../../vendor/autoload.php';
require 'clientCode.php';

echo "Client: Testing client code with the first factory type:\n";
clientCode(new B2BProductPageFactory());

echo "Client: Testing the same client code with the second factory type:\n";
clientCode(new B2CProductPageFactory());