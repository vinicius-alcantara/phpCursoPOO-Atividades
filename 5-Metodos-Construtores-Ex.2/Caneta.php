<?php

class Caneta {
    private $modelo;
    private $cor;
    private $ponta;
    private $tampada;
    
    public function __construct($m, $c, $p) { //Constrututor que recebe Parâmetro
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->setTampar();
    }
    
    public function setTampar(){
        $this->tampada = true;
    }
    
    public function setDestampar(){
        $this->tampada = FALSE;
    }
    
    public function escrever(){
        if($this->tampada == FALSE){
            echo "<p>Estou escrevendo...</p>";
        }
            else {
                echo "<p>ERRO! Destampe a caneta para escrever!</p>";
            }
    }
    
}
