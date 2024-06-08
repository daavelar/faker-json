<?php

namespace Daavelar\FakerJson;

class FakerJson
{
    private $fake;

    public function __construct($fakerGenerator)
    {
        $this->fake = $fakerGenerator;
    }

    public function compileFile(string $file): string
    {
        return $this->compile(file_get_contents($file));
    }

    public function compile(string $template): string
    {
        $decodedTemplate = json_decode($template, true);

        array_walk_recursive($decodedTemplate, function (&$item) {
            if (str($item)->startsWith('uuid')) {
                $item = $this->fake->uuid();
            }
            if (str($item)->startsWith('randomElement')) {
                $itemValues = explode(',', str_replace('randomElement(', '', str_replace(')', '', $item)));
                $item = $this->fake->randomElement($itemValues);
            }
            if (str($item)->startsWith('lexify')) {
                $item = $this->fake->lexify(str_replace('lexify(', '', str_replace(')', '', $item)));
            }
            if (str($item)->startsWith('numerify')) {
                $item = $this->fake->numerify(str_replace('numerify(', '', str_replace(')', '', $item)));
            }
            if (str($item)->startsWith('randomDigit')) {
                $item = $this->fake->randomDigit();
            }
            if (str($item)->startsWith('randomFloat')) {
                $args = explode(',', str_replace('randomFloat(', '', str_replace(')', '', $item)));
                if (count($args) == 1) {
                    $args[1] = 0;
                    $args[2] = 100;
                }
                if (count($args) == 2) {
                    $args[2] = 100;
                }
                $item = $this->fake->randomFloat($args[0], $args[1], $args[2]);
            }
            if (str($item)->startsWith('numberBetween')) {
                $args = explode(',', str_replace('numberBetween(', '', str_replace(')', '', $item)));
                $item = $this->fake->numberBetween($args[0], $args[1]);
            }
            if (str($item)->startsWith('boolean')) {
                $item = $this->fake->boolean();
            }
            if (str($item)->startsWith('dateTime')) {
                $item = $this->fake->dateTime();
            }
            if (str($item)->startsWith('date')) {
                $item = $this->fake->date();
            }
            if (str($item)->startsWith('streetName')) {
                $item = $this->fake->streetName();
            }
            if (str($item)->startsWith('buildingNumber')) {
                $item = $this->fake->buildingNumber();
            }
            if (str($item)->startsWith('citySuffix')) {
                $item = $this->fake->citySuffix();
            }
            if (str($item)->startsWith('city')) {
                $item = $this->fake->city();
            }
            if (str($item)->startsWith('stateAbbr')) {
                $item = $this->fake->stateAbbr();
            }
            if (str($item)->startsWith('postcode')) {
                $item = $this->fake->postcode();
            }
            if (str($item)->startsWith('firstName')) {
                $item = $this->fake->firstName();
            }
            if (str($item)->startsWith('phoneNumber')) {
                $item = $this->fake->phoneNumber();
            }
            if (str($item)->startsWith('word')) {
                $item = $this->fake->word();
            }
        });

        return json_encode($decodedTemplate);
    }
}