<?php

class Vehiculo{
    public $numero_de_llantas;
    private $kilometraje;

    //Esta funcion siempre se manda a llamar cuando instanciamos un objeto
    public function __construct(){
    }

    public function getKilometraje(){

    }

    private function inicializarKilometraje(){
        //Aqui hago uso de la variable de mi clase
        $this->kilometraje = 0;
    }

    protected function setKilometraje($km){
        $this->kilometraje = $this->kilometraje + $km;
        return $this->kilometraje;
    }

}

$auto = new Vehiculo(); //Instanciar objeto
$auto->numero_de_llantas = 4;
echo 'Numero de llantas :'.$auto->numero_de_llantas;
echo '<br/>';
echo 'El kilometraje es: '.$auto->getKilometraje().' y soy feliz';

/*Creo mi clase auto que herda de vehiculo*/

class Auto extends Vehiculo{
    public $marca = 'N/A';
    public $anio = 'N/A';
    public $color = 'N/A';

    function setPropiedades($marcaRe='N/A',$colorRe,$anioRe='2022'){
        $this->marca=$marcaRe;
        $this->color=$colorRe;
        $this->anio=$anioRe;
    }

    function avanzar($km){
        return $this->setKilometraje($km);
    }
}

echo'<br/>-------------------<br/>';

$bocho = new Auto();
$bocho->setPropiedades('VW','rojo',2020);
$bocho->numero_de_llantas = 4;
echo'<br/>';
echo'Numero de llantas: ',$bocho->numero_de_llantas;
echo'<br/>';
echo'Marca: '.$bocho->marca.'<br/>';
echo'Color: '.$bocho->color.'<br/>';
echo'Año: '.$bocho->anio.'<br/>';
echo 'Km actual: '.$bocho->getKilometraje().'<br/>';
$bocho->avanzar(50);
echo 'Km actual: '.$bocho->getKilometraje().'<br/>';
$bocho->avanzar(20);
echo 'Km actual: '.$bocho->getKilometraje().'<br/>';



?>