<?php

namespace App\Helpers;

use GuzzleHttp\Client;

class Wizard
{
    const WIZARD_HTTP = 'https://wizard-world-api.herokuapp.com';

    public $client = null;

    public function __construct()
    {
        $this->client = new Client([]);
    }

    public function getElixirs()
    {
        return $this->client->request('GET', self::WIZARD_HTTP . '/Elixirs');
    }
}