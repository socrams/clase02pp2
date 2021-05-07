<?php 
$numero1=4;
$numero2=2;
$operador="/";
calcular($numero1,$numero2,$operador);


function sumar($n1,$n2) //recibe 1 y 2 sumar y retornar resultado 
{
	$r=$n1+$n2;
	mostrarresultado($r);
}

function dividir($n1,$n2) //recibe 1 y 2, pero no puedo dividir por 0
{
	if (retornassiescero($n1))
	{
		echo "No se puede dividir";
	}
	else
	{
		$r=$n1/$n2;	
		mostrarresultado($r);
	}
	
}

function retornassiescero($n1) //numero ingresado si el dividendo es 0 devuelvo true o false infinito sino es 0.- para validar divir
{
	if ($n1==0)
	{
		return true;
	}
	else
	{	
		return false;
	} 
}

function calcular($n1,$n2,$o)   //recibe n1, operador, n2. si el operador = a suma, llamar sumar, si es dividir llamo dividir,switch usar.-
{
	switch ($o)
	{
		case "+":
			sumar($n1,$n2);
			break;
		case "/":
			dividir($n1,$n2);
			break;
		default:
			echo "<br> No se puede operar";
	//endswitch;	
	}
}

function mostrarresultado($r) //muestra el resultado ingresado como parametro, solo si hicieron la operacion, mostrar el resultadao, osea si es suma o dividir.-
{
	echo "el resultado es $r";
}






















?>