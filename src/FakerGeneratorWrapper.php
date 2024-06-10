<?php

namespace Daavelar\FakerJson;

use Faker\Factory;

class FakerGeneratorWrapper implements FakerGeneratorWrapperContract
{
    private $locale = 'pt_BR';

    public function uuid()
    {
        return Factory::create($this->locale)->uuid();
    }

    public function randomElement($array)
    {
        return Factory::create($this->locale)->randomElement($array);
    }

    public function randomDigit()
    {
        return Factory::create($this->locale)->randomDigit();
    }

    public function randomFloat($nbMaxDecimals = null, $min = 0, $max = 100)
    {
        return Factory::create($this->locale)->randomFloat($nbMaxDecimals, $min, $max);
    }

    public function numerify($string = '###')
    {
        return Factory::create($this->locale)->numerify($string);
    }

    public function lexify($string = '????')
    {
        return Factory::create($this->locale)->lexify($string);
    }

    public function numberBetween($min = 1000, $max = 9000)
    {
        return Factory::create($this->locale)->numberBetween($min, $max);
    }

    public function boolean($chanceOfGettingTrue = 50)
    {
        return Factory::create($this->locale)->boolean($chanceOfGettingTrue);
    }

    public function date($format = 'Y-m-d', $max = 'now')
    {
        return Factory::create($this->locale)->date($format, $max);
    }

    public function dateTime($format = 'Y-m-d H:i:s', $max = 'now')
    {
        return Factory::create($this->locale)->dateTime($format, $max);
    }

    public function streetName()
    {
        return Factory::create($this->locale)->streetName();
    }

    public function buildingNumber()
    {
        return Factory::create($this->locale)->buildingNumber();
    }

    public function citySuffix()
    {
        return Factory::create($this->locale)->citySuffix();
    }

    public function city()
    {
        return Factory::create($this->locale)->city();
    }

    public function stateAbbr()
    {
        return Factory::create($this->locale)->stateAbbr();
    }

    public function postcode()
    {
        return Factory::create($this->locale)->postcode();
    }

    public function firstName()
    {
        return Factory::create($this->locale)->firstName();
    }

    public function phoneNumber()
    {
        return Factory::create($this->locale)->phoneNumber();
    }

    public function word()
    {
        return Factory::create($this->locale)->word();
    }
}