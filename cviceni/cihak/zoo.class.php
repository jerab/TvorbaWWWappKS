<?php
/**
 * Created by PhpStorm.
 * User: Krakonos
 * Date: 15.10.2017
 * Time: 18:48
 */
//třída Zoo

class Zoo
{
    private $array = array();

    //základní funkce, ktera vrati array

    public function ziskejZvire()
    {
        return $this->array;
    }

    //funkce pro pridani nového zvirete
    public function pridej($zvire)
    {
        $this->array[] = $zvire;
    }

//funkce pro vypis celkoveho aktualniho poctu zvirat
    public function vypisPocet()
    {
        return count($this->array);
    }


//funkce pro odstraneni zvirete
    public function odstran($zvire)
    {
        foreach ($this->array as $key => $arr) {
            if ($zvire === $arr) {
                unset($this->array[$key]);
            }
        }
    }

//funkce pro odstraneni vsech polozek z pole
    public function destructor($zvire)
    {
        foreach ($this->array as $key => $arr) {
            unset($this->array[$key]);
            echo "Ukončuji instanci třídy: " . get_class($this);
        }
    }

    //seznam zvirat - zobrazi prehledny seznam zvirat serazeny v bodech pod sebou
    function seznamZvirat($array)
    {
        $out = "<ol>";
        foreach ($array as $arr) {
            $out .= "<li>" . $arr->getName() . "</li>";
        }
        $out .= "</ol>";

        return $out;
    }
}