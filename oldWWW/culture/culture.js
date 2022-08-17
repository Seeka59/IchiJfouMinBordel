const jourMax = [31,29,31,30,31,30,31,31,30,31,30,31];

let jour = 1;

const moisMax = ["Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Novembre","Decembre"];
let A =0;
let mois = moisMax[A];

const année = 2022;

if(jour>jourMax[A])
{A++;jour=1;}

const date =(dateJ,dateM,dateA) => {dateJ=jour;dateM=mois;dateA=année;}

const carotte = document.getElementById("Carotte");

carotte.appendChild("span");