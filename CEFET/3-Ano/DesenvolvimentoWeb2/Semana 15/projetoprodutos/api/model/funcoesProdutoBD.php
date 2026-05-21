<?php
    require_once('funcoesUtil.php');
    $pdo = getConexao();

    $listar = function() use ($pdo):array{
        $linhas = [];
        try{
            $sql = <<<SQL
                SELECT id, descricao, preco_de_custo as precoDeCusto
                FROM produto
            SQL;

        $stmt = $pdo ->prepare($sql);
        $stmt ->execute();
        $linhas = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            http_response_code(400);
            die( json_encode(["Erro ao obter registros. {$e->getMessage()}"]));
        }
        return $linhas;
    };

    $inserir = function($descricao, $precoDeCusto) use ($pdo):int{
        header("Content-Type: application/json; charset:utf-8");
        try{
            $sql = <<<SQL
                INSERT INTO produto(descricao, preco_de_custo)
                VALUES(:DESCRICAO, :PRECODECUSTO)
            SQL;

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':DESCRICAO', $descricao);
            $stmt->bindParam(':PRECODECUSTO', $precoDeCusto);
            $stmt->execute();
            return intval($pdo->lastInsertId());
        }catch(PDOException $e){
            http_response_code(400);
            die( json_encode(["Erro ao inserir registro. {$e->getMessage()}"]));
        }
    }
?>

