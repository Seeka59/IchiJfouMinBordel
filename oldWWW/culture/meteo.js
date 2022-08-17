const target = document.getElementById('target');
const temperature = document.getElementById('temperature');
const humiditer = document.getElementById('humiditer');

var temps = 0;
var hum = 0;

var brasseur = false;



    const createWarning =() => {
        const letter = document.createElement("span");
        target.appendChild(letter);
        letter.textContent = `Warning ${temps} C° `;
        }
        if(temps <= 0 )
        {
            createWarning();
            brasseur=true;
        }
        if(temps > 0)
        {
            target.textContent=`La temperature est de ${temps}`;
            brasseur=false;
        }
        if(hum <= 20)
        {
            humiditer.textContent = `Warning Humidité ${hum}%`;
        }
    
