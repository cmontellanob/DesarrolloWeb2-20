function saludar(){
var tiempo = new Date();
var hora, cad="son las ";

with (tiempo){

	hora = getHours();
	cad += hora + ":" + getMinutes()+":"+getSeconds();

}
if (hora < 12)
cad = "Buenos días, "+ cad;
else if (hora < 18)
cad = "Buenas tardes, "+ cad;
else
cad = "Buenas noches, " + cad;
return cad
}
