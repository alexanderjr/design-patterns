<?php
namespace FactoryMethod\Product;

require("CarroProduct.php");

class Onix implements CarroProduct
{
    public function acelerar()
    {
        print("Acelerando Onix");
    }

    public function frear()
    {
        print("Freando Onix");
    }

    public function trocarMarcha()
    {
        print("Trocar Marcha Onix");
    }

}