<?php

require __DIR__ . './../../../vendor/autoload.php';

use Patterns\Factory\SimpleProductFactory;

require 'clientCode.php';

echo "App: Launched with the SimpleProductFactory.\n";
clientCode(new SimpleProductFactory());
echo "issou";
echo "\n\n";