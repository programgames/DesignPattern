<?php

require __DIR__ . './../../../../vendor/autoload.php';
require 'clientCode.php';

use Factory\ConfigurableProductFactory;
use Factory\SimpleProductFactory;

echo "App: Launched with the ConfigurableProductFactory.\n";
clientCode(new ConfigurableProductFactory());

echo "App: Launched with the SimpleProductFactory.\n";
clientCode(new SimpleProductFactory());
