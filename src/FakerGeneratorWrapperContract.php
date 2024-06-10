<?php

namespace Daavelar\FakerJson;

interface FakerGeneratorWrapperContract
{
    public function uuid();

    public function randomElement($array);

    public function randomDigit();

    public function randomFloat($nbMaxDecimals = null, $min = 0, $max = 100);

    public function numerify($string = '###');

    public function lexify($string = '????');

    public function numberBetween($min = 1000, $max = 9000);

    public function boolean($chanceOfGettingTrue = 50);

    public function date($format = 'Y-m-d', $max = 'now');

    public function dateTime($format = 'Y-m-d H:i:s', $max = 'now');

    public function streetName();

    public function buildingNumber();

    public function citySuffix();

    public function city();

    public function stateAbbr();

    public function postcode();

    public function firstName();

    public function phoneNumber();

    public function word();
}