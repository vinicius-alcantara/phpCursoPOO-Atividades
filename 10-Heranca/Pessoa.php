<?php

class Pessoa {
    //Atributos
    private $nome;
    private $idade;
    private $sexo;
    
    //Método
    public function fazerAniv(){
        $this->setIdade($this->getIdade() + 1);
    }
    
    //Métodos Especiais
    
    function getNome() {
        return $this->nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function getSexo() {
        return $this->sexo;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }


}
?>