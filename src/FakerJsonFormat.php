<?php

namespace Daavelar\FakerJson;

enum FakerJsonFormat: string
{
    case JSON = 'json';
    case ARRAY = 'array';
    case PRETTY_JSON = 'pretty_json';
}