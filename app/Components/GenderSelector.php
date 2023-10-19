<?php

namespace App\Components;

use App\Interface\ISelector;

class GenderSelector implements ISelector{

    public const DEFAULT = "OTHER";
    public const MALE = "MALE";
    public const FEMALE = "FEMALE";

    private $array = [
        GenderSelector::MALE => "Masculino",
        GenderSelector::FEMALE => "Femenino",
        GenderSelector::DEFAULT => "Outro",
    ];

    public static function factory(){
        return new GenderSelector();
    }

    public function values(){
        return array_keys($this->array);
    }

    public function elements(){
        return $this->array;
    }

}
