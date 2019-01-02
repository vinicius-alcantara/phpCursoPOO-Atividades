<pre>
<?php
    require_once 'ContaBanco.php';
    
    //Conta do Jubileu
    $c1 = new ContaBanco;
    $c1->setNumConta(1111);
    $c1->abrirConta("CP");
    $c1->setDono("Jubileu");
    $c1->depositar(300);
    $c1->sacar(50);
    $c1->pagarMensal();
    $c1->sacar(388);
    $c1->fecharConta();
    
    print_r($c1);
        echo "<br/>";
    
    //Conta da Creuza
    $c2 = new ContaBanco;
    $c2->abrirConta("CC");
    $c2->setDono("Creuza");
    $c2->setNumConta(2222);
    $c2->depositar(500);
    
    print_r($c2);
    
?>
</pre>