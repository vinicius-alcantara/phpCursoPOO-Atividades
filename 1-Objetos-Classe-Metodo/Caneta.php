<?php

/**
 * Description of Caneta
 *
 * @author vinicius
 */
class Caneta {
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    
    function rabiscar(){
        if($this->tampada == TRUE){
            echo "<p>ERRO! Não posso rabiscar</p><br/>";
        }
        else {
            echo "<p>Estou Rabiscando...</p>";
        }   
    }
    
    function tampar(){
        $this->tampada = true;
    }
    
    function destampar(){
        $this->tampada = false;
    }
}

?>
