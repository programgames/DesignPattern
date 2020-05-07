<?php

require __DIR__ . './../../../../vendor/autoload.php';
require 'clientCode.php';

use Composite\LayoutContainer;
use Composite\LayoutObject;

$text = new LayoutObject('<p>I\'m a leaf :).</p>');
$text2 = new LayoutObject('<p>I\'m another leaf :).</p>');

$div = new LayoutContainer('<div>','</div>');
$div->add($text);
$div->add($text2);

$body = new LayoutContainer('<body>','</body>');
$body->add($div);

$htmlTag = new LayoutContainer('<html>','</html>');
$htmlTag->add($body);

clientCode($htmlTag);