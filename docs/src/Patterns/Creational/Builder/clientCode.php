<?php

use Builder\ConfigurableProductDirector;
use Builder\ECommerceConfigurableProductBuilder;
use Builder\SimpleProductDirector;
use Builder\ECommerceSimpleProductBuilder;

function clientCode(SimpleProductDirector $director, ConfigurableProductDirector $configurableProductDirector)
{
    $builder = new ECommerceSimpleProductBuilder();
    $director->setBuilder($builder);

    echo "Minimal Simple Product for e-commerce". PHP_EOL;
    $director->buildMinimalSimpleProduct("OroCommerce sticker");
    $builder->getProduct()->displayInfo();

    echo "Full Simple Product for e-commerce". PHP_EOL;
    $director->buildFullSimpleProduct("IPhone 11", "The cheapest smartphone", "0.99$");
    $builder->getProduct()->displayInfo();

    $builder = null;

    echo "Another example to show that we can have another Director with another type of builder" . PHP_EOL;
    $builder = new ECommerceConfigurableProductBuilder();
    $configurableProductDirector->setBuilder($builder);

    echo "Minimal Configurable Product for e-commerce". PHP_EOL;
    $configurableProductDirector->buildMinimalConfigurableProduct('Balloon');
    $builder->getProduct()->displayInfo();

    echo "Full Configurable Product for e-commerce";
    $configurableProductDirector->buildFullConfigurableProduct("IPhone 11", "The cheapest smartphone", "64 Go", "128 Go", "512 Go");
    $builder->getProduct()->displayInfo();
}
