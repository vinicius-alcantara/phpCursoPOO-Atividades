<pre>
<?php
    require_once 'Mamifero.php';
    require_once 'Reptil.php';
    require_once 'Peixe.php';
    require_once 'Ave.php';
    require_once 'Canguru.php';
    require_once 'Cachorro.php';
    require_once 'Cobra.php';
    require_once 'Tartaruga.php';
    require_once 'GoldFish.php';
    require_once 'Arara.php';
    
    $m = new Mamifero();
    $r = new Reptil();
    $p = new Peixe();
    $a = new Ave();
    $c = new Canguru();
    $k = new Cachorro();
    $t = new Tartaruga();
    $co = new Cobra();
    
    
    $m->locomover();
    $c->locomover();
    $k->locomover();
    
    $r->locomover();
    $t->locomover();
    $co->locomover();
?>
</pre>