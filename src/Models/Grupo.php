<?php

namespace VarejoFacil\Models;

class Grupo extends Entidade
{
    private $id;
    private $nome;
    private $secaoId;

    function __construct(Int $id, String $nome, Int $secaoId)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->secaoId = $secaoId;
    }

    public function getId(): Int
    {
        return $this->id;
    }

    public function getSecaoId(): int
    {
        return $this->secaoId;
    }

    public function getNome(): String
    {
        return $this->nome;
    }
}
