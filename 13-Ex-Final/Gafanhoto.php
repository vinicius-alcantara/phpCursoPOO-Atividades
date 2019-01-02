<?php
require_once 'Pessoa.php';
class Gafanhoto extends Pessoa{
    //Atributos
    private $login;
    private $totAssistindo;
    
    //Método
    public function viuMaisUm(){
        $this->setTotAssistindo($this->getTotAssistindo() + 1);
    }
    
    //Métodos Acessores e Modificadores
    public function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistindo = 0;
    }
    
    public function getLogin() {
        return $this->login;
    }
    public function getTotAssistindo() {
        return $this->totAssistindo;
    }
    public function setLogin($login) {
        $this->login = $login;
    }
    public function setTotAssistindo($totAssistindo) {
        $this->totAssistindo = $totAssistindo;
    }
}
