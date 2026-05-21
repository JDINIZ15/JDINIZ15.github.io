<?php
    $Produtos = array (
        array(
            'nome' => 'Porta',
            'Preço' => 199,99, 
            'Fabricante' => 'Madeireira Corp'
        ),

        array(
            'nome' => 'Macaco',
            'Preço' => 1299,99,
            'Fabricante' => 'Macaqueiro'
        ),

        array(
            'nome' => 'Cabo RJ45',
            'Preço' => 19,99,
            'Fabricante' => 'Helga')
    )
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <?php
            $montarTabel = function($dados) {
            $tabel = "<tr><th>Nome</th><th>Preço</th><th>Fabricante</th></tr>";
            for($i = 0; $i < count($dados); $i++){
                $tabel .="<tr><td>".$dados[$i]['nome']."</td><td>".$dados[$i]['Preço']."</td><td>".$dados[$i]['Fabricante']."</td></tr>";
            };
            return $tabel;
        };
            echo $montarTabel($Produtos);
        ?>
    </table>
</body>
</html>