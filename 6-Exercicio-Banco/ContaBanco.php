<?php

class ContaBanco {
    public $nunconta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    public function abrirConta($t){
        $this->setTipo($t);
        $this->status = TRUE;
        if($t == "CC"){
            $this->saldo = 50;
        }
        elseif ($t == "CP") {
            $this->saldo = 150;
        }
       else {
            echo "<p>Erro!!! Tipo de Conta Desconhecida!</p>";
       }
    }
    
    public function fecharConta(){
        if($this->getSaldo() == 0){
            $this->status = FALSE;
            echo "<p>Conta finalizada com Sucesso!</p>";
        }
        elseif($this->getSaldo() > 0){
            echo "<p>Conta com Saldo. Reire todo o saldo para finalizar!</p>";
        }
        else {
            echo "<p>Saldo Negativo. Impossível Finalizar Conta!</p>";
        }
    }
    
    public function depositar($v){
        $this->saldo = ($this->getSaldo() + $v);
    }
    
    public function sacar($v){
        if($this->getSaldo() >= $v){
            $this->saldo = ($this->getSaldo() - $v);
        }
        else {
            echo "<p>Saldo Insuficiente</p>";
        }
        
    }
    
    public function pagarMensal(){
        if($this->getSaldo() >= 12){
            $this->saldo = ($this->getSaldo() - 12);
        }
        else {
            echo "<p>Saldo Insuficient</p>";
        }
    }
    
    //Metodos Especiais
    
    public function __construct() {
        $this->status = FALSE;
        $this->saldo = 0;
    }


    public function getNumConta(){
        return $this->nunconta;
    }
    
    public function getTipo() {
        return $this->tipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getStatus() {
        return $this->status;
    }
    
    public function setNumConta($conta){
        $this->nunconta = $conta;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setDono($dono) {
        $this->dono = $dono;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    public function setStatus($status) {
        $this->status = $status;
    }




    
}
