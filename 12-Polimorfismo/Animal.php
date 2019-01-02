<?php

abstract class Animal {
    //Atributos
    protected $peso;
    protected $idade;
    protected $membros;
    
    //Métodos
    abstract public function locomover();
    abstract public function alimentar();
    abstract public function emitirSom();
    
    //Métodos Especiais
    public function getPeso() {
        return $this->peso;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function getMembros() {
        return $this->membros;
    }
    public function setPeso($peso) {
        $this->peso = $peso;
    }
    public function setIdade($idade) {
        $this->idade = $idade;
    }
    public function setMembros($membros) {
        $this->membros = $membros;
    }
}
