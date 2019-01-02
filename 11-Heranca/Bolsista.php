<?php
require_once 'Aluno.php';
class Bolsista extends Aluno{
    //Atributos
    private $bolsa;
    
    //Método
    public function renovarBolsa(){
        echo "<p>Bolsa Renovada!</p>";
    }
    
    /*
    public function pagarMensal(){
        echo $this->getNome() . "é Bolsista!";
    }
    */
    
    //Métodos Especiais
    public function getBolsa() {
        return $this->bolsa;
    }
    public function setBolsa($bolsa) {
        $this->bolsa = $bolsa;
    }
}
?>