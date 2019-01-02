<?php
require_once 'Pessoa.php';
class Professor extends Pessoa{
    //Atributos
    private $especialidade;
    private $salario;
    
    //Método
    public function receberAum($aumento){
        $this->setSalario($this->getSalario() + $aumento);
    }
    
    //Métodos Especiais
    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }


}
