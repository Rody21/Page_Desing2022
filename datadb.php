<?php
$conn = mysqli_connect("database-1.clynxv1ewc7s.us-east-1.rds.amazonaws.com:3306", "admin", "mainreyna", "gps");  // Establece conexi�n
$rows = mysqli_query($conn, "SELECT * FROM gps.db ORDER BY Fecha DESC LIMIT 1"); // genera el query a SQL
$fila = mysqli_fetch_assoc($rows);
echo json_encode($fila);
?>

