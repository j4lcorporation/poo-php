<?php

class Personne
{
    private $prenom;
    private $age;
    private $conjoint;

    public function __construct($prenom, $age)
    {
        $this->prenom = $prenom;
        $this->age = $age;
        $this->conjoint = null;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getConjoint()
    {
        return $this->conjoint;
    }

    public function seMarier(Personne $personne)
    {
        if (
            $this->age >= 18
            &&
            $personne->age >= 18
            &&
            $this->conjoint == null
            &&
            $personne->conjoint == null
        ) {
            $this->conjoint = $personne;
            $personne->conjoint = $this;
        }
    }


}