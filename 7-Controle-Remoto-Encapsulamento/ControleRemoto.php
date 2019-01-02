<?php

require_once 'Controlador.php';

class ControleRemoto implements Controlador {
    //Atributos
    private $volume;
    private $ligado;
    private $tocando;
    
    //Métodos Especiais
    public function __construct() {
        $this->setVolume(50);
        $this->setLigado(FALSE);
        $this->setTocando(FALSE);
    }
    private function getVolume() {
        return $this->volume;
    }
    private function getLigado() {
        return $this->ligado;
    }
    private function getTocando() {
        return $this->tocando;
    }
    private function setVolume($volume) {
        $this->volume = $volume;
    }
    private function setLigado($ligado) {
        $this->ligado = $ligado;
    }
    private function setTocando($tocando) {
        $this->tocando = $tocando;
    }
    
    //Sobrescrevendo os métodos abstratos da Interface Controlador
    public function ligar() {
        $this->setLigado(true);
    }
    public function desligar() {
        $this->setLigado(FALSE);
    }
    public function abrirMenu() {
        echo "<br/>Está Ligado? " . ($this->getLigado()?"Sim":"Não");
        echo "<br/>Está Tocando " . ($this->getTocando()?"Sim":"Não");
        echo "<br/>Volume: " . $this->getVolume();
        for($i = 1; $i <= $this->getVolume(); $i += 10){
            echo "|";
        }
            echo "<br/>";
    }
    public function fecharMenu() {
        echo "<br/>Fechar Menu!";
    }
    public function ligarMudo() {
        if($this->getLigado() == true && $this->getVolume() > 0){
            $this->setVolume(0);
        }
    }
    public function desligarMudo() {
        if($this->getLigado() == true && $this->getVolume() == 0){
            $this->setVolume(50);
        }
    }
    public function maisVolume() {
        if($this->getLigado() == true){
            //$this->volume = ($this->getVolume() + 1);
            $this->setVolume($this->getVolume() + 5);
        } else {
            echo "<p>Erro! Não posso aumentar o Volume</p>";
        }
    }
    public function menosVolume() {
        if($this->getLigado() == true){
            //$this->volume = ($this->getVolume() - 1);
            $this->setVolume($this->getVolume() - 5);
        } else {
            echo "<p>Erro! Não posso diminuir o Volume</p>";
        }
    }
    public function play() {
        //if($this->getLigado() && !($this->getTocando())){
        if($this->getLigado() == true && $this->getTocando() == false){
            $this->setTocando(true);
        }
    }
    public function pause() {
        //if($this->getLigado() && $this->getTocando()){
        if($this->getLigado() == true && $this->getTocando() == true){
            $this->setTocando(false);
        }
    }
}
?>
