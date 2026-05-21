<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 6</title>
    <style>
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Questão 6</h1>
        <form action="Questao6.php" method="post">
          <label for="nome">Insira seu nome</label>
          <input type="text" id="nome" name="nome">
          <br>
          <br>
          <label for="idade">Insira sua idade</label>
          <input type="number" id="idade" name="idade">
          <br>
          <input type="submit">
        </form>

    <?php
 

    if((!(empty($_POST['nome'])) && isset($_POST['nome'])) && (!(empty($_POST['idade'])) && isset($_POST['idade']) && $_POST['idade']>0 )){
      echo"Formulario preenchido com sucesso";
    }

    if(empty($_POST['nome'])){
      echo"O campo nome falta ser definido <br />";
    }

    if(empty($_POST['idade']) && $_POST['idade'] < 0 ){
      echo"O campo idade falta ser definido";
    }
    ?>
  
</body>
</html>