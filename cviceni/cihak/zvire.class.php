<?php

/*
 * Zvire
 * zvire.class.php
 */

class Zvire
{
    private $name;

    //constructor
    function __construct($name)
    {
        $this->name = $name;
    }

    //funkce pro vracení jména zvirete
    public function getName()
    {
        return $this->name;
    }
}



