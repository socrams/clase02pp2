<!DOCTYPE html>
<!--esto lo saque de internet para operar con un numero ingresado mas facil-->
<html>
<head>
	<meta charset="utf-8">
	<title>Numeros Primos</title>
</head>
<body>	<form method="post" action="try.php" name="formEsPrimo">
		<input type="text" name="inputNumPrimo" required>
		<br>
		<button type="submit">Ver si es primo</button>
	</form>
</body>
</html>



<?php
$numeroIngresado=$_POST['inputNumPrimo'];

function detectarDivisores()
{
	for($numeroAnterior=2;$numeroAnterior<$numeroIngresado;$numeroAnterior++)
	{
	    if($numeroIngresado%$numeroAnterior==0)
	    {
	        break;
	        //echo "<br> nro: $numeroAnterior";
	        //si entra aca no es primo
	    }
	}
}	
function detectarPrimo()
{
	if($numeroAnterior<$numeroIngresado)
	{
	    return false;
	}
	else
	{
	    return true;
	    
	}
}

detectarDivisores();
if (detectarPrimos())
{
	echo "$numeroIngresado  ES primo";
}
else
{
	echo "$numeroIngresado  NO es primo";
}

?>