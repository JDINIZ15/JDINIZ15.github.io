<html>
  <head></head>
  <html>
    <head>
      <title>Php</title>
    </head>
  <body>
    <?php
   /* $num1 = 1 + '10.5';
    echo "$num1 <br />";

    $num2 = 1 + '-1.3e3';
    echo "$num2 <br />";

    //$num3 = 1 + 'teste-1.3e3';
    //echo "$num3 <br />";

    //$num4 = 1 + 'teste3';
    //echo "$num4 <br />";

    $num5 = 1 + '10 porquinhos';
    echo "$num5 <br />";

    $num6 = 4 + '10.2 porquinhos';
    echo "$num6 <br />";

    $num7 = '10.0 vacas' + 1;
    echo "$num7 <br />";

    $num8 = '10.0 vacas' + 1.0;
    echo "$num8 <br />";/*
/*----------------------------------------------------------------------------------------------------------*/

  $texto = '10';
  $num = (integer) $texto;
  $texto = (string) $num;

  $valor = 3.2;
  echo "$valor <br />";
  $valor = (int) $valor;
  echo "$valor";

  $b = 0;
  $numC = (bool) $b;
  $numA = (bool) 45;
  $numB = (bool) -5;  
  echo" $numC <br /> $numA <br /> $numB";
echo"<br />---------------------------------------------------------------------------------------------------------<br />";
  
  $bola = 200;
  settype($bola, 'int');
  echo "$bola <br />";
  settype($bola, 'integer');
  echo "$bola <br />";
  settype($bola, 'bool');
  echo "$bola <br />";
  settype($bola, 'boolean');
  echo "$bola <br />";
  settype($bola, 'string');
  echo "$bola <br />";
 //settype($bola, 'binary');
 // echo $bola;
settype($bola, 'array');
 echo $bola;
  //settype($bola, 'object');
 // echo $bola;

 echo"<br />---------------------------------------------------------------------------------------------------------<br />";

  echo gettype(7) . "<br />";
  echo gettype(7.0) ."<br />";
  echo gettype('sete') ."<br />" ;
  echo gettype(NULL) ."<br />";

  echo"<br />---------------------------------------------------------------------------------------------------------<br />";

  /* is_int( mixed $var ), is_integer( mixed $var ), is_long( mixed $var ), is_real( mixed
  $var ), is_float( mixed $var ), is_bool( mixed $var ), is_string( mixed $var ), is_array(
  mixed $var ), is_object( mixed $var ), is_numeric( mixed $var ), is_resource( mixed
  $var ), is_null( mixed $var ).*/

  $valor = 55;

  if( is_int($valor)){
    echo "inteiro";
  }
  else{
      echo"Não inteiro";
  }


    ?>
    
  </body>
</html>