<?php
class Carro{
    public $Cor;
    public $Marca;
    public $Modelo;
    public $Chassi;

    public function Ligar(){
echo "Ligaaaaaaaaaa <br>";
    }
public function Frear(){
echo "freiaaaaaaaaaaaaa <br>";
}

public function Publicar(){
    echo  "Cor: ". $this->Cor ."<br>";
    echo  "Marca: ". $this->Marca ."<br>";
    echo  "Modelo: ". $this->Modelo ."<br>";
    echo  "Chassi: ". $this->Chassi ."<br>";
}

   
}
$Prata = new Carro ();
$Prata -> Cor = "Prata ";
$Prata -> Marca = "Chevrolet"  ;
$Prata -> Modelo ="Onix";
$Prata -> Chassi = "FGT56YHG77UJIO994";

//var_dump($Prata);

$Prata -> Publicar();
$Prata -> Ligar();
$Prata -> Frear();

