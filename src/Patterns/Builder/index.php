<?php

require __DIR__ . './../../../vendor/autoload.php';
require 'clientCode.php';

use Builder\ConfigurableProductDirector;
use Builder\SimpleProductDirector;

$simpleProductDirector = new SimpleProductDirector();
$configurableProductDirector =  new ConfigurableProductDirector();
clientCode($simpleProductDirector,$configurableProductDirector);