<?php

abstract class Pessoa {
    //Atribtos
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;
    
    //Método
    protected function ganharExp(){
        
    }
    
    //Métodos Acessores e Modificadores
    
    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->setExperiencia(0);
    }

    
    public function getNome() {
        return $this->nome;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function getSexo() {
        return $this->sexo;
    }
    public function getExperiencia() {
        return $this->experiencia;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function setIdade($idade) {
        $this->idade = $idade;
    }
    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }
    public function setExperiencia($experiencia) {
        $this->experiencia = $experiencia;
    }
}
?>
