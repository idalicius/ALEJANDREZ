function agregar(elemento){	var xmlhttp;	if(window.XMLHttpRequest)	{		xmlhttp = new XMLHttpRequest();	}	else	{		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");	}		xmlhttp.onreadystatechange = function()	{		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)		{			var elem = document.createElement("p");			var txt = document.createTextNode(xmlhttp.responseText);			elem.appendChild(txt);			document.body.appendChild(elem);			//document.getElementById("productos").innerHTML = xmlhttp.responseText;		}	}	var cdbarras = document.getElementById(elemento);	xmlhttp.open("GET","obtener_producto.php?cdbarras="+cdbarras.value,true);	xmlhttp.send();}/*function borrar(elemento){	var elem = document.getElementById(elemento);		alert(elem.id);}*/