<pre>
<?php
    require_once 'Video.php';
    require_once 'Gafanhoto.php';
    
    $v[0] = new Video("PHP Básico");
    $v[1] = new Video("PHP Intermediário ");
    $v[2] = new Video("PHP Avançado");
    print_r($v);
    
    echo "<br/>";
    
    $v[0]->setAvaliacao(20);
    $v[0]->like();
    $v[0]->like();
    $v[0]->setViews(10);
    $v[0]->play();
    
    $v[1]->setAvaliacao(10);
    
    while ($v[1]->getCurtidas() <= 79){
        $i = 0;
        $v[1]->like();
        $i += 1;
    }
    
    $v[1]->setViews(50);
    $v[1]->play();
    print_r($v);
?>
</pre>