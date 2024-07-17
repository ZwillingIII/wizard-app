<?php

namespace App\Helpers;

use App\Helpers\Dto\SpellDto;
use \GuzzleHttp\Client;

class Wizard
{
    const WIZARD_HTTP = 'https://wizard-world-api.herokuapp.com';

    private static string $link;

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

    public static function elixir(string $id)
    {
        self::$link = self::WIZARD_HTTP . '/Elixirs/' . $id;

        return new static();
    }

    public function get()
    {
        return (new Client([]))->request('GET', self::$link)->getBody()->getContents();
    }

    public static function getSpellById(string $id)
    {
        try {
            $data = json_decode((new Client([]))->request('GET', self::WIZARD_HTTP . '/Spells/' . $id)->getBody()->getContents());
            return new SpellDto($data->id, $data->name, $data->effect, $data->type);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public static function spell(string $id)
    {
        self::$link = self::WIZARD_HTTP . '/Spells/' . $id;

        return new static();
    }

    public static function ingredient(string $id)
    {
        self::$link = self::WIZARD_HTTP . '/Ingredients/' . $id;

        return new static();
    }
}