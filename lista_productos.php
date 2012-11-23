<?php
include_once("config.php");

$mydb = mysql_connect($host, $dbuser, $dbpass) or die(mysql_error());
mysql_select_db("pos") or die(mysql_error());


$sql = "SELECT * FROM productos";
$result = mysql_query($sql,$mydb) or die(mysql_error());

?>
<table>
<tr>
	<th>ID</th><th>CODIGO</th><th>PRODUCTO</th><th>TALLA</th><th>PRECIO</th><th>CANTIDAD</th>
<tr>
<?php
$inicio = microtime(true);
while(list($id,$cdbarras,$producto,$talla,$precio,$cantidad) = mysql_fetch_row($result))
{
	echo "<tr><td>".$id."</td><td>".$cdbarras."</td><td>".$producto."</td><td>".$talla."</td><td>".$precio."</td><td>".$cantidad."</td></tr>";
}

usleep(1000);
$fin = microtime(true);

echo ($fin-$inicio);
mysql_close($mydb);
?>
</table>