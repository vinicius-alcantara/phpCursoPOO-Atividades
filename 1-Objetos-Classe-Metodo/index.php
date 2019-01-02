<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Classes e Objetos</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Caneta.php';
            //Caneta 1
            $c1 = new Caneta;
            $c1->modelo = "Bic";
            $c1->cor = "Azul";
            $c1->ponta = 0.5;
            $c1->carga = "50%";
            $c1->tampada = true;//Estado da caneta é tampada
            
            print_r($c1); //Imprimindo atributos de $c1 (Objeto Caneta)
                echo "<br/>";
            
            $c1->destampar();//Chamando o método destampar caneta
                
            $c1->rabiscar();//Chamando o método rabiscar
            
            //Caneta2
            $c2 = new Caneta;
            $c2->cor = "Vermelha";
            $c2->ponta = 0.7;
            $c2->tampada = false;//Estado da caneta é destampada
            
            print_r($c2);
                echo "<br/";
            
            $c2->tampar();//Chamando o método tampar caneta
            $c2->rabiscar();//Chamando o método rabiscar
            
        ?>
        </pre>
    </body>
</html>
