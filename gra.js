var pole_1 = "";
var pole_2 = "";
var pole1_id = "";
var pole2_id = "";
function ruch_figury(id)
{
        pole_1 = id.src.slice(33,48);
        pole1_id = id;

    xx.innerHTML = pole_1;
    licznik();
}

function licznik()
{
    var licznik = 0;
    licznik ++;
    xxx.innerHTML = licznik;
}