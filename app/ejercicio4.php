<?php
$num1=rand(1,99);
$num2=rand(1,99);
$num3=rand(1,99);
echo $num1" ";
echo $num2" ";
echo $num3" ";
$numMayor="nada";
if($num1 >$num2 && $num1 > $num3)
{
	$numMayor =$num1;	//		echo "	numero " . $num1 . "es mayor";
} 
else
{
	if ($num2>$num3)
	{
		$numMayor=$num2; 	//echo " numero ".$num2. " es mayor";
	}
	else 
	{
		$numMayor=$num3; 	//echo "	numero " . $num3 . " es mayor";
	}
}
echo "el numero es ". $numMayor;
?>