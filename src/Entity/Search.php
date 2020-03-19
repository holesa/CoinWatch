<?php

namespace App\Entity;

class Search
{
    private $coin;
    private $exchange;

    public function getCoin(){
        return $this->coin;
    }

    public function getExchange(){
        return $this->exchange;
    }

    public function setCoin($coin){
        return $this->coin = $coin;
    }

    public function setExchange($exchange){
        return $this->exchange = $exchange;
    }

    }