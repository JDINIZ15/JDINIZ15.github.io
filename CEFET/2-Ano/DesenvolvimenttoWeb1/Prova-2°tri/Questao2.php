<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 2</title>
    <style>
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Questão 2</h1>

    <form action="Questao2.php" method="post">
        <label for="numero">Insira sua idade</label>
        <input type="text" name="idade" id="idade">
        <br />
        <label for="nacionalidade">Insira sua nacionalidade</label>
        <input type="text" id="nacionalidade" name="nacionalidade">
        <br />
        <label for="enviar">Enviar</label>
        <input type="submit" id="enviar" name="enviar">
    </form>

    <?php
    $x = $_POST['idade'];
    $y = $_POST['nacionalidade'];
    $y = strtolower($y);


   if(($x >= 18 && $x <=70) && $y == "brasileira")
   {
    echo"Apto a votar";
   }

   if((($x >= 16 && $x <=17) || $x > 70) && $y == "brasileira")
   {
    echo"Voto facultativo";
   }

   if($y != "brasileira")
   {
    echo"Não apto a votar";
   }
    ?>
</body>
</html>