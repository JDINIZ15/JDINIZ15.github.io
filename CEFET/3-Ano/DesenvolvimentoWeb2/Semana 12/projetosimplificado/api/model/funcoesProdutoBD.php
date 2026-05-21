<?php
    require_once('funcoesUtil.php');
    $pdo = getConexao();

    $listar = function() use ($pdo):array{
        header("Content-Type: application/json; charset=utf-8");
        $linhas = [];
        try{
            $sql = <<<SQL
                SELECT id, descricao, preco_de_custo as precoDeCusto 
                FROM produto
            SQL;
            
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $linhas = $stmt->fetchAll( PDO::FETCH_ASSOC );
        }catch(PDOException $e){
            http_response_code( 400 );
            die( json_encode( ["Erro ao obter registros. {$e->getMessage()}"] ) );
        }
        return $linhas;
    };

    $inserir = function(array $input) use ($pdo):int{
        header("Content-Type: application/json; charset=utf-8");
        try{
            $sql = <<<SQL
                INSERT INTO produto(descricao, preco_de_custo) 
                VALUES(:DESC, :PCUSTO)
            SQL;
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam(':DESC', $input['descricao']);
            $stmt->bindParam(':PCUSTO', $input['precoDeCusto']);
            $stmt->execute();
            return intval($pdo->lastInsertId());
        }catch(PDOException $e){
            if( $e->getCode() === '23000'){
                http_response_code( 409 );//Conflito
                die( json_encode( ["Registro já existe. {$e->getMessage()}"] ) );
            }
            http_response_code(400);//Erro de domínio
            die( json_encode( ["Erro ao inserir registro. {$e->getMessage()}"] ) );
        }
        return 0;
    };

    $obter = function(int $id) use ($pdo):array{
        header("Content-Type: application/json; charset=utf-8");
        $linha = [];
        try{
            $sql = <<<SQL
                SELECT id, descricao, preco_de_custo as precoDeCusto 
                FROM produto WHERE id = ?
            SQL;
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(1, $id);//Parametro não nomeado
            $stmt->execute();
            $linha = $stmt->fetch(  );
        }catch(PDOException $e){
            http_response_code( 400 );//Erro de domínio.
            die( json_encode( ["Erro ao obter registro. {$e->getMessage()}"] ) );
        }
        return $linha;
    };

    $alterar = function(array $input) use ($pdo):int{
        header("Content-Type: application/json; charset=utf-8");
        try{
            $sql = <<<SQL
                UPDATE produto SET descricao = :DESC
                , preco_de_custo = :PCUSTO 
                WHERE id = :ID
            SQL; 
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam(':DESC', $input['descricao']);
            $stmt->bindParam(':PCUSTO', $input['precoDeCusto']);
            $stmt->bindParam(':ID', $input['id']);
            $stmt->execute();
            return $stmt->rowCount();
        }catch(PDOException $e){
            if( $e->getCode() === '23000'){
                http_response_code( 409 );//Conflito
                die( json_encode( ["Registro já existe. {$e->getMessage()}"] ) );
            }
            http_response_code( 400 );//Erro de domínio
            die( json_encode( ["Erro ao alterar registro. {$e->getMessage()}"] ) );
        }
        return 0;
    };

    $remover = function(int $id) use ($pdo):int{
        header("Content-Type: application/json; charset=utf-8");
        try{
            $sql = <<<SQL
                DELETE FROM produto WHERE id = :ID
            SQL;
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam(':ID', $id);
            $stmt->execute();
            return $stmt->rowCount();
        }catch(PDOException $e){
            http_response_code( 400 );//Erro de domínio
            die( json_encode( ["Erro ao remover registro. {$e->getMessage()}"] ) );
        }
        return 0;
    };
?>

