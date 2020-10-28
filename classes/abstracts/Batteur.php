<?php

class Batteur extends Personne implements Musicien, Compositeur
{

    public function jouerInstrument()
    {
        return "Je joue de la batterie";
    }

    public function ecrirePartition()
    {
        return "";
    }
}