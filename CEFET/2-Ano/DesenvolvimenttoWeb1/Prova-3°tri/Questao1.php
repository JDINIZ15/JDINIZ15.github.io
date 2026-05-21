<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1</title>
</head>
<body>
    <?php
    $arrayATransformar = array(
        array(
        "Nome" => "João",
        "Sobrenome" => "Silva",
        "Nascimento" => "1990-01-01",
        "Cidade" => "São Paulo",
        "Estado" => "SP"
        ),
        array(
        "Nome" => "Maria",
        "Sobrenome" => "Oliveira",
        "Nascimento" => "1985-05-10",
        "Cidade" => "Rio de Janeiro",
        "Estado" => "RJ"
        ),
        array(
        "Nome" => "Carlos",
        "Sobrenome" => "Santos",
        "Nascimento" => "1995-07-21",
        "Cidade" => "Belo Horizonte",
        "Estado" => "MG"
        )
        );

        function calculaIdade(string $dataNascimento): int {
            // separando dd, mm, aa
            list($ano, $mes, $dia) = explode('-', $dataNascimento);
    
            // data atual
            $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
            // Descobre a unix timestamp da data de nascimento do fulano
            $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
    
            // cálculo
            $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
            return $idade;
        };




        $arrayTransformado =[];
   
        $arrayTransformado = array_map(function ($value){
       
            return array("Nome Completo" =>  $value["Nome"]." ".$value["Sobrenome"], 
            "Idade" => (calculaIdade($value["Nascimento"])),
            "Cidade - Estado" => $value["Cidade"]." - ".$value["Estado"]);

        }, $arrayATransformar);

        echo "<table border= '1px'>";
                echo"<tr>";
                        echo"<th>Nome</th>";
                        echo"<th>Idade</th>";
                        echo"<th>Cidade - Estado</th>";
                echo"</tr>";

                foreach($arrayTransformado as $pessoa){
                    echo"<tr>";
                        echo"<td>".$pessoa["Nome Completo"]."</td>";
                        echo"<td>".$pessoa["Idade"]."</td>";
                        echo"<td>".$pessoa["Cidade - Estado"]."</td>";
                    echo"</tr>";
                }
            echo"</table>";
        
    ?>
</body>
</html>