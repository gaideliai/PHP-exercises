<?php

class Grybas
{
    
    private
        $valgomas,
        $sukirmijes,
        $svoris;

    public function __construct() {
        $this->ar_valgomas();
        $this->ar_sukirmijes();
        $this->set_svoris();
    }

    public function ar_valgomas() {
        $this->valgomas = rand(0, 1);
    }

    public function ar_sukirmijes() {
        $this->ar_sukurmijes = rand(0, 1);
    }

    public function set_svoris() {
        $this->svoris = rand(5, 45);
    }

    public function get_valgomas() {
        return $this->valgomas;
    }

    public function get_sukirmijes() {
        return $this->sukirmijes;
    }

    public function get_svoris() {
        return $this->svoris;
    }

}

class Krepsys
{
    public $svoris = 0;


    public function grybauti() {
        $grybas = new Grybas;
        if ($grybas->get_valgomas() && !$grybas->get_sukirmijes()) {
            $this->svoris += $grybas->get_svoris();
            // echo $grybas->get_valgomas(), '<br>';
            // echo $grybas->get_sukirmijes(), '<br>';
            // echo $this->svoris, '<br>';
        }
    }

}
