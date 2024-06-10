<?php

namespace Daavelar\FakerJson;

use InvalidArgumentException;

class FakerJson
{
    private $fake;

    public function __construct($fakerGenerator)
    {
        $this->fake = $fakerGenerator;
    }

    public function generate(string $template, FakerJsonFormat $format = FakerJsonFormat::ARRAY)
    {
        $decodedTemplate = json_decode($template, true);

        array_walk_recursive($decodedTemplate, function (&$item) {
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
            if (str($item)->startsWith('randomElement')) {
                $args = explode(',', str_replace('randomElement(', '', str_replace(')', '', $item)));

                $args = array_map('trim', $args);

                $item = $this->fake->randomElement($args);
            }
            if (str($item)->startsWith('lexify')) {
                $args = str_replace('lexify(', '', str_replace(')', '', $item));
                $item = $this->fake->lexify($args);
            }
            if (str($item)->startsWith('numerify')) {
                $args = str_replace('numerify(', '', str_replace(')', '', $item));
                $item = $this->fake->numerify($args);
            }
            if (str($item)->startsWith('numberBetween')) {
                $args = explode(',', str_replace('numberBetween(', '', str_replace(')', '', $item)));
                $item = $this->fake->numberBetween($args[0], $args[1]);
            }
            if (str($item)->contains('()')) {
                $method = str($item)->before('(')->toString();
                $args = str($item)->between('(', ')')->toString();

                if ($args == '') {
                    $item = $this->fake->$method();
                } else {
                    $args = explode(',', $args);
                    $item = $this->fake->$method($args);
                }
            }

        });

        return $this->present($decodedTemplate, $format);
    }

    private function present(array $template, $format)
    {
        if ($format == FakerJsonFormat::JSON) {
            return json_encode($template);
        }

        if ($format == FakerJsonFormat::PRETTY_JSON) {
            return json_encode($template, JSON_PRETTY_PRINT);
        }

        if ($format == FakerJsonFormat::ARRAY) {
            return $template;
        }

        throw new InvalidArgumentException('Invalid format');
    }
}