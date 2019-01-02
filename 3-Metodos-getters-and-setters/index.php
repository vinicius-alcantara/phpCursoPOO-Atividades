<pre>
<?php
    require_once 'Caneta.php';
    
    $c1 = new Caneta;
    
    echo "<br/>";
    
    $c1->setModelo("BIC");
    $c1->setPonta(0.5);
    
    //Utilizando o metodo get
    
    echo "Eu tenho uma Caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
?>
</pre>