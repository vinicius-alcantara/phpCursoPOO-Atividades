<?php

class Caneta {
    private $modelo;
    private $cor;
    private $ponta;
    private $tampada;
    
    public function __construct() { //Definindo Valores aos atributis automaticamente
        $this->modelo = "BIC";
        $this->cor = "Azul";
        $this->ponta = 0.7;
        $this->tampada = TRUE;
    }
    
    public function setTampar(){
        $this->tampada = true;
    }
    
    public function setDestampar(){
        $this->tampada = FALSE;
    }
    
    public function escrever(){
        if($this->tampada == FALSE){
            echo "Estou escrevendo...";
        }
            else {
                echo "ERRO! Destampe a caneta para escrever!";
            }
    }
    
}
