<?php
require_once 'Animal.php';
class Reptil extends Animal{
    //Atributos
    protected $corEscama;
    
    //Métodos Especiais
    public function getCorEscama() {
        return $this->corEscama;
    }
    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }

    //Métodos Abstratos
    public function alimentar() {
        echo "<p>Comendo Vegetais</p>";
    }

    public function emitirSom() {
        echo "<p>Som de Réptil</p>";
    }

    public function locomover() {
        echo "<p>Rastejando!</p>";
    }

}
