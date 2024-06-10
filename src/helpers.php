<?php

use Faker\Factory;

function tests_path(string $path)
{
    return __DIR__ . '/../tests/' . $path;
}

function dd($string)
{
    var_dump($string);

    exit;
}

if (! function_exists('base_path')) {
    /**
     * Get the path to the base of the install.
     *
     * @param  string  $path
     * @return string
     */
    function base_path($path = '')
    {
        return __DIR__ . '/../' . $path;
    }
}
