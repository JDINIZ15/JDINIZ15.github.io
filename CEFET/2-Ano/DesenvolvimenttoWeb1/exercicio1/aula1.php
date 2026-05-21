<html>
    <head>
        <title>
           Delimitadores PHP
        </title>
    </head>
    <body>
        <h1>Exemplo de uso de delimitadores PHP - exemplo 1</h1>
        <?php
        echo "homossexual, gay, viado, tchola, bicha.";
        $var ='Bob';
        $Var ='Joe';
        echo "$Var, $var";
        ?>
        <h1>Exemplo de uso de delimitadores PHP - exemplo 2</h1>
        <?php
        $idade=40;
        $minhaIdade=40;
        $num1 = -123;
        $num2 = 0173;
        $num3 = 0x7B;

        $precoDaCamisaDoFlamengo = 1.99;
        $valor = -7.90;

        $maiorDeIdade = true;
        $x = false;
        $dezEMaiorQueNove = (10>9);

        $nome1 ="Fulano";

        $nome2 ='Fulano';

        echo "$idade, $minhaIdade, $num1, $num2$, $num3, $precoDaCamisaDoFlamengo, $maiorDeIdade, $x, $dezEMaiorQueNove, $nome1, $nome2";
        
        echo"\n";

        $nome = 'Rafael';
        echo 'Olá, $nome!';
        echo "Olá, $nome!";

        echo 'Um \nDois';
        echo "Um \nDois"
        ?>
    </body>
</html>