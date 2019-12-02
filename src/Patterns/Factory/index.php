<?php

require __DIR__ . './../../../vendor/autoload.php';

use Patterns\Factory\SimpleProductFactory;
use Patterns\Factory\ConfigurableProductFactory;

require 'clientCode.php';

echo "App: Launched with the ConfigurableProductFactory.\n";
clientCode(new ConfigurableProductFactory());

echo "App: Launched with the SimpleProductFactory.\n";
clientCode(new SimpleProductFactory());
