<?php

abstract class Felin extends Animal
{
    protected const CARACTERISTIQUE = "Griffes Retractiles";

    public function manger(): string
    {
        return "Je mange de la viande";
    }

    public function __toString():string
    {
        return "<h1>".parent::__toString().
            "<br>J'ai des ".self::CARACTERISTIQUE."</h1>";
    }
}