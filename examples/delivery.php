<?php

require __DIR__ . '/../vendor/autoload.php';

use Daavelar\FakerJson\FakerGeneratorWrapper;
use Daavelar\FakerJson\FakerJson;

$fakerGenerator = new FakerGeneratorWrapper();
$fakerJson = new FakerJson($fakerGenerator);
echo $fakerJson->generateFile(__DIR__ . '/delivery.json');