<?php

class Batteur extends Personne implements SuperMusicien
{
    public function jouerInstrument()
    {
        return "Je joue de la batterie";
    }

    public function ecrirePartition()
    {
        return "";
    }

    public function autreMethode()
    {
        // TODO: Implement autreMethode() method.
    }
}