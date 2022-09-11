<?php
$conn = mysqli_connect("desing.cwpobsmp7w7k.us-east-1.rds.amazonaws.com", "admin", "Neverland21", "gps");  // Establece conexi�n
$rows = mysqli_query($conn, "SELECT * FROM gps.db ORDER BY Fecha DESC LIMIT 1"); // genera el query a SQL
$fila = mysqli_fetch_assoc($rows);
echo json_encode($fila);
?>