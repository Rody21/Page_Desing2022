<?php
$conn = mysqli_connect("127.0.0.1:3306", "root", "", "pdesign");  // Establece conexi�n
$rows = mysqli_query($conn, "SELECT * FROM pdesign.db ORDER BY Fecha DESC LIMIT 1"); // genera el query a SQL
?>
<table border = 1 cellpadding = 10>     <!-- Se genera una tabla (la cual se entregara a index.php) -->
  <tr>
    <td>Latitud</td>  <!-- Info de las columnas -->
    <td>Longitud</td>
    <td>Fecha</td>
  </tr>
  <?php $i = 1; ?>
  <?php foreach($rows as $row) : ?>     <!-- Funci�n FOR para crear columnas el valor $row es el nombre de la columna en SQL -->
    <tr>            
      <td><?php echo $row["Latitud"]; ?></td>
      <td><?php echo $row["Longitud"]; ?></td>
      <td><?php echo $row["Fecha"]; ?></td>
    </tr>
  <?php endforeach; ?>
</table>
