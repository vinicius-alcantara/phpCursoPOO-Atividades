<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa{
    //Atributos
    private $matr;
    private $curso;
    
    //Método
    // Final impede a sobrescrita deste Método
    public final function pagarMensal(){
        echo "Mensalidade paga em valor integral!";
    }
    
    //Métodos Especiais
    public function getMatr() {
        return $this->matr;
    }
    public function getCurso() {
        return $this->curso;
    }
    public function setMatr($matr) {
        $this->matr = $matr;
    }
    public function setCurso($curso) {
        $this->curso = $curso;
    }          
}
