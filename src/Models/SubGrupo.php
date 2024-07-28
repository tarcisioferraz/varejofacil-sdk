<?php

namespace VarejoFacil\Models;

class SubGrupo extends Entidade
{
    private $id;
    private $nome;
    private $secaoId;
    private $grupoId;

    function __construct(Int $id, String $nome, Int $secaoId, Int $grupoId)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->secaoId = $secaoId;
        $this->grupoId = $grupoId;
    }

    public function getId(): Int
    {
        return $this->id;
    }

    public function getSecaoId(): int
    {
        return $this->secaoId;
    }

    public function getGrupoId(): int
    {
        return $this->grupoId;
    }

    public function getNome(): String
    {
        return $this->nome;
    }
}
