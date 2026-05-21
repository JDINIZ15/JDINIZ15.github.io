<?php
  declare(strict_types=1);
  require_once("funcoes.php");
  //$aluno = (array) $_POST[];
  $nome = isset($_POST["nome"]) ? strtoupper($_POST["nome"]) : null;
  $nota1 = isset($_POST["nota1"]) ? floatval($_POST["nota1"]) : null;
  $nota2 = isset($_POST["nota2"]) ? floatval($_POST["nota2"]) : null;

  if($nome && $nota1 && $nota2) {
    $media = calculaMedia($nota1, $nota2);
    $grau = "";
    calculaGrau($media, $grau);
    header("Content-Type: text/html; charset=utf-8");
    echo "<h2>Dados do aluno:</h2>";
    echo "Nome: $nome<br /><hr>";
    echo "Nota 1: $nota1<br /><hr>";
    echo "Nota 2: $nota2<br /><hr>";    
    echo "Média: $media<br /><hr>";
    echo "Grau: $grau<br /><hr>";
  } else {
    die("Preencha todos os campos.<br />");
  }
?>