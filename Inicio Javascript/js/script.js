document.getElementById("enviar").onclick = () =>{
    let opcion = document.getElementById("opcion").value;
    let divImagenes = document.getElementById("imagenes");
    let imagenVisual=[];
    
    for(let i=0; i<opcion; i++)
    {
        imagenVisual[i] = document.createElement("img");
    }
    
    for(let i=1; i<=opcion; i++)
    {
        imagenVisual[i-1].src=`./img/Galaxy${i}.jpg`;
        divImagenes.append(imagenVisual[i-1]);
    }
}
