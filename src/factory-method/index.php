<?php

require("Product/FordKa.php");
require("FactoryFord.php");

$fabricaFord = new \FactoryMethod\FactoryFord();
$fordKa = $fabricaFord->criarCarro("ka");
$fordKa->acelerar();