<?php

function saludar(){
    return 'Hola mundo';
}

function saludame($nombre='Adrian'){
    return 'Hola '.$nombre; 
}

//Llamada de función

echo saludar(); //La palabra reservada "echo" imprime texto en el navegador (para visualizar)
echo '<br/>'; //Da un salto de línea
echo saludame('Adrian');

?>
