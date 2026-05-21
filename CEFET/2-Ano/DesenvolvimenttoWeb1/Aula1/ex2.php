<?php
    $dadosFuncionario = array (
        array('nome' => 'João', 'idade' => 23, 'cidade' => 'Nova Friburgo'),
        array('nome' => 'José', 'idade' => 25, 'cidade' => 'Nova Friburgo'),
        array('nome' => 'Maria', 'idade' => 22, 'cidade' => 'Bom Jardim')
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
            $tabel = "<tr><th>Nome</th><th>Idade</th><th>Cidade</th></tr>";
            for($i = 0; $i < count($dadosFuncionario); $i++){
                $tabel .="<tr><td>".$dadosFuncionario[$i]['nome']."</td><td>".$dadosFuncionario[$i]['idade']."</td><td>".$dadosFuncionario[$i]['cidade']."</td></tr>";
            };
            echo $tabel;
        ?>
    </table>
</body>
</html>