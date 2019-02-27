<?php

namespace FactoryMethod;

use FactoryMethod\Product\FordKa;

require("Product/FordKa.php");

class FactoryFord implements \FactoryMethod\CarroFactory
{
    public function criarCarro(string $modelo): \FactoryMethod\Product\CarroProduct
    {
        if($modelo === "ka"){
            return new FordKa();
        }

        throw new \Exception("Carro não existente na base Ford");
    }

}