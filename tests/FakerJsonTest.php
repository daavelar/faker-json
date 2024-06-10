<?php

namespace Tests;

use Daavelar\FakerJson\FakerGeneratorWrapper;
use Daavelar\FakerJson\FakerJson;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class FakerJsonTest extends TestCase
{
    #[DataProvider('methods'), Test]
    public function translation_method_to_fake_data($methodName, $methodCall, $value)
    {
        $fakerGeneratorMocked = $this->createMock(FakerGeneratorWrapper::class);
        $fakerGeneratorMocked->method($methodName)->willReturn($value);

        $fakerJson = new FakerJson($fakerGeneratorMocked);

        $compile = '{"key": "' . $methodCall . '"}';
        $result = $fakerJson->generate($compile);
        $expected = ['key' => $value];

        $this->assertEquals($expected, $result);
    }

    public static function methods()
    {
        return [
            ['uuid', 'uuid()', '1234'],
            ['randomElement', 'randomElement(1,2,3)', '2'],
            ['randomElement', 'randomElement(1, 2, 3)', '2'],
            ['randomElement', 'randomElement(element1, element2)', 'element2'],
            ['lexify', 'lexify(????)', 'abcd'],
            ['numerify', 'numerify(####)', '1234'],
            ['randomDigit', 'randomDigit()', '2'],
            ['randomFloat', 'randomFloat(1)', '2.5'],
            ['randomFloat', 'randomFloat(1,2)', '2.5'],
            ['randomFloat', 'randomFloat(1,2,3)', '2.5'],
            ['numberBetween', 'numberBetween(1,2)', '1234'],
            ['boolean', 'boolean()', 'true'],
            ['date', 'date()', '2020-01-01'],
            ['word', 'word()', 'word'],
            ['phoneNumber', 'phoneNumber()', '1234'],
            ['postcode', 'postcode()', '1234'],
            ['stateAbbr', 'stateAbbr()', 'NY'],
            ['city', 'city()', 'New York'],
            ['buildingNumber', 'buildingNumber()', '1234'],
            ['streetName', 'streetName()', 'Main St'],
        ];
    }


}
