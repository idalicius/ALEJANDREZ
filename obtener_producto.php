<?php
include_once("./config.php");

$mydb = mysql_connect($host, $dbuser, $dbpass) or die(mysql_error());
mysql_select_db("pos") or die(mysql_error());

$sql = "SELECT * FROM productos WHERE cdbarra = '".$_GET["cdbarras"]."' LIMIT 1";
$result = mysql_query($sql,$mydb) or die(mysql_error());
$resultado = mysql_num_rows($result);


if($resultado == 1)
{
	list($id,$cdbarras,$producto,$talla,$precio,$cantidad) = mysql_fetch_row($result);
	echo $cdbarras." ".$producto." ".$precio;
}
mysql_close($mydb);
?>