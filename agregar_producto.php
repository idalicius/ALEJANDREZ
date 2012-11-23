<?php
include_once("./config.php");

$cdbarras = $_POST["cdbarras"];
$producto = strtoupper($_POST["producto"]);
$talla = $_POST["talla"];
$precio = $_POST["precio"];
$cantidad = $_POST["cantidad"];

/*
foreach($_POST as $nombre=>$valor)
{
echo $nombre." = ".$valor."<br>";
}
*/

$mydb = mysql_connect($host, $dbuser, $dbpass) or die(mysql_error());
mysql_select_db($dbname) or die(mysql_error());

$sql = "INSERT INTO productos(id,cdbarra,producto,talla,precio,cantidad) VALUES(NULL,'$cdbarras', '$producto','$talla',$precio,$cantidad)";
$result = mysql_query($sql,$mydb) or die(mysql_error());
$agregado = mysql_affected_rows();

include_once("alta_productos.php");
if($agregado == 1)
{
	echo "<p>$agregado Producto agregado correctamente</p>";
}

mysql_close($mydb);
?>