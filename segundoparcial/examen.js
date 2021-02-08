function mostrarPagina(pagina) // lama por GET utilizando ajax
{
	var ajax=new XMLHttpRequest();
	ajax.open("GET", pagina+"?nocache=Math.random()", true);
	ajax.onreadystatechange=function ()
	{
		if (ajax.readyState==4)
		{

			document.getElementById('contenido').innerHTML=ajax.responseText;
		}
	}
	ajax.send();

}

function menor()
{

 var  a=parseInt(document.getElementById('a').value);
 var  b=parseInt(document.getElementById('b').value);
 var  c=parseInt(document.getElementById('c').value);
 var  d=parseInt(document.getElementById('d').value);

document.getElementById('menora').innerHTML="";
document.getElementById('menorb').innerHTML="";
document.getElementById('menorc').innerHTML="";
document.getElementById('menord').innerHTML="";

if (a<b && a<c && a<d)
{
	document.getElementById('menora').innerHTML="es el menor";
}
if (b<a && b<c && b<d)
{
	document.getElementById('menorb').innerHTML="es el menor";
}
if (c<a && c<b && c<d)
{
	document.getElementById('menorc').innerHTML="es el menor";
}
if (d<a && d<b && d<c)
{
	document.getElementById('menord').innerHTML="es el menor";
}



}
function sumar(){
	 var  a=parseInt(document.getElementById('a').value);
 var  b=parseInt(document.getElementById('b').value);
 var c =a+b;
 document.getElementById('resultado').innerHTML=c;
 document.getElementById('resultado').style="background-color: black;color:white";


}	

function ver(id){
var ajax=new XMLHttpRequest();
	$url="ver.php?nocache=Math.random()&id="+id;
	ajax.open("GET", $url, true);
	ajax.onreadystatechange=function ()
	{
		if (ajax.readyState==4)
		{

			document.getElementById('resultado').innerHTML=ajax.responseText;
		}
	}
	ajax.send();

}	

function comentarios(id){
var ajax=new XMLHttpRequest();
	$url="comentarios.php?nocache=Math.random()&id="+id;
	ajax.open("GET", $url, true);
	  	document.getElementById('resultado').innerHTML="";

	ajax.onreadystatechange=function ()
	{
		if (ajax.readyState==4)
		{

			document.getElementById('contenido').innerHTML=ajax.responseText;
		}
	}
	ajax.send();

}	

function comentar(idnoticia){
var ajax=new XMLHttpRequest();
  	var comentario=document.getElementById('comentario').value;
  	document.getElementById('resultado').innerHTML="";

	$parametros="nocache=Math.random()&idnoticia="+idnoticia+"&comentario="+comentario;
	ajax.open("POST", 'comentar.php', true);
	ajax.onreadystatechange=function ()
	{
		if (ajax.readyState==4)
		{

			document.getElementById('contenido').innerHTML=ajax.responseText;
		}
	}
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
	ajax.send($parametros);

}	