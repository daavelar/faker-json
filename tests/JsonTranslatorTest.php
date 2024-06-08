<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class JsonTranslatorTest extends TestCase
{
    public function test_generate_string_from_template()
    {
        $fakerJson = new FakerJson();
        $expectedJson = '{"my_uuid":"981723817238123"}';

        $this->assertEquals($expectedJson, $fakerJson->evaluate('{"my_uuid": "${uuid}"}'));
    }
}
