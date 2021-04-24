<?php
$viaje=rand(1,3);
switch ($viaje)
{
	case 1:
	case 2: 
		echo"Hace Frio y mucho";
		break;
	
	case 3:
		echo "Calor, en Cataratas Depende la epoca del año";
		break;
}
?>