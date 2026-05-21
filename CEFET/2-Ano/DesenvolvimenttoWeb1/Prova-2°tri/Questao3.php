<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3</title>
    <style>
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Questão 3</h1>


    <?php
        $x = 10;

        function valor($x){
            $x += 5;
            return $x;
        }

        function referencia (&$x){
            $x +=10;
            return $x;
        }

        echo "Valor de x antes da função passada por valor:".$x;
        echo "<br />";
        echo "Valor de x na chamada da função por valor:".valor($x);
        echo "<br />";
        echo "Valor de x depois da função passada por valor:".$x;
        echo "<br />";
        echo "Valor de x antes da função passada por referencia:".$x;
        echo "<br />";
        echo "Valor de x na chamada da função por referencia:".referencia($x);
        echo "<br />";
        echo "Valor de x depois da função passada por referencia:".$x;
    ?>


</body>
</html>