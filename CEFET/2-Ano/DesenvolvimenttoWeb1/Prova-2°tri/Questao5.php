<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 5</title>
    <style>
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Questão 5</h1>


    <?php
    $a = array('Maçã', 'Banana', 'Laranja', 'Uva', 'Manga');
    
    foreach($a as $frutas){
      echo $frutas."<br />";
    }
$p = 10;
    echo "<br />";

    echo"Tabela 1 <br />";

    echo"<table>";
    criarTabela($a);
    echo"</table>" ;

    echo "<br />";

    echo"-> Depois da adição de mais uma fruta:";
    
    array_push($a, 'Abacaxi');

    foreach($a as $frutas){
      echo $frutas."<br />";
    }

    echo "<br />";

    echo"Tabela 2 <br />";

    echo"<table>";
    criarTabela($a);
    echo"</table>" ;

    

 function criarTabela($x){
      foreach($x as $itens){
        echo"<tr><td>".$itens."</tr></td>";
      }
    }
    ?>
  
</body>
</html>