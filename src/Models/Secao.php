<?php

namespace VarejoFacil\Models;

class Secao extends Entidade
{
    private $id;
    private $nome;

    function __construct(Int $id, String $nome)
    {
        $this->id = $id;
        $this->nome = $nome;
    }

    public function getId(): Int
    {
        return $this->id;
    }

    public function getNome(): String
    {
        return $this->nome;
    }
}
