<pre>
<?php
    require_once 'Pessoa.php';
    require_once 'Visitante.php';
    require_once 'Aluno.php';
    require_once 'Bolsista.php';
        
    $v1 = new Visitante();
    $v1->setNome("Fulano");
    $v1->setIdade(50);
    $v1->setSexo("M");
    $v1->fazerAniver();
        print_r($v1);
        echo "<br/>";
        
    $a1 = new Aluno();
    $a1->setNome("Thiago Alcântara");
    $a1->setIdade(33);
    $a1->setSexo("M");
    $a1->setCurso("Computação");
    $a1->setMatr(1111);
        print_r($a1);
        echo "<br/>";
        
    $b1 = new Bolsista("Junior", 35, "M");
    $b1->pagarMensal();
?>
</pre>
