<?php

namespace FactoryMethod;

require("./Product/CarroProduct.php");

interface CarroFactory {
    public function criarCarro(string $modelo): \FactoryMethod\Product\CarroProduct;
}