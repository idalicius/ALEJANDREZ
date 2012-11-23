<script src="./js/ajax.js"></script>
<script>
	function limpiar()
	{
	  var obj = document.getElementById("cdbarras");
	  obj.value="";
  
	}
	
	function foco()
	{
		document.getElementById("cdbarras").focus();
	}
</script>
Codigo de barras: <input type="text" id="cdbarras" name="cdbarras" onkeyup="agregar(this.id)">
<p><input type="button" value="Limpiar" onclick=(limpiar())></p>
<div id="productos"></div>
