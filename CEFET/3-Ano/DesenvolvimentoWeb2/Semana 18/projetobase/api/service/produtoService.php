<?php
require_once __DIR__ . '/../exception/RequisicaoRuimException.php';
require_once __DIR__ . '/../exception/IntegridadeException.php';
require_once __DIR__ . '/../model/funcoesProduto.php';
require_once __DIR__ . '/../model/funcoesGenero.php';

function produtoAlterarService(array $in, PDO $pdo): int {
  // Validação simples (service decide regra, controller só higieniza)
  if (empty($in['id']) || empty($in['descricao']) || empty($in['precoDeCusto']) || empty($in['generoId']))
    throw new RequisicaoRuimException('Alguma informação não foi enviada corretamente.', 400);

  $id = $in['id'];
  $descricao = $in['descricao'];
  $precoDeCusto = floatval( $in['precoDeCusto'] );
  $generoId = $in['generoId'];
  //Regras de negócio
  $len = mb_strlen($descricao, 'UTF-8');
  if ($len < 3 || $len > 60) {
    throw new RequisicaoRuimException('Descrição deve ter entre 3 e 60 caracteres', 400);
  }

  if ($precoDeCusto <= 0.0) {
    throw new RequisicaoRuimException('Preço de custo deve ser um real positivo', 400);
  }

  // Regras cruzadas com BD
  if (! obterProduto($id, $pdo) )
    throw new NaoEncontradoException('Não encontrado', 404);
  if(! obterGenero($generoId, $pdo) )
    throw new IntegridadeException('Conflito. Genero inexistente para vinculação', 409, null);

  // Persistência (model captura PDOException e relança tuas exceções)
  return alterarProduto($in, $pdo);
}

function produtoInserirService(array $in, PDO $pdo): int {
  // Validação simples (service decide regra, controller só higieniza)
  if (empty($in['descricao']) || empty($in['precoDeCusto']) || empty($in['generoId']))
    throw new RequisicaoRuimException('Alguma informação não foi enviada corretamente.', 400);
  
  //Regras de negócio
  $descricao = trim($in['descricao']);
  $precoDeCusto = floatval( $in['precoDeCusto'] );
  $generoId = $in['generoId'];
  //Regras de negócio
  $len = mb_strlen($descricao, 'UTF-8');
  if ($len < 3 || $len > 60) {
    throw new RequisicaoRuimException('Descrição deve ter entre 3 e 60 caracteres', 400);
  }
  if ($precoDeCusto <= 0.0) {
    throw new RequisicaoRuimException('Preço de custo deve ser um real positivo', 400);
  }
  // Regras cruzadas com BD
  if (existeDescricaoProduto($descricao, $pdo))
    throw new ConflitoException('Conflito. Produto duplicado', 409, null);
  if(! obterGenero($generoId, $pdo) )
    throw new IntegridadeException('Conflito. Genero inexistente para vinculação', 409, null);

  // Persistência (model captura PDOException e relança tuas exceções)
  return inserirProduto($in, $pdo);
}

function produtoListarService(PDO $pdo): array {
  // Persistência (model captura PDOException e relança tuas exceções)
  return listarProdutos($pdo);
}

function produtoObterService(array $in, PDO $pdo): array {
  // Validação simples (service decide regra, controller só higieniza)
  if (empty($in['id'])) {
    throw new RequisicaoRuimException('Alguma informação não foi enviada corretamente.', 400);
  }
  $id = $in['id'];

  // Regras cruzadas com BD
  $produto = obterProduto($id, $pdo);
  if (! $produto )
    throw new NaoEncontradoException('Não encontrado', 404);

  // Persistência (model captura PDOException e relança tuas exceções)
  return $produto;
}

function produtoRemoverService(array $in, PDO $pdo): int {
  // Validação simples (service decide regra, controller só higieniza)
  if (empty($in['id'])) {
    throw new RequisicaoRuimException('Alguma informação não foi enviada corretamente.', 400);
  }
  $id = $in['id'];
  // Regras cruzadas com BD
  if (! obterProduto($id, $pdo) )
    throw new NaoEncontradoException('Não encontrado', 404);

  // Persistência (model captura PDOException e relança tuas exceções)
  return removerProduto($id, $pdo);
}