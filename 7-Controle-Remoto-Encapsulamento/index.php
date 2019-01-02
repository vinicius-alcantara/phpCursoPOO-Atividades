<h1>Controle Remoto</h1>
<pre>
<?php
require_once 'ControleRemoto.php';
    $c = new ControleRemoto;
    $c->ligar();
    $c->abrirMenu();
    $c->maisVolume();
    $c->maisVolume();
    $c->menosVolume();
    $c->ligarMudo();
    $c->play();
        echo "<br/>";
    print_r($c);

?>
</pre>