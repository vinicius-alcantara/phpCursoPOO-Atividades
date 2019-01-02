<?php
require_once 'LutadoresUFC.php';
class Lutador implements LutadoresUFC{
    //Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    
    //Métodos Acessores e Modificadores
    
    function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }
    
    function getNome() {
        return $this->nome;
    }

    function getNacionalidade() {
        return $this->nacionalidade;
    }

    function getIdade() {
        return $this->idade;
    }

    function getAltura() {
        return $this->altura;
    }

    function getPeso() {
        return $this->peso;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getVitorias() {
        return $this->vitorias;
    }

    function getDerrotas() {
        return $this->derrotas;
    }

    function getEmpates() {
        return $this->empates;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNacionalidade($nascionalidade) {
        $this->nacionalidade = $nascionalidade;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setAltura($altura) {
        $this->altura = $altura;
    }

    function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function setCategoria() {
        
        if($this->getPeso() <= 52.2){
            $this->categoria = "Categoria Inválida";
        } elseif ($this->getPeso() > 52.2 && $this->getPeso() <= 70.3) {
            $this->categoria = "Leve";
        } elseif ($this->getPeso() > 70.3 && $this->getPeso() <= 83.9) {
            $this->categoria = "Médio";
        } elseif($this->getPeso() > 83.9 && $this->getPeso() <= 120.2){
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Categoria Inválida";
        }
            
    }

    function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    function setEmpates($empates) {
        $this->empates = $empates;
    }

    
    //Sobrescreve métodos abstratos na interface LutadoresUFC
    public function apresentar() {
        echo "<p>---------------------------------------------</p>";
        echo "Chegou a hora! O lutador " . $this->getNome();
        echo ". Ele veio diretamente de " . $this->getNacionalidade();
        echo ", tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . " Quilos." . " Possui " . $this->getVitorias() . " Vitórias, " . $this->getDerrotas() . " Derrotas e " . $this->getEmpates() . " Empates.";
    }

    public function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }

    public function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function status() {
        echo "<p>------------------------</p>";
        echo $this->getNome() . " é um peso " . $this->getCategoria() . " e possui " .$this->getVitorias() . " Vitórias, " . $this->getDerrotas() . " Derrotas e " . $this->getEmpates() . " Empates.";
    }

}
?>