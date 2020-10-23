<?php

interface AnimalInterface
{
public function __construct($bixo, $porte, $tipo);

    public function getBixo();
    public function getPorte();
    public function getTipo();
}

class Animal implements AnimalInterface
{
    private $bixo;
    private $porte;
    private $tipo;

    /**
     * Animal constructor.
     * @param $bixo
     * @param $porte
     * @param $email
     */
    public function __construct($bixo, $porte, $tipo)
    {
        $this->bixo = $bixo;
        $this->porte = $porte;
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getBixo()
    {
        return $this->bixo;
    }

    /**
     * @return mixed
     */
    public function getPorte()
    {
        return $this->porte;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }


}