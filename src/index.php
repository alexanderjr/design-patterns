<?php
require("Singleton.php");

use App\Singleton\LogsSingleton;

$logs1 = LogsSingleton::obterInstancia();
$logs2 = LogsSingleton::obterInstancia();

if($logs1 === $logs2){
    echo "Mesma instância";
}
