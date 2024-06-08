<?php

namespace Daavelar\FakerJson;

use Faker\Factory;

class FakerGeneratorWrapper
{
    public function uuid()
    {
        return Factory::create()->uuid();
    }

    public function randomElement($array)
    {
        return Factory::create()->randomElement($array);
    }

    public function randomDigit()
    {
        return Factory::create()->randomDigit();
    }

    public function randomFloat($nbMaxDecimals = null, $min = 0, $max = 100)
    {
        return Factory::create()->randomFloat($nbMaxDecimals, $min, $max);
    }

    public function numerify($string = '###')
    {
        return Factory::create()->numerify($string);
    }

    public function lexify($string = '????')
    {
        return Factory::create()->lexify($string);
    }

    public function numberBetween($min = 1000, $max = 9000)
    {
        return Factory::create()->numberBetween($min, $max);
    }

    public function boolean($chanceOfGettingTrue = 50)
    {
        return Factory::create()->boolean($chanceOfGettingTrue);
    }

    public function date($format = 'Y-m-d', $max = 'now')
    {
        return Factory::create()->date($format, $max);
    }

    public function dateTime($format = 'Y-m-d H:i:s', $max = 'now')
    {
        return Factory::create()->dateTime($format, $max);
    }

    public function streetName()
    {
        return Factory::create()->streetName();
    }

    public function buildingNumber()
    {
        return Factory::create()->buildingNumber();
    }

    public function citySuffix()
    {
        return Factory::create()->citySuffix();
    }

    public function city()
    {
        return Factory::create()->city();
    }

    public function stateAbbr()
    {
        return Factory::create()->stateAbbr();
    }

    public function postcode()
    {
        return Factory::create()->postcode();
    }

    public function firstName()
    {
        return Factory::create()->firstName();
    }

    public function phoneNumber()
    {
        return Factory::create()->phoneNumber();
    }

    public function word()
    {
        return Factory::create()->word();
    }
}