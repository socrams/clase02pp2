<?php 
$n1=5;
$n2=7;
$n3=3;
$numMayor="";
if($n1==$n2 || $n1==$n3 || $n2==$n3)
{
	echo "no tiene numero del medio";
}
else
{
	if(($n1 > $n2 && $n1 < $n3) || ($n1 < $n2 && $n1 > $n3))
	{
	$num=$n1;
	}
	else
	{
		if (($n2 > $n1 && $n2 < $n3) || ($n2 < $n1 &&  $n2 > $n3))
		{	
			$num=$n2;
		}
		else
		{
			$num=$n3;					
		}	
	}
}	
echo "El numero del medio es ".$num;
?>