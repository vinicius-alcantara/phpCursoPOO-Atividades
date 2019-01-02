<pre>
<?php
    require_once 'Pessoa.php';
    require_once 'Aluno.php';
    require_once 'Professor.php';
    require_once 'Funcionario.php';
    
    $p1 = new Pessoa;
    $p2 = new Aluno;
    $p3 = new Professor;
    $p4 = new Funcionario;
    
    $p1->setNome("Fulano");
    $p1->setIdade(40);
    $p1->setSexo("M");
    $p1->fazerAniv();
        print_r($p1);
        echo "<br/>";
        
    $p2->setNome("Vinícius Alcântara");
    $p2->setIdade(31);
    $p2->setSexo("M");
    $p2->setMatr(number_format(0002));
    $p2->setCurso("Computação");
        print_r($p2);
        echo "<br/>";
        
    $p3->setNome("Ricardo Queiros");
    $p3->setIdade(45);
    $p3->setSexo("M");
    $p3->setEspecialidade("Redes de Computadores");
    $p3->setSalario(number_format(10.000,3));
    $p3->receberAum(number_format(5.000,3));
        print_r($p3);
        echo "<br/>";
    
    $p4->setNome("Ana Lima");
    $p4->setIdade(35);
    $p4->setSexo("F");
    $p4->setSetor("Administrativo");
    $p4->setTrabalhando(true);
        print_r($p4);
        echo "<br/>";
        
?>
</pre>