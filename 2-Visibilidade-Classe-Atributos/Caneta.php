<?php

/**
 * Description of Caneta
 *
 * @author vinicius
 */
class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    
    public function rabiscar(){
        if($this->tampada == TRUE){
            echo "<p>ERRO! Não posso rabiscar</p><br/>";
        }
        else {
            echo "<p>Estou Rabiscando...</p>";
        }   
    }
    
    public function tampar(){
        $this->tampada = true;
    }
    
    public function destampar(){
        $this->tampada = false;
    }
}

?>
