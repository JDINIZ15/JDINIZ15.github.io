<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  echo '<h1> Empty </h1>';
  //empty- Retorna true se a string estiver vazia;

  echo empty( '' );//1
  echo '<br/>';
  var_dump(empty('Fulano'));//boolean false
  echo '<br/>';

  echo '<h1> Strlen </h1>';
  //strlen - Retorna o tamanho de uma string;

  echo strlen('Rafael');//6
  echo '<br/>';

  echo '<h1> Strpos </h1>';
  //strpos - Retorna a posição da primeira ocorrência de uma strinh

  $texto = 'Olá Mundo';

  var_dump(strpos($texto, "X"));//False
  echo '<br/>';
  var_dump(strpos($texto, "O"));//0
  echo '<br/>';
  var_dump(strpos($texto, "M"));//4
  echo '<br/>';
  var_dump(strpos($texto, "M", 5));//False
  echo '<br/>';
  var_dump(strpos($texto, "M", 4));//4
  echo '<br/>';

  echo '<h1> Substr </h1>';
  //substr - Retorna parte de uma string;

  echo substr($texto, 1).'<br/>';// 'lá Mundo';
  echo substr($texto, 0, 3).'<br/>';//'Olá';
  echo substr($texto, 4, 5).'<br/>';//'Mundo';

  //<----------------------------------------------------------------------------------------------------------------------------->
  echo '<h1> Explode </h1>';
  //explode - Divide uma string em outras strings, usando um separador;

  echo "<pre>";
  print_r(explode('/', '06/11/1974'));
  echo"</pre><br/>";

  echo "<pre>";
  print_r(explode(':', '09:48:23'));
  echo"</pre><br/>";

  ?>
</body>
</html>