<?php

namespace App\Enum;

use App\Models\CategoryProduct;

class CategoryProductEnum{

    public const TECHNOLOGY = "TECHNOLOGY";
    public const FASHION = "FASHION";
    public const IMMOBILE = "IMMOBILE";
    public const SPORT = "SPORT";
    public const AGRICULTURE = "AGRICULTURE";
    public const ANIMALS = "ANIMALS";
    public const VEHICLE = "VEHICLE";

    public static function values(){
        return [
            new CategoryProduct(["code"=>CategoryProductEnum::TECHNOLOGY, "label"=>"tecnologia","image" => ""]),
            new CategoryProduct(["code"=>CategoryProductEnum::FASHION, "label"=>"moda", "image" => ""]),
            new CategoryProduct(["code"=>CategoryProductEnum::IMMOBILE, "label"=>"imóvel","image" => ""]),
            new CategoryProduct(["code"=>CategoryProductEnum::SPORT, "label"=>"Desporto","image" => ""]),
            new CategoryProduct(["code"=>CategoryProductEnum::AGRICULTURE, "label"=>"Desporto","image" => ""]),
            new CategoryProduct(["code"=>CategoryProductEnum::ANIMALS, "label"=>"Desporto","image" => ""]),
            new CategoryProduct(["code"=>CategoryProductEnum::VEHICLE, "label"=>"Desporto","image" => ""]),
        ];
    }

}
