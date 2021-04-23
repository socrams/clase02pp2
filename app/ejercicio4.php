<?php
$num1=rand(1,99);
$num2=rand(1,99);
$num3=rand(1,99);
echo $num1.$num2.$num3;
If($num1 > $num2){
	If($num1 > $num3){
	echo 'numero ' . $num1 . ' es mayor';
	} 
	else {
		echo 'numero ' . $num3 . ' es mayor';
	}
	} 
	else {
	If($num2 > $num3){
		echo 'numero ' . $num2 . ' es mayor';
	} 
	else {
		echo 'numero ' . $num3 . ' es mayor';
	}
}
?>