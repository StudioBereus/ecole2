<?php
class Financier{
    public $capital;
    public $tauxMensuel;
    public $nbMois;

    public function __construct($_capital, $_tauxAnnuel,$_ans){
        $this->capital=$_capital;
        $this->tauxMensuel=(double)$_tauxAnnuel/(100*12);
        $this->nbMois=$_ans*12;

    }
    public function calculMensualite(){
        $quotient=(1-pow((1+$this->tauxMensuel),-$this->nbMois));
        $mensualite=($this->capital*$this->tauxMensuel)/$quotient;
        return round($mensualite,2,PHP_ROUND_HALF_UP);
    }                                                
}
?>