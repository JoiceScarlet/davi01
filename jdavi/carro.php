<?php

class carro{
    
    private $marca;
    private $cor;
    private $ano;
    private $modelo;
    private $combustivel;


    public function setMarca($marcap){
        $this->marca = $marcap;
    }

    public function setCor($corp){
        $this->cor = $corp;
    }

    public function setAno($anop){
        $this->ano = $anop;
    }

    public function setModelo($modelop){
        $this->modelo = $modelop;
    }

    public function setCombustivel($combustivelp){
        $this->combustivel = $combustivelp;
    }



    public function getMarca(){
        echo $this->marca;
    }

    public function getCor(){
        echo $this->cor;
    }   

    public function getAno(){
        echo $this->ano;
    }

    public function getModelo(){
        echo $this->modelo;
    }

    public function getcombustivel(){
        echo $this->combustivel;
    }

}


?>