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
            //$c1->ponta = 0.5;
            //$c1->carga = "50%";
            //$c1->tampada = true;//Estado da caneta é tampada
            
            var_dump($c1); //Imprimindo atributos de $c1 (Objeto Caneta)
            
            $c1->tampar();
            $c1->rabiscar();
                
            

        ?>
        </pre>
    </body>
</html>
