<?php

if (!function_exists('tests_path')) {
    function tests_path(string $path)
    {
        return __DIR__ . '/../tests/' . $path;
    }
}

if (!function_exists('dd')) {
    function dd($string)
    {
        var_dump($string);

        exit;
    }
}

if (!function_exists('base_path')) {
    function base_path($path = '')
    {
        return __DIR__ . '/../' . $path;
    }
}
