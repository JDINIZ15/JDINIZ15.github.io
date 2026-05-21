<html>
    <?php
    $precoDeCusto = 450.0;
    $margemDeLucro = 25.0;

    //Função comum
    function calcularPrecoDeVenda($custo, $margem){
        return $custo += (($custo * $margem) / 100);
    }
    var_dump( calcularPrecoDeVenda($precoDeCusto, $margemDeLucro));

    //Usando uma função anônima (Lambda)
    $precoDeVenda = function($custo, $margem){
        return $custo += (($custo * $margem) / 100);
    };
    
    //Vai imprimir a função --> Uma função anônima/lambda cujo tipo é um Clousure
    echo "<br>"; var_dump($precoDeVenda);
    //Vai imprimir o resultado da chamada da função 
    echo "<br>"; var_dump($precoDeVenda($precoDeCusto, $margemDeLucro));

    echo "<br>". $precoDeVenda($precoDeCusto, $margemDeLucro);
    echo "<br>". calcularPrecoDeVenda($precoDeCusto, $margemDeLucro);

    echo "<br>";
    echo"----------------------------------------------------------------------------------------------------------------------------------------------";

    //Usando Arrow function 
    $precoDeVenda2 = fn($custo, $margem) => $custo += ( ($custo * $margem) / 100);

    //Vai imprimir a arrow function que também é uma Closure

    echo "<br>";var_dump($precoDeVenda2);

    //Vai imprimir o resultado da chamda da função 

    echo "<br>";
    var_dump($precoDeVenda2($precoDeCusto, $margemDeLucro));
    echo "<br>";
    echo"----------------------------------------------------------------------------------------------------------------------------------------------";
    //Funções tipadas 
    function somar (int $n1, int $n2):int {
        return ($n1 + $n2);
    }

    $numero1 = 25;
    $numero2 = 20;

    echo "<br>"; var_dump(somar($numero1, $numero2)); //45
    echo "<br>"; var_dump(somar($numero1, 25.75)); //Vai imprimir 50 e não 50.75 !!!!
    //Quando passamos um float esperando um int, perde-se a parte não inteira (0.75)
    //Passando um valor incompatível 
    
    //echo "<br>"; var_dump(somar($numero1, "Rafael")); //Vai dar erro fatal.
    //A função não espera uma string 

    $somar = function(int $n1, $n2):int {
        return ($n1 + $n2);
    };

    echo "<br>" ; var_dump($somar($numero1, $numero2));
    echo "<br>";
    echo"----------------------------------------------------------------------------------------------------------------------------------------------";
    
 //Spread operator
 function somar1(int ...$numeros){
    //return array_sum($numeros); //SOLUÇÃO SIMPLES !!

    //Solução menos inteligente 

    $total = 0.0;
    foreach($numeros as $n)
        $total += $n;
    return $total;
}
echo "<br>"; var_dump (somar1($numero1, $numero2, 38, 47, 26));


    //Spread operator
    function somar2(int ...$numeros):string{
        //return array_sum($numeros); //SOLUÇÃO SIMPLES !!

        //Solução menos inteligente 

        $total = 0.0;
        foreach($numeros as $n)
            $total += $n;
        return $total;
    }
    echo "<br>"; var_dump (somar2($numero1, $numero2, 38, 47, 26));

    echo "<br>";
    echo"----------------------------------------------------------------------------------------------------------------------------------------------";

    //Criando uma função anônima (Lambda)

    $media = function(float ...$notas):float{
        return array_sum($notas) / sizeof($notas);
    };
    
    //declarando uma variável e atribuindo valor a ela
    $n4 = 7.7;
    //Invocando a função anônima 
    echo "<br>O valor da média é".$media(5.9, 6.0, 7.1, $n4)."<br>";

    //Declarando uma função que recebe outra função como 1° argumento e valores do tipo float como argumentos seguintes

    $resultado = function(callable $fnMedia, float ...$notas):string{
        //os 3 pontos (...) são para que o tipo seja mantido e não entendido como um único valor do tipo array
        $valorMedia = $fnMedia(...$notas);
        return ($valorMedia >= 6.0)? "Aprovado" : "Reprovado";

    };

    echo "O resultado é ".$resultado($media, 5.9, 6.0, 7.1, $n4)."<br>";

    
    echo "<br>";
    echo"----------------------------------------------------------------------------------------------------------------------------------------------";

    //array_map com função nomeada 
    function cubo(int $n):int{
        return ($n * $n * $n);
    }

    $array_inteiros = array(1, 2, 3, 4, 5);
    echo "<br>";print_r($array_inteiros);
    $array_inteiros_ao_cubo = array_map('cubo', $array_inteiros);
    echo"<br>"; print_r($array_inteiros_ao_cubo);

    //array map com função anônima
    $array_inteiros_ao_cubo = array_map(function(int $n):int{
        return ($n * $n * $n);
    }, $array_inteiros);
    echo"<br>"; print_r($array_inteiros_ao_cubo);

    echo "<br>";
    echo"----------------------------------------------------------------------------------------------------------------------------------------------";

    //array_map com função anônimo guradada em uma variável e dois arrays como argumento
    $array_numbers = array("One", "Two", "Three", "four", "five");
    $mostrarEmIngles = function (int $numero, string $numeroEmIngles):string{
        return "O número $numero em ingles é $numeroEmIngles";
    };
    
    $arrayTextosTraduzidos = array_map($mostrarEmIngles,$array_inteiros, $array_numbers);

    echo"<br>"; print_r($arrayTextosTraduzidos);

    //array_map com função anônima e dois arrays como argumento 
    $arrayTextosTraduzidos = array_map(function(int $numero, string $numeroEmIngles):string{
        return "O número $numero em inglês é $numeroEmIngles";
    }, $array_inteiros, $array_numbers);

    echo"<br>"; print_r($arrayTextosTraduzidos);
    ?>
</html>