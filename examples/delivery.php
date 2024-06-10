<?php

require __DIR__ . '/../vendor/autoload.php';

use Daavelar\FakerJson\FakerGeneratorWrapper;
use Daavelar\FakerJson\FakerJson;
use Daavelar\FakerJson\FakerJsonFormat;

$fakerGenerator = new FakerGeneratorWrapper();
$fakerJson = new FakerJson($fakerGenerator);

echo $fakerJson->generate(file_get_contents(__DIR__ . '/delivery.json'), FakerJsonFormat::PRETTY_JSON);