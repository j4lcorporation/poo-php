<?php

class Personne
{
    private $prenom;
    private $age;
    private $conjoint;
    public static $compteur;
    public const COULEUR = "Vert";

    public function __construct(string $prenom, string $age)
    {
        $this->prenom = $prenom;
        $this->age = $age;
        $this->conjoint = null;
        self::$compteur++;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    public function getAge(): string
    {
        return $this->age;
    }

    public function setAge(string $age): void
    {
        $this->age = $age;
    }

    public function getConjoint(): Personne
    {
        return $this->conjoint;
    }

    public function seMarier(Personne $personne): void
    {
        if ($this->age >= 18 && $personne->age >= 18 && $this->conjoint == null && $personne->conjoint == null) {
            $this->conjoint = $personne;
            $personne->conjoint = $this;
        }
    }

    public function __toString(): string
    {
        $affichage = "{$this->prenom}, {$this->age} ans de couleur ".self::COULEUR;

        if ($this->conjoint !== null) {
            $affichage .= "a pour conjoint {$this->conjoint->getPrenom()}, {$this->conjoint->getAge()} ans";
        }
        return "<h1>{$affichage}</h1>";
    }
}