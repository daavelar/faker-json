<?php

require __DIR__ . '/../vendor/autoload.php';

use Daavelar\FakerJson\FakerJson;

$fakerJson = new FakerJson('pt_BR');
echo $fakerJson->evaluateFile(__DIR__ . '/delivery.json');