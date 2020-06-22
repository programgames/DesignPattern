<?php

use Bridge\PageController;

function clientCode(PageController $pageController)
{
    echo $pageController->getView();
}
