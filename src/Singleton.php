<?php
namespace App\Singleton;

class LogsSingleton {
    protected static $instancia;

    private function __construct(){}

    public function gravarLog(array $dados){
        $nomeArquivo = "logs.txt";

        $logsAnteriores = [];

        if(filesize($nomeArquivo) > 0){
            $conteudoArquivo = file_get_contents($nomeArquivo);
            $logsAnteriores = json_decode($conteudoArquivo, true);
        }

        $logsAnteriores[] = $dados;
        $arquivo = fopen($nomeArquivo, 'w');

        fwrite($arquivo, json_decode($logsAnteriores));
        fclose($arquivo);
    }

    public static function obterInstancia(): self {
        if(empty(self::$instancia)){
            print ("Nova Instancia");
            return self::$instancia = new $instancia;
        }
        print ("Velha Instancia");
        return self::$instancia;
    }
}