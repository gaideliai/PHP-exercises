<?php

class Pinigine
{
    
    private
        $popieriniaiPinigai = 0,
        $metaliniaiPinigai = 0,
        $monetos = 0,
        $banknotai = 0;

    public function ideti($kiekis) {
        if ($kiekis <= 2) {
            $this->metaliniaiPinigai += $kiekis;
        }
        else {
            $this->popieriniaiPinigai += $kiekis;
        }
        return $this;
    }

    public function skaiciuoti() {
        echo '<br>'.($this->metaliniaiPinigai + $this->popieriniaiPinigai).'<br>';
    }

    // public function get_banknotai() {
    //     return $this->popieriniaiPinigai;
    // }

    // public function get_monetos() {
    //     return $this->metaliniaiPinigai;
    // }

    public function monetos() {
        $monetu_nominalai = [2, 1, 0.5, 0.2, 0.1, 0.05, 0.02, 0.01];
        for ($i=0; $i < count($monetu_nominalai); $i++) { 
            while ($this->metaliniaiPinigai >= $monetu_nominalai[$i]) {
                $this->metaliniaiPinigai -= $monetu_nominalai[$i];
                $this->monetos++;
            }            
        }
        return $this->monetos;
    }

    public function banknotai() {
        $banknotu_nominalai = [500, 200, 100, 50, 20, 10, 5];
        for ($i=0; $i < count($banknotu_nominalai); $i++) { 
            while ($this->popieriniaiPinigai >= $banknotu_nominalai[$i]) {
                $this->popieriniaiPinigai -= $banknotu_nominalai[$i];
                $this->banknotai++;
            }            
        }
        return $this->banknotai;
    }


}
