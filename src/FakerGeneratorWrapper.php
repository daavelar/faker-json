<?php

namespace Daavelar\FakerJson;

use Faker\Generator;

class FakerGeneratorWrapper
{
    private Generator $fake;

    public function __construct($fakerGenerator)
    {
        $this->fake = $fakerGenerator;
    }

    public function uuid()
    {
        return $this->fake->uuid;
    }
}