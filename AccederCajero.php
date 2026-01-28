<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Validación de Usuario</title>
</head>

<?php
$nombre = $_GET['nombreUsuario'] ?? '';
$clave  = $_GET['claveUsuario'] ?? '';

$provincia = array("index.html","PantallaCajero.html","Huelva"); 

echo "<h4 style='background-color:pink'>Comprobante Usuario y Contraseña</h4>";
echo "Nombre del Cliente: " . $nombre . "<br>";
echo "Clave ingresada: " . $clave . "<br><br>";

if ($clave == "1234") {
	echo "Saludos y bienvenido " . $nombre . ". Ha ingresado correctamente su información.<br>";
	$p = 1;
} else {
	echo "La contraseña introducida no es correcta.<br>";
	$p = 0;
}

echo "Destino: " . $provincia[$p];
?>

<body>

<br>
<button onclick="window.location.href='<?php echo $provincia[$p]; ?>';">
	Siguiente...
</button>

<hr style="height:6px;border-width:0;background-color:red">

<p>
	La parte sobre la línea roja corresponde a los datos procesados en el lado Servidor.<br>
	Esta parte debajo de la línea corresponde al lado Cliente.
</p>

<p id="GoToDestino"></p>

<script>
	var destino = "<?php echo $provincia[$p]; ?>";
	document.getElementById("GoToDestino").innerHTML = destino;
</script>

</body>

<footer>
	<hr style="height:4px;border-width:2px;background-color:yellow">
	<p>
		<mark style="color:red;">
			Recordatorio de los ejercicios de variables PHP y paso de datos Servidor → Cliente
		</mark>
	</p>
	<a href="ejercicio_1.php">Ejercicio 1</a>
	<a href="ejercicio_2.php"><mark>Ejercicio 2</mark></a>
	<a href="ejercicio_3.php">Ejercicio 3</a>
	<a href="ejercicio_4.php">Ejercicio 4</a>
	<a href="ejercicio_5.php">Ejercicio 5</a>
	<a href="ejercicio_6.php">Ejercicio 6</a>
</footer>
</html>
