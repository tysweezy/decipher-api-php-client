<?php

// implementing the package

require_once __DIR__ . '/vendor/autoload.php';

use Decipher\Api\Survey;

$s = new Survey();

echo $s->echoPhrase("hello there");

echo $s->getHttp();