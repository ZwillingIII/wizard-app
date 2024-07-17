<?php
namespace App\Helpers\Dto;

class SpellDto
{
    public string $id;
    public string $name;
    public string $effect;
    public string $type;

    public function __construct(string $id, string $name, string $effect, string $type)
    {
        $this->id = $id;
        $this->name = $name;
        $this->effect = $effect;
        $this->type = $type;
    }
}