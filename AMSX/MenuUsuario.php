<?php
include('../BDConfig.php');
$re = $linkBD -> query("SELECT * FROM AMS_Usuarios");?>

<table>
<tr>
<th>Serial</th>
<th>Nombre</th>
<th>Alias</th>
</tr>
<?php
while ($row = $re -> fetch_assoc()){
$nom = utf8_encode($row['SerialNumber']);
$ape = utf8_encode($row['NomUser']);
$edad = $row['AliUser'];
?>
<tr>
<td><?php echo "$nom";?> </td>
<td><?php echo "$ape";?> </td>
<td><?php echo "$edad";?> </td>
</tr>
<?php
}
?>
</table>
