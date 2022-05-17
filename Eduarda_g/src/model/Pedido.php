<?php

namespace Model;

class Pedido
{
    //Atributos
    private $codPedido;
    public $itens;
    public $quant;
    public $pag;
    public $local;

    //Métodos / funções
    public function __construct()
    {
        //Método que será invocado toda vez
        //que esta classe for instanciada
        echo $this->gerarCodigo();
       $this->gerarDataEHora();
    }


    private function gerarDataEHora()
    {
       date_default_timezone_set("America/Sao_Paulo");
       echo "<br>Date e hora do pedido:<br>";
       echo date("d/m/Y") . "<br>";
       echo date("H:i:s");
    }

    public function gerarCodigo()
    {
        $this->codPedido = random_int(100,500);
        return $this->codPedido;
    }


    public function gerarDesconto()
    {
        if( $this->quant >= 5 && $this->local == 'Centro' || $this->local == "Salomé" ) {
            return "<h1 style='color: white; background-color: green'> 10% Off </h1>";
        }
    }
}