<?php
$conn = mysqli_connect("database-1.cpjk8vtdfv2l.us-east-1.rds.amazonaws.com", "losadas", "boysoldier28", "Gps");  // Establece conexi�n
$rows = mysqli_query($conn, "SELECT * FROM Gps.tabledata ORDER BY Fecha DESC LIMIT 1"); // genera el query a SQL
$fila = mysqli_fetch_assoc($rows);
echo json_encode($fila);
?>