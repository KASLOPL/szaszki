var pole_1 = "";
var pole_2 = "";
function ruch_figury(id_button)
{
    var pole1 = true;
    var pole2 = false;
    if(pole1 == true)
    {
        pole_1 = id_button;
        pole1 = false;
        pole2 = true;
    }
    xx.innerHTML = pole_1;
}
