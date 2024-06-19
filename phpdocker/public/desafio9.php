<?php 

class Bola{
    private $cor;
    private $circunferencia;
    private $material;

    public function __construct($cor, $circunferencia, $material)
    {
        $this->atribuirCor($cor);
        $this->atribuirCircunferencia($circunferencia);
        $this->atribuirMaterial($material);
    }
    public function mostrarCor(){
        echo $this->cor().'<br>';
    }
    public function cor(){
        return $this->cor;
}
    public function trocarCor(cor_nova){
        $this->atribuirCor($cor_nova);
    }

    public function atribuirMaterial($valor_material){
        $this->material = $valor_material;
    }

    public function atribuirCircunferencia($valor_circunferencia){
        $this->circunferencia = $valor_circunferencia;
    }
    public function atribuirCor($cor){
        $this->cor = $cor;
    }    
}

$bola1 = new Bola('azul', 68, 'couro');