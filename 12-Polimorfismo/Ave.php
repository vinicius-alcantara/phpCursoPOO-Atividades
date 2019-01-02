<?php
require_once 'Animal.php';
class Ave extends Animal{
    //Atributos
    protected $corPena;
    
    //Métodos Especiais
    public function getCorPena() {
        return $this->corPena;
    }
    public function setCorPena($corPena) {
        $this->corPena = $corPena;
    }

    //Método
    public function fazerNinho(){
        echo "<p>Fazendo Ninho!</p>";
    }
    
     //Métodos Abstratos
    public function alimentar() {
        echo "<p>Comendo Frutas!</p>";
    }
    public function emitirSom() {
        echo "<p>Som de Ave!</p>";
    }
    public function locomover() {
        echo "<p>Voando!</p>";
    }

   
    

}
