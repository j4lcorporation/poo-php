<?php

abstract class Animal
{
    private $couleur;
    private $poids;

    public function __construct(string $couleur, int $poids)
    {
        $this->couleur = $couleur;
        $this->poids = $poids;
    }

    public function getCouleur(): string
    {
        return $this->couleur;
    }

    public function setCouleur(string $couleur): void
    {
        $this->couleur = $couleur;
    }

    public function getPoids(): int
    {
        return $this->poids;
    }

    public function setPoids(int $poids): void
    {
        $this->poids = $poids;
    }

    public function boire(): string
    {
        return "Je bois de l'eau";
    }

    abstract public function manger(): string;

    public abstract function seDeplacer(): string;

    public abstract function crier(): string;

    public function __toString():string
    {
        return "Je suis un ".get_class($this).
            "<br>Mon poids est de ".$this->poids.
            "<br>Ma couleur est ".$this->couleur.
            "<br>".$this->boire().
            "<br>".$this->manger().
            "<br>".$this->seDeplacer().
            "<br>".$this->crier();
    }
}