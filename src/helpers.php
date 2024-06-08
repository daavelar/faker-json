<?php

use Faker\Factory;

function tests_path(string $path)
{
    return __DIR__ . '/../tests/' . $path;
}

function base_path(string $path)
{
    return __DIR__ . '/../' . $path;
}

function dd($string)
{
    var_dump($string);

    exit;
}