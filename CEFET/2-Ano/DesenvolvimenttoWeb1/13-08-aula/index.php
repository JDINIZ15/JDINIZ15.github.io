<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>abluble</title>
</head>
<body>
    <?php
      //CRIANDO UM ARRAY DE PRODUTOS
      $produtos = array();
      //CRIANDO UM ARRAY DE FRUTAS E PREENCHENDO DE UMA FORMA ESPECÍFICA
      $frutas = array();
      $frutas[0] = "Maçã";
      $frutas[1] = "Banana";
      //CRIANDO UM ARRAY COMPLETO
      $legumes = array("Inhame", "Batata");
      //COLOCANDO OS ARRAYS $FRUTAS E $LEGUMES NAS POSIÇÕES 0 E 1 DE $ PRODUTOS
      array_push($produtos, $frutas, $legumes);
      array_push($produtos, array("Couve", "Mostarda", "Rúcula"));
      //ADICIONANDO UM LEGUME NA LINHA 1 E COLUNA 2 DE PRODUTOS
      $produtos[1][2] = "Cenoura";
      //ADICIONANDO UMA 3º FRUTA AO ARRAY 
      $frutas[2]= "Laranja";
      $produtos[0] = $frutas; 

      echo "#################Lista de Compras#################<hr>";
      //imprimindo a matriz $produtos na forma de lista com marações HTMl
      for($linha = 0; $linha < count($produtos) ; $linha++){
        echo"<ul><strong>Linha ".$linha." da matriz</strong>";
        for($coluna = 0; $coluna <sizeof($produtos[$linha]) ; $coluna++)
        echo"<li> coluna $coluna (posição[$linha] [$coluna]):". $produtos[$linha][$coluna]."</li>";
      echo"</ul>";
      }

    ?>
</body>
</html>