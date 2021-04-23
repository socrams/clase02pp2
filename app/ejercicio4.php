<?php
$num1=rand(1,99);
$num2=rand(1,99);
$num3=rand(1,99);
$numMayor;
if($num1>$num2 && $num1>$num3)
{
	$numMayor =$num1;
}
else
{
	if ($num2>$num3)
	{
		$numMayor=$num2;
	}
	else 
	{
		$numMayor=$num3;
	}
}
echo "El numero mayor es ".$numMayor;
?>