<?php

class Compte
{
    private $numero;
    private $solde;

    /**
     * Compte constructor.
     * @param $numero
     * @param $solde
     */
    public function __construct($numero)
    {
        $this->numero = $numero;
        $this->solde = 80;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @return int
     */
    public function getSolde(): int
    {
        return $this->solde;
    }

    /**
     * @param int $solde
     */
    public function setSolde(int $solde): void
    {
        if ($solde > 0)
            $this->solde = $solde;
    }

    public function crediter(int $montant)
    {
        if ($montant > 0)
            $this->solde += $montant;
    }

    public function debiter(int $montant){
        if ($montant > 0)
            $this->solde -= $montant;
    }

    public function __toString()
    {
        return "Compte(num : {$this->numero}, solde : {$this->solde})";
    }
}


