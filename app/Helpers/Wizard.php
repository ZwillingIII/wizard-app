<?php

namespace App\Helpers;

use \GuzzleHttp\Client;

class Wizard
{
    const WIZARD_HTTP = 'https://wizard-world-api.herokuapp.com';

    public function __construct()
    {
    }

    public static function getElixirs()
    {
        return (new Client([]))->request('GET', self::WIZARD_HTTP . '/Elixirs')->getBody()->getContents();
    }

    public static function getSpells()
    {
        return (new Client([]))->request('GET', self::WIZARD_HTTP . '/Spells')->getBody()->getContents();
    }

    public static function getIngredients()
    {
        return (new Client([]))->request('GET', self::WIZARD_HTTP . '/Ingredients')->getBody()->getContents();
    }
}