var miVariable = 'Rojo'; //Esta ya no se usa

const Pi = 3.1416;
//let miVariable = 'Rojo'; //Este si
//let estacion = "Adrian Franco";
//let numero = 32;

let boton = true; //Verdadero
let boton2 = false; //Falso

let comillas = ``

/*console.log("Hola mundo");
console.log("Hola otra vez");
console.log(Pi);*/

for(let i=0; i<10; i++){
    //console.log(i);
}

/*let j=0;
while(j<10){
    if(j==5)
    {
        console.log("Efectivamente, j es igual a 5");
    }
    console.log(`Ciclo while ${j}`); //Otra forma de concatenar
    j++;
}*/

let shopping = ['bread', 'milk', 'cheese', 'hummus', 'noodles'];

//JSOn

/*const manzana = {
    color: 'rojo',
    marca: 'appleRed',
    distribucion: {
        pais: 'Estados Unidos',
        telefono: '5512746352'
    }
}

console.log(manzana.color);*/

//Funciones

function imprimir(){
    console.log("Esta es mi primer función");
}

imprimir();

function suma(numero1, numero2){
    console.log(`El resultado de la suma es: ${numero1+numero2} `);
}

suma(12,15);

function suma2 (numero1, numero2){
    //Lo que vamos a realizar
    let resultado = numero1 + numero2;
    //Lo que camos a retornar
    return resultado;
}

console.log(suma2(3,5));
//Otra forma de hacer funciones

let suma3 = (a,b) => {
    let result = a + b;
    return result;
}

console.log(suma3('bs',5));

//divImagenes.
/*imagenVisual.src='./img/Galaxy1.jpg';
divImagenes.append(imagenVisual);*/