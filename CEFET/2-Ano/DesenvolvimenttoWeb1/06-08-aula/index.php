<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Macaco prego</h1>
  <?php
  //Criando um array de produtos
  $produtos = array();
  //criando um array de frutas e preenchendo de uma forma específica
  $frutas = array();
  $frutas[0] = "Maçã";
  $frutas[] = "Banana";
  //criando um array completo
  $legumes = array("Inhame","Batata");
  //Colocando os arrays $frutas e $legumes nas posições 0 e 1 de $produtos
  array_push($produtos, $frutas, $legumes);
  array_push($produtos, array("Couve", "Mostarda", "Rúcula"));
  //Adicionando um legume na linha 1 e coluna de produtos
  $produtos[1][2] = "Cenoura";
  //Adicionando uma 3º fruta ao array
  $frutas[2] = "Laranja";
  //Recolocando o array de frutas 
  $produtos[0] = $frutas;
  print_r($produtos);
  //Acessando uma posição específica do array
  echo $produtos[2][1];
  ?>
</body>
</html>