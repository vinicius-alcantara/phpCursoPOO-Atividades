<?php
require_once 'Animal.php';
class Peixe extends Animal{
    //Atributos
    protected $corEscama;
    
    //Métodos Especiais
    public function getCorEscama() {
        return $this->corEscama;
    }
    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }
    
    //Método
    public function soltarBolha(){
        echo "<p>Soltando uma Bolha!</p>";
    }

    //Métodos Abstratos
    public function alimentar() {
        echo "<p>Comendo Substâncias!</p>";
    }

    public function emitirSom() {
        echo "<p>Peixe Não faz som!</p>";
    }

    public function locomover() {
        echo "<p>Nadando!</p>";
    }

}
