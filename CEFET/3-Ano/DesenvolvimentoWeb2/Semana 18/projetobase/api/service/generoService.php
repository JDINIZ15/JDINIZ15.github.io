<?php
require_once __DIR__ . '/../exception/RequisicaoRuimException.php';
require_once __DIR__ . '/../model/funcoesGenero.php';

function generoAlterarService(array $in, PDO $pdo): int {
  // Validação simples (service decide regra, controller só higieniza)
  if (empty($in['id']) || empty($in['descricao']))
    throw new RequisicaoRuimException('Alguma informação não foi enviada corretamente.', 400);

  $id = $in['id'];
  $descricao = $in['descricao'];
  //Regras de negócio
  $len = mb_strlen($descricao, 'UTF-8');
  if ($len < 3 || $len > 60) {
    throw new RequisicaoRuimException('Descrição deve ter entre 3 e 60 caracteres', 400);
  }

  // Regras cruzadas com BD
  if (! obterGenero($id, $pdo) )
    throw new NaoEncontradoException('Não encontrado', 404);
  if (existeDescricaoGenero($descricao, $pdo)) 
    throw new ConflitoException('Conflito. Genero duplicado', 409, null);

  // Persistência (model captura PDOException e relança tuas exceções)
  return alterarGenero($in, $pdo);
}

function generoInserirService(array $in, PDO $pdo): int {
  // Validação simples (service decide regra, controller só higieniza)
  if (empty($in['descricao']))
    throw new RequisicaoRuimException('Alguma informação não foi enviada corretamente.', 400);
  
  //Regras de negócio
  $descricao = trim($in['descricao']);
  $len = mb_strlen($descricao, 'UTF-8');
  if ($len < 3 || $len > 60) {
    throw new RequisicaoRuimException('Descrição deve ter entre 3 e 60 caracteres', 400);
  }

  // Regras cruzadas com BD
  if (existeDescricaoGenero($descricao, $pdo))
    throw new ConflitoException('Conflito. Genero duplicado', 409, null);

  // Persistência (model captura PDOException e relança tuas exceções)
  return inserirGenero($in, $pdo);
}

function generoListarService(PDO $pdo): array {
  // Persistência (model captura PDOException e relança tuas exceções)
  return listarGeneros($pdo);
}

function generoObterService(array $in, PDO $pdo): array {
  // Validação simples (service decide regra, controller só higieniza)
  if (empty($in['id'])) {
    throw new RequisicaoRuimException('Alguma informação não foi enviada corretamente.', 400);
  }
  $id = $in['id'];

  // Regras cruzadas com BD
  $genero = obterGenero($id, $pdo);
  if (! $genero )
    throw new NaoEncontradoException('Não encontrado', 404);

  // Persistência (model captura PDOException e relança tuas exceções)
  return $genero;
}

function generoRemoverService(array $in, PDO $pdo): int {
  // Validação simples (service decide regra, controller só higieniza)
  if (empty($in['id'])) {
    throw new RequisicaoRuimException('Alguma informação não foi enviada corretamente.', 400);
  }
  $id = $in['id'];
  // Regras cruzadas com BD
  if (! obterGenero($id, $pdo) )
    throw new NaoEncontradoException('Não encontrado', 404);

  // Persistência (model captura PDOException e relança tuas exceções)
  return removerGenero($id, $pdo);
}