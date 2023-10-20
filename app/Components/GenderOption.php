<?php

namespace App\Components;

class GenderOption extends Option{

    public const DEFAULT = "OTHER";
    public const MALE = "MALE";
    public const FEMALE = "FEMALE";

    function __construct($gender = "")
    {
        $this->options = [
            new Option(GenderOption::MALE,"Masculino", GenderOption::MALE == $gender),
            new Option(GenderOption::FEMALE,"Femenino",GenderOption::FEMALE == $gender),
            new Option(GenderOption::DEFAULT,"Outro",GenderOption::DEFAULT == $gender),
        ];
    }

    public static function factory($gender =""){
        return new GenderOption($gender);
    }

}
