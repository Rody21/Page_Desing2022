<?php
include "varia.php";
$conn = mysqli_connect($Bendpoint, $BUSER, $Bclave, $Bname);  // Establece conexi n
$rows = mysqli_query($conn, "SELECT * FROM bdesign.Basedatos ORDER BY Fecha DESC LIMIT 1"); // genera el query a SQL
$fila = mysqli_fetch_assoc($rows);
echo json_encode($fila);
?>

