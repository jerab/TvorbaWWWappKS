<?php

class ZOO {
    public $pole = array();
    
    public function pridejZvire($zvire){
        $this->pole[] = $zvire;
    }
    
    public function vypisZOO(){
        print_r($this->pole);
    }
    
    public function vypisPocet(){
        return count($this->pole);
    }
}
