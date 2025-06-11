<?php

namespace LaBella\Services;

use Exception;
use LaBella\Database\ConexaoBD;
use PDO;
use Throwable;

class ProdutoServico {
    private PDO $conexao;

    public function __construct()
    {
        $this->conexao = ConexaoBD::getConexao();
    }

    public function listarTodos():array {
        $sql = "SELECT * FROM produtos ORDER BY nome ASC";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (Throwable $erro) {
            throw new Exception($erro->getMessage());
        }
    }

    public function listarUm($id):array{
        $sql = "SELECT * FROM produtos WHERE id = :id";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindValue(":id", $id, PDO::PARAM_INT);
            $consulta->execute();
            return $consulta->fetch(PDO::FETCH_ASSOC);
        } catch (Throwable $erro) {
            throw new Exception($erro->getMessage());
        }
    }
}