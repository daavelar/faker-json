<?php

require __DIR__ . '/../vendor/autoload.php';

use Daavelar\FakerJson\FakerGeneratorWrapper;
use Daavelar\FakerJson\FakerJson;

$fakerGenerator = new FakerGeneratorWrapper();
$fakerJson = new FakerJson($fakerGenerator, 'pt_BR');
echo $fakerJson->compileFile(__DIR__ . '/delivery.json');