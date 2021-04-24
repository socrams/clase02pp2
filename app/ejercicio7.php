<?php 
$num1=5;
$num2=7;
$num3=3;
$numMayor;
if($num1>$num2 && $num1<$num3)
{
	$numMayor=$num1;
}
else
{
	if ($num2>$num3 && $num2<$num1)
	{
		$numMayor=$num2;
	}
	else
	{
		if($num3>$num2 && $num3<$num1)
		{
			$numMayor=$num3;
		}
	}
}
echo "El numero del medio es ".$numMayor;
?>