
<html lang="es">
<head>
<title>Mi página web</title>
</head>
<body>
<h1>Bienvenido a mi web, LA PORTADA</h1>

<?php
while ($fila = mysql_fetch_array($rs_articulos)){
   echo '<p>';
   echo '<a href="' . site_url('/coche/muestra/' . $fila['id']) . '">' . $fila['marca'] . '</a>';
   echo '</br>';
   echo '<a href="' . site_url('/coche/muestra/' . $fila['id']) . '">' . $fila['modelo'] . '</a>';
   echo '</br>';
   echo '<a href="' . site_url('/coche/muestra/' . $fila['id']) . '">' . $fila['color'] . '</a>';
   echo '</br>';
   echo '<a href="' . site_url('/coche/muestra/' . $fila['id']) . '">' . $fila['id'] . '</a>';
   echo '</p>';
}
?>
</body>
</html>

