<?php

class zoo
{

    public $poleZvirat = array();

    public function pridaniZvirete($zvire)
    {
        $this->poleZvirat[] =  $zvire;
    }

    public function odebraniZvirete()
    {
        array_splice($this->poleZvirat, 1);//odebrani posledniho zvirete z pole
    }

    public function seznamZvirat()
    {
        print_r($this->poleZvirat);
    }

    public function pocetZvirat()
    {
        count($this->poleZvirat);
        echo ('Pocet zvirat v ZOO je: ' . count($this->poleZvirat));
    }


}