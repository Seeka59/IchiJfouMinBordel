let mC = document.getElementById("m²")
let type = document.getElementById("typeT");

const errorDisplay = (tag, message, valid) =>{
    const container = document.querySelector("."+ tag + "-container");
    const span = document.querySelector("." + tag + "-container > span");

    if(!valid){
        container.classList.add("error");
        span.textContent = message;
    }else {
        container.classList.remove("error");
        span.textContent = message;
    }
}

function calculvente()
 {
  alert("Prix d'achat " + document.getElementById("formulaire").elements["prix"].value);
  var vente= document.getElementById("formulaire").elements["prix"].value * document.getElementById("formulaire").elements["marge"].value;
  alert(vente);
   document.getElementById("formulaire").elements["vente"].value=vente;
}



if(type == "carrelage")
{
type == 40;
document.elements.prix();
}else if (type=="faience")
{
type == 30;
}else if(type=="placo")
{
type == 20;
}
else if(type == "brique")
{
type == 50;
}
else if (type=="parpaing")
{
type == 25;
}else if(type=="rejointoiment")
{
type == 30;
}


if(mC<0)
{

const calcul =() =>
{
mC * type == calcul;
}

calcul();

}