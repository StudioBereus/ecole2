<?php

class ComptablePublic{
    //Attributs
    private $nom=' ';
    private $revenu=0;
    public const tx1=0.09;
    public const tx2=0.14;


    public function __construct(string $_nom, float $_revenu){
        $this->nom=$_nom;
        $this->revenu=$_revenu;
    }
    //Proprietes
    public function getRevenu(){
        return $this->revenu;
    }
    public function getNom(){
        return $this->nom;
    }
    //Methodes
    public function calculImpot(){
        $impot=0;
        
        if ($this->revenu<=15000){
            $impot=$this->revenu*self:: tx1;
        }
        else{
            $impot=15000*self::tx+($this->revenu-15000)*self::tx2;
        }
        return $impot;
    }
}
?>