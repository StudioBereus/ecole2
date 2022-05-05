<?php
class FormValidation{
    //Attributs
    private $tabForm=array();
    
    //constructeurs
    public function __construct(array $_tab){
        $this->tabForm=$_tab;
    }

    //Méthodes
    public function isFilled(){
        $fill=true;
        foreach($this->tabForm as $key=>$val){
            if(empty($_POST[$key])){
                $fill=false;
                break;
            }
        }
        return $fill;
    }
    public function isValid(){
        $valid=false;
        foreach($this->tabForm as $key =>$val ){
            if($_POST[$key]!=$val){
                $valid=false;
                return $valid;
            }
        }
        return $valid; 
    }
}
?>