<?php

class Stikline {
    private 
        $turis,
        $kiekis;

    public function __construct($turis) {
        $this->turis = $turis;
    }

    public function ipilti($kiekis) {
        if ($this->kiekis + $kiekis <= $this->turis) {
            $this->kiekis += $kiekis;            
            return $this;
        }
        else {
            echo '<br>','Per daug pili! ';
            $temp = $kiekis - $this->turis;
            $this->kiekis = $this->ispilti();
            $this->kiekis += $kiekis - $temp;
            return $this;
        }
    }

    public function ispilti() {
        return $this->kiekis;
    }

}