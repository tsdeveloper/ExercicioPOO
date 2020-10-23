<?php

interface DonoInterface{
    public function __construct($nome, $sobreNome, $email);
    public function getNome();
    public function getSobreNome();
    public function getEmail();}
class Dono implements DonoInterface{
    private $nome;
    private $sobreNome;
    private $email;
    /**     * User constructor.*@param $nome  *@param $sobreNome *@param $email*/
    public function __construct($nome, $sobreNome, $email)
    {  $this->nome = $nome;
        $this->sobreNome = $sobreNome;
        $this->email = $email;}
    /**      * @return mixed      */

    public function getNome()
    {return $this->nome;}
    /**
     * @return mixed
     */
    public function getSobreNome()
    {return $this->sobreNome;}

    /**
     * @return mixed
     */
    public function getEmail()
    {return $this->email;}




}