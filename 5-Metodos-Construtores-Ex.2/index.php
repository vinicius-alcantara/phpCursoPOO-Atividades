<pre>
<?php
    require_once 'Caneta.php';
    
        $c1 = new Caneta("BIC", "Azul", 0.7);
            print_r($c1);
                echo "<br/>";
                    $c1->escrever();
                        echo "<br/>";
                
        $c2 = new Caneta("Cristal", "Vemelha", 0.5);
            $c2->setDestampar();
                print_r($c2);
                    echo "<br/>";
                        $c2->escrever();
?>
</pre>
