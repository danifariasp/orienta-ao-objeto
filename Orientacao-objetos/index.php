<?php
class Pessoa
{
    public $Nome;
    public $Idade;
    public $Peso;
    public function Andar(){
echo "Ande mais rápido <br>";
    }
public function Falar(){
    echo "blá blá blá <br>";
}
public function ImprimirDados(){
    echo  "Nome: ". $this->Nome ."<br>";
    echo "Idade:". $this->Idade."<br>";
    echo "Peso:". $this->Peso."<br>";
    }
}
$Daniela = new Pessoa ();
$Daniela -> Nome = "Daniela ";
$Daniela -> Idade = 18 ."<br>" ;
$Daniela -> Peso =60 ."<br>";
//var_dump($Daniela);


$Maria = new Pessoa ();
$Maria -> Nome = "Maria <br>";
$Maria -> Idade = 22 ."<br>";
$Maria -> Peso = 55 ."<br>";
//var_dump($Maria);

$Daniela -> ImprimirDados();
$Daniela -> Andar();
$Daniela -> Falar();
