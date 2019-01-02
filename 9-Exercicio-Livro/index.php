<pre>
<?php
    require_once 'Livro.php';
    require_once 'Pessoa.php';
    
    $pessoa[0] = new Pessoa("Marcus Vinícius", 31, "M");
    $pessoa[1] = new Pessoa("Thiago Alcântara", 33, "M");
    $pessoa[2] = new Pessoa("Maria das Graças", 62, "F");
    
    $livro[0] = new Livro("PHP Básico", "Gustavo Guanabara", 300, $pessoa[1]);
    $livro[1] = new Livro("PHP Intermediário", "Ricardo Queiroz", 500, $pessoa[2]);
    $livro[2] = new Livro("PHP Avançado", "Amélia Acácia", 800, $pessoa[0]);
    
    $livro[0]->setPagAtual(150);
    //$livro[0]->folhear(0);
    $livro[0]->voltarPag();
    $livro[0]->detalhes();
    
    /*
    print_r($pessoa);
        echo "<br/>";
    print_r($livro);
    */
?>
</pre>