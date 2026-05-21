<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1</title>
    <style>
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Questão 1</h1>

    <form action="Questao1.php" method="post">
        <label for="numero">Digite um Número</label>
        <input type="text" name="numero" id="numero">
        <label for="enviar">Enviar</label>
        <input type="submit" id="enviar" name="enviar">
    </form>

    <?php
    $x = $_POST['numero'];
    if($x % 2 ==0){
        echo "É par";
    }
    else{
        echo "É impar";
    }

    ?>
</body>
</html>