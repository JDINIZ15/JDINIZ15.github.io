<?php
  declare(strict_types=1);
  require_once("funcoes.php");
  $aluno = json_decode(file_get_contents("php://input"), true);
  $nome = isset($aluno["nome"]) ? strtoupper($aluno["nome"]) : null;
  $nota1 = isset($aluno["nota1"]) ? floatval($aluno["nota1"]) : null;
  $nota2 = isset($aluno["nota2"]) ? floatval($aluno["nota2"]) : null;

  if($nome && $nota1 && $nota2) {
    $media = calculaMedia($nota1, $nota2);
    $grau = "";
    calculaGrau($media, $grau);
    $aluno["media"] = $media;
    $aluno["grau"] = $grau;
    http_response_code(201);
    header("Content-Type:application/json; charset=utf-8");
    die(json_encode($aluno));
  } else {
    $resposta=["msgErro"=>"Erros ocorreram. '-'"];
    http_response_code(404);
    header("Content-Type:application/json; charset=utf-8");
    die(json_encode($resposta));
  }
  die();
?>