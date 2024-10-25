<?php

$nombre = "melqui";

$apellido = 'sanchez';

//Variables numericas 
//Entero = Int
$edad = '18';
//Decimal = Double 
$saldo = 100.675;

//variables logicas o boleano

$estaLloviendo = false;
$siEstaLloviendo = true;

//el estilo de escritura camelaCase se utiliza para variable y funsiones
// el estilo de escritura PascalCase se utiliza para clases e interfaces
// el estilo de escritura snake-case se utiliza para recursos(img,videos,archivos)

function ejemplo(){
    return 2+2;
}

function sumar($numUno, $numDos){
    return $numUno+$numDos;
}

//POO
//crear una clase vehiculo con los datributos 
//Atributos: marca, modelo, catgoria, color, velocidadmaxima 
//Metodo: Acelerar(), frenar()

class vehiculo {
    public $marca;
    public $modelo;
    public $catgoria;
    public $color;
    public $velocidad;

    
public function __construct(
    $marca,
    $modelo,
    $catgoria,
    $color,
    $velocidad){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->catgoria = $catgoria;
        $this->color = $color;
        $this->velocidad = $velocidad;
    
}
public function acelera ($cantidad){
    echo"has acelerado $cantidad km/h";
    echo "velocidad actual", $this-> velocidad."km/h";
}


public function frenar(){

}

}

// crear un objeto de la clase vehiculo
$coche = new vehiculo(
    "renoult",
    "2019",
    "publico",
    "gris",
    10
);

function mostrarinf($coche){
    echo "marca : ".$coche->marca;
    echo "velocidad inicial :".$coche->velocidad;
}

mostrarinf($coche);

$coche->acelera(50);

mostrarinf($coche);


?>



