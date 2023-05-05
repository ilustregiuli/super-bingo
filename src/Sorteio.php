<?php

class Sorteio
{
    private $numerosSorteados;
    private $ultimoSorteado;

    public function __construct()
    {
        $this->numerosSorteados = [];
    }

    public function getNumerosSorteados()
    {
        return $this->numerosSorteados;
    }

    public function getUltimoSorteado()
    {
        return $this->ultimoSorteado;
    }

    private function guardaNumero($numero) 
    {
        $this->numerosSorteados[] = $numero;
    }

    public function sorteiaNumero()
    {
        $numero = random_int(1, 75);

        if (!in_array($numero, $this->numerosSorteados)) {
           $this->guardaNumero($numero);
           $this->ultimoSorteado = $numero;
        }               
    }
   
}










