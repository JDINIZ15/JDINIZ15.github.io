<?php
  function calculaMedia (float $num1, float $num2):float {
    return ($num1 + $num2) / 2;
  }

  function calculaGrau (float $media, string &$grau):void {
    if($media > 8) $grau = 'A';
    elseif($media >= 6) $grau = 'B';
    elseif ($media >= 4) $grau = 'C';
    elseif ($media > 2) $grau = 'D';
    else $grau = 'E';
  }
?>