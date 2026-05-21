<?php
    declare(strict_types=1);
    require_once __DIR__ . '/../exception/InfraException.php';
    require_once __DIR__ . '/../exception/IntegridadeException.php';
    require_once __DIR__ . '/../exception/ConflitoException.php';
    require_once __DIR__ . '/../exception/InfraException.php';

    function listarProdutos($pdo):array{
        $linhas = [];
        try{
            $sql = <<<SQL
                SELECT p.id, p.descricao, g.descricao as descGenero
                , p.preco_de_custo as precoDeCusto, p.genero_id as generoId
                , ROUND( (p.preco_de_custo * 1.3), 2 ) as precoDeVenda
                FROM produto p JOIN genero g ON(p.genero_id = g.id)
            SQL;
            
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $linhas = $stmt->fetchAll();
        }catch(PDOException $e){
            throw new InfraException("Erro ao obter registros. {$e->getMessage()}", 400, $e);
        }
        return $linhas;
    };

    function inserirProduto(array $input, $pdo):int{
        try{
            $sql = <<<SQL
                INSERT INTO produto(descricao, preco_de_custo, genero_id) 
                VALUES(:DESC, :PCUSTO, :GENID)
            SQL;
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam(':DESC', $input['descricao']);
            $stmt->bindParam(':PCUSTO', $input['precoDeCusto']);
            $stmt->bindParam(':GENID', $input['generoId']);
            $stmt->execute();
            return intval($pdo->lastInsertId());
        }catch(PDOException $e){
            if( $e->getCode() === '23000')
                if((int)$e->errorInfo[1] === 1451 || (int)$e->errorInfo[1] === 1452)
                    throw new IntegridadeException("Problema de integridade. Registro possui associação com outro(s) registro(s). {$e->getMessage()}", 409, $e);
                else    
                    throw new ConflitoException("Conflito. Registro já existe. {$e->getMessage()}", 409, $e);
            throw new InfraException("Erro do servidor ao obter registro. {$e->getMessage()}", 500, $e);
        }
        return 0;
    };

    function obterProduto(int $id, $pdo):array{
        $linha = [];
        try{
            $sql = <<<SQL
                SELECT id, descricao, preco_de_custo as precoDeCusto, genero_id as generoId 
                FROM produto WHERE id = ?
            SQL;
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(1, $id);
            $stmt->execute();
            $linha = $stmt->fetch();
        }catch(PDOException $e){
            throw new InfraException("Erro ao obter registro. {$e->getMessage()}", 400, $e);
        }
        return $linha;
    };

    function alterarProduto(array $input, $pdo):int{
        try{
            $sql = <<<SQL
                UPDATE produto SET descricao = :DESC
                , preco_de_custo = :PCUSTO, genero_id = :GENID 
                WHERE id = :ID
            SQL; 
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam(':DESC', $input['descricao']);
            $stmt->bindParam(':PCUSTO', $input['precoDeCusto']);
            $stmt->bindParam(':GENID', $input['generoId']);
            $stmt->bindParam(':ID', $input['id']);
            $stmt->execute();
            return $stmt->rowCount();
        }catch(PDOException $e){
            if( $e->getCode() === '23000')
                if((int)$e->errorInfo[1] === 1451 || (int)$e->errorInfo[1] === 1452)
                    throw new IntegridadeException("Problema de integridade. Registro possui associação com outro(s) registro(s). {$e->getMessage()}", 409, $e);
                else    
                    throw new ConflitoException("Conflito. Registro já existe. {$e->getMessage()}", 409, $e);
            throw new InfraException("Erro ao alterar registro. {$e->getMessage()}", 500, $e);
        }
        return 0;
    };

    function removerProduto(int $id, $pdo):int{
        try{
            $sql = <<<SQL
                DELETE FROM produto WHERE id = :ID
            SQL;
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam(':ID', $id);
            $stmt->execute();
            return $stmt->rowCount();
        }catch(PDOException $e){
            if( $e->getCode() === '23000')
                throw new ConflitoException("Problema de integridade. Registro possui associação com outro(s) registro(s). {$e->getMessage()}", 409, $e);
            throw new InfraException("Erro ao remover registro. {$e->getMessage()}", 400, $e);
        }
        return 0;
    };

    function existeDescricaoProduto(string $descricao, PDO $pdo):int{
        try{
            $sql = <<<SQL
                SELECT id, descricao FROM produto WHERE descricao = :DESC
            SQL;
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':DESC', $descricao, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->rowCount();
        }catch(PDOException $e){
            throw new InfraException("Erro do servidor ao obter registro. {$e->getMessage()}", 500, $e);
        }
        return 0;
    };
?>

