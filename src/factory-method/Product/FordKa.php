<?php

namespace FactoryMethod\Product;

require("CarroProduct.php");

class FordKa implements CarroProduct
{
    public function acelerar()
    {
        print("Acelerando FordKa");
    }

    public function frear()
    {
        print("Freando FordKa");
    }

    public function trocarMarcha()
    {
        print("Trocando Marcha FordKa");
    }

}