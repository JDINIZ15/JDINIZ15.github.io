<?php
    declare(strict_types=1);
    require_once __DIR__ . '/../exception/IntegridadeException.php';
    require_once __DIR__ . '/../exception/ConflitoException.php';
    require_once __DIR__ . '/../exception/InfraException.php';

    function listarGeneros(PDO $pdo):array{
        $linhas = [];
        try{
            $sql = <<<SQL
                SELECT id, descricao FROM genero
            SQL;
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $linhas = $stmt->fetchAll();
        }catch(PDOException $e){
            throw new InfraException("Erro do servidor ao obter registros. {$e->getMessage()}", 500, $e);
        }
        return $linhas;
    };

    function inserirGenero(array $input, PDO $pdo):int{
        try{
            $sql = <<<SQL
                INSERT INTO genero(descricao) VALUES(:DESC)
            SQL;
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam(':DESC', $input['descricao'], PDO::PARAM_STR);
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

    function obterGenero(int $id, PDO $pdo):array{
        $linha = [];
        try{
            $sql = <<<SQL
                SELECT id, descricao FROM genero WHERE id = ?
            SQL;
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(1, $id, PDO::PARAM_INT);
            $stmt->execute();
            $linha = $stmt->fetch();
        }catch(PDOException $e){
            throw new InfraException("Erro do servidor ao obter registros. {$e->getMessage()}", 500, $e);
        }
        return $linha;
    };

    function alterarGenero(array $input, PDO $pdo):int{
        try{
            $sql = <<<SQL
                UPDATE genero SET descricao = :DESC WHERE id = :ID
            SQL;
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam(':DESC', $input['descricao'], PDO::PARAM_STR);
            $stmt->bindParam(':ID', $input['id'], PDO::PARAM_INT);
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

    function removerGenero(int $id, PDO $pdo):int{
        try{
            $sql = <<<SQL
                DELETE FROM genero WHERE id = :ID
            SQL;
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam(':ID', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->rowCount();
        }catch(PDOException $e){
            if( $e->getCode() === '23000')
                if((int)$e->errorInfo[1] === 1451 || (int)$e->errorInfo[1] === 1452)
                    throw new ConflitoException("Problema de integridade. Registro possui associação com outro(s) registro(s). {$e->getMessage()}", 409, $e);
            throw new InfraException("Erro do servidor ao remover registro. {$e->getMessage()}", 500, $e);
        }
        return 0;
    };

    function existeDescricaoGenero(string $descricao, PDO $pdo):int{
        try{
            $sql = <<<SQL
                SELECT id, descricao FROM genero WHERE descricao = :DESC
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

