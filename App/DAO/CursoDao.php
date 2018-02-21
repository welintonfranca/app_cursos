<?php
/**
 * Created by PhpStorm.
 * User: Wélinton
 * Date: 20/02/2018
 * Time: 22:45
 */

namespace App\DAO;


class CursoDao
{
    private $conexao;

    /**
     * CursoDao constructor.
     */
    public function __construct()
    {
        $this->conexao = new \PDO("mysql:dbname=db_cursos; host=localhost", "root","zetawe123");
        $this->conexao->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
    public function inserir($curso)
    {
        $sql = "insert into cursos (nome, valor) values (:nome, :valor)";
        try{
            $insercao = $this->conexao->prepare($sql);
            $insercao->bindValue(":nome",$curso->getNome());
            $insercao->bindValue(":valor", $curso->getValor());
            $insercao->execute();
        }catch (\PDOException $erro){
            echo $erro->getMessage();
        }

    }


}