<?php

class Caneta {
    public $modelo;
    private $ponta;
    
    public function getModelo(){
        return $this->modelo;
    }
    
    public function setModelo($m){
        $this->modelo = $m;
    }
    
    function getPonta() {
        return $this->ponta;
    }

    function setPonta($p) {
        $this->ponta = $p;
    }


}

?>
