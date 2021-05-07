<!DOCTYPE html>
<!--esto lo saque de internet para operar con un numero ingresado mas facil-->
<html>
<head>
	<meta charset="utf-8">
	<title>Numeros Primos</title>
</head>
<body>	<form method="post" action="centronumerico.php" name="formEsPrimo">
		<input type="text" name="inputNumPrimo" required>
		<br>
		<button type="submit">tiene centro numerico?</button>
	</form>
</body>
</html>
<?php
$numeroIngresado=$_POST['inputNumPrimo'];
if ($numeroIngresado==1 || $numeroIngresado==0)
{
	echo "<br>no tiene centro numerico el numero ingresado $numeroIngresado";
	exit;
}
$sumaAtras=0;
for ($i=($numeroIngresado-1);$i>0;$i--)
{
	$sumaAtras=$sumaAtras+$i;
}
$sumaArriba=$sumaAtras;
for ($g=($numeroIngresado+1);$sumaArriba>0;$g++)
{
	$sumaArriba=$sumaArriba-$g;
}
if ($sumaArriba<0)
{
	echo "<br>no tiene centro numerico el numero ingresado $numeroIngresado";
}
else
{
	echo "<br>es el centro numerico";
}
?>