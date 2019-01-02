<?php
require_once 'Lutador.php';
class Luta {
    //Atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;
    
    //Métodos
    public function marcarLuta($l1, $l2){
        if($l1->getCategoria() === $l2->getCategoria() && $l1 != $l2) {
            $this->setAprovada(true);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
        } else {
            $this->setAprovada(false);
            $this->setDesafiado(NULL);
            $this->setDesafiante(NULL);
        }
    }
    public function lutar(){
        if($this->aprovada == true){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            
            switch ($vencedor) {
                case 0: //Empate
                    echo "<p>Empate!</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1: //Desafiado Ganha
                    echo "<p>" . $this->desafiado->getNome() . "Venceu!" . "</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;               
                case 2: //Desafiante Ganha
                    echo "<p>" . $this->desafiante->getNome() . "Venceu!" . "</p>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
            }
        } else {
            echo "<p>Essa luta não pode acontecer!</p>";
        }
    }
    
    //Métodos Especiais
    
    public function getDesafiado(){
        return $this->desafiado;
    }
    public function setDesafiado($desafiado){
        $this->desafiado = $desafiado;
    }
    function getDesafiante() {
        return $this->desafiante;
    }
    function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }
    function getRounds() {
        return $this->rounds;
    }
    function setRounds($rounds) {
        $this->rounds = $rounds;
    }
    function getAprovada() {
        return $this->aprovada;
    }
    function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }


}

?>
