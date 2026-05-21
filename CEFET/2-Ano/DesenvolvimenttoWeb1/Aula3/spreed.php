<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Spread operator

    function somar2(int ...$numeros){
        //return array_sum($numeros); //SOLUÇÃO SIMPLES

        //Solução menos inteligente

        $total = 0.0;
        foreach($numeros as $n)
            $total += $n;
        return $total;
    }

    $numero1 = 10;
    $numero2 = 55;
    echo "<br />";var_dump(somar2($numero1, $numero2, 38, 47, 26))
    ?>
</body>
</html>