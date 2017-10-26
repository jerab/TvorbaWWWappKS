<?php
/**
 * Created by PhpStorm.
 * User: Krakonos
 * Date: 15.10.2017
 * Time: 18:48
 */

class Zoo
{
    private $array = array();

    public function ziskejZvire()
    {
        return $this->array;
    }

    public function pridej($zvire)
    {
        $this->array[] = $zvire;
    }

    public function vypis()
    {
        return count($this->array);
    }

    public function odstran($zvire)
    {
        foreach ($this->array as $key => $arr)
        {
            if ($zvire === $arr)
            {
                unset($this->array[$key]);
            }
        }
    }


    public function destructor($zvire)
    {
        foreach ($this->array as $key => $arr)
        {
           unset($this->array[$key]);
            echo "Ukončuji instanci třídy: " . get_class($this) ;
        }
    }

    function seznamZvirat($array)
    {
        $out = "<ol>";
        foreach ($array as $arr)
        {
            $out .= "<li>".htmlspecialchars($arr->getName())."</li>";
        }
        $out .= "</ol>";

        return $out;
    }
}