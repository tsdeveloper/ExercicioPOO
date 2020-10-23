<?php
namespace Source;

interface DonoInterface
{

    public function __construct($nome, $sobreNome, $email);
    public function getNome();
    public function getSobreNome();
    public function getEmail();
}