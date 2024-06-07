<?php

namespace Tests;

use Daavelar\FakerJson\FakerGeneratorWrapper;
use Daavelar\FakerJson\FakerJson;
use PHPUnit\Framework\TestCase;

class JsonTranslatorTest extends TestCase
{
    public function test_generate_string_from_template()
    {
        $fakeGenerator = $this->createMock(FakerGeneratorWrapper::class);
        $fakeGenerator->method('uuid')->willReturn('981723817238123');

        $fakerJson = new FakerJson($fakeGenerator);
        $expectedJson = '{"my_uuid":"981723817238123"}';

        $this->assertEquals($expectedJson, $fakerJson->evaluate('{"my_uuid": "${uuid}"}'));
    }
}

