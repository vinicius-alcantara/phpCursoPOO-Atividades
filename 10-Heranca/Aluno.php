<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa{
    //Atributos
    private $matr;
    private $curso;
    
    //Métodos
    public function cancelarMatr(){
        if($this->getMatr() == TRUE){
            $this->setMatr(FALSE);
        } else {
            echo "A matrícla já está cancelada!";
        }
    }
    
    //Métodos Especiais
   
    function getMatr() {
        return $this->matr;
    }

    function getCurso() {
        return $this->curso;
    }

    function setMatr($matr) {
        $this->matr = $matr;
    }

    function setCurso($curso) {
        $this->curso = $curso;
    }
}
?>
