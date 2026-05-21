<?php
declare(strict_types=1);

require_once __DIR__ . '../../modelo/Filme.php';

$filme1 = new Filme();
$filme1->titulo = "Interestelar";
$filme1->anoDeLancamento = 2018;
$filme1->incluirNoPlano();

$filme1->exibeFichaTecnica();

$filme1->avalia(9.7);
$filme1->avalia(8.3);
$filme1->avalia(10);
$filme1->avalia(8.5);

echo"Soma das avaliações: {$filme1->somaDasAvaliacoes}<br/>";
echo"Total de avaliações: {$filme1->totalDeAvaliacoes}<br/>";
echo"Avaliação pelos assinantes: {$filme1->obtemavaliacao()}<br/>";

echo"<br/>";
var_dump($filme1);
?>