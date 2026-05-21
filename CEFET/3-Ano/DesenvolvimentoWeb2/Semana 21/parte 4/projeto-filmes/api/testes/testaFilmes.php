<?php
declare(strict_types=1);

require_once __DIR__ . '../../modelo/Filme.php';

$filme1 = new Filme();
$filme1->setTitulo("Interestelar");
$filme1->setAnoDeLancamento(2018);
$filme1->incluirNoPlano();

$filme1->exibeFichaTecnica();

$filme1->avalia(9.7);
$filme1->avalia(8.3);
$filme1->avalia(11);
$filme1->avalia(8.5);

echo"Soma das avaliações: {$filme1->getSomaDasAvaliacoes()}<br/>";
echo"Total de avaliações: {$filme1->getTotalDeAvaliacoes()}<br/>";
echo"Avaliação pelos assinantes: {$filme1->obtemavaliacao()}<br/>";

if($filme1->isIncluidoNoPlano())
    echo"O filme pode ser assistido sem necessidade de lugar.<br/>";
echo"<br/>";
var_dump($filme1);
?>