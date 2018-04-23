<!DOCTYPE html>
<html>
<head>
<style>
table,tr,td {
	border : 1px solid black;
}
</style>
</head>
<body>
<?php
include ('config.php');
$sql="SELECT*from datapengguna ORDER BY id";
$result=mysql_query($sql) or die (mysql_error());
?>
<center><h1>Data</h1>
<table>
<tr>
<td align="center">id
<td align="center">no1
<td align="center">oprs
<td align="center">no2
<td align="center">result
<td align="center">catatan
</tr>
<?php
while($row=mysql_fetch_array($result))
{
echo"<tr>";
echo"<td>".$row["id"]."</td>";
echo"<td>".$row["no1"]."</td>";
echo"<td>".$row["oprs"]."</td>";
echo"<td>".$row["no2"]."</td>";
echo"<td>".$row["result"]."</td>";
echo"<td>".$row["catatan"]."</td>";
echo"<td>","<a href=\"pros_delete.php?id=".$row['id']."\">Padam</a>";
}
echo"</table>";
echo"<center>";
echo"<br>";
?>
</table>
<button><a href="profcalculate.php" >Kembali</a></button>
</center>
</body>
</html>