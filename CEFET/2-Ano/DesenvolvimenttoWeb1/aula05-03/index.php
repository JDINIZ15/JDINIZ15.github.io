<html>
  <head>
    <title>Exercicio 3</title>
  </head>
  <body>
    
    <?php
    /*
    $a = false;
    echo var_dump($a)*/
    $b= " ";
    if ( empty ( $b ) )
    {
      echo "!crime";
    }
    else{
      echo "crime";
    }

    define( 'PI' , 3.1416 );
    define ('TITULO' , 'Comprimento da circunferência');
    $raio = 3;
    $circunferencia = 2 * PI * $raio;
    echo "<br />" . TITULO .":".$circunferencia . "<br />";

    echo PHP_INT_MAX;






    $x = 10;
  
  echo "<br />" . $x += 5;
  echo "<br />" . $x *= 2;   
  echo "<br />" . $x /= 3; 
  echo "<br />" . $x -= 5;
  echo "<br />" . $x %= 1;    

  $s = 'Olá';
  $s .= ' Mundo';


  $i= 0;
  echo  "<br />". $i++;
  echo  "<br />". $i--;

  echo $s; 


  echo"<br /> ------------------------------------------------------------------------------------<br/>";
  $b = 1; 
  $a = 1;

  if($a == $b) echo "a e b sao inguais <br />";
  if($a != $b) echo "a e be sao diferentes <br />";
  if($a > $b) echo "a é maior que b <br />";
  if($a < $b) echo "a é menor que b <br />";
  if($a >= $b) echo "a é maior ou igual a b <br />";
  if($a <= $b) echo "a é menor ou igual a b <br />";

  if($a === $b) echo "a e b sao inguais e possuem o mesmo tipo <br />";
  if($a !== $b) echo "a e b sao diferentes e possuem tipos diferentes <br />";

  echo"<br /> ------------------------------------------------------------------------------------<br/>";

  $w = (false && foo());
  $x = (true
  $y
  $z
    ?>
  </body>
</html>