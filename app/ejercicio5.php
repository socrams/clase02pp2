<?php
$edad=rand(1,99);
switch ($edad)
{
	case 1:
	case 2:
	case 3:
	case 4:
	case 5:
	case 6:
	case 7:
	case 8:
	case 9:
	case 10:
	case 11:
	case 12:
		echo "Es menor".$edad;break;
	case 13:
	case 14:
	case 15:
	case 16:
	case 18:echo " Es adolecente ".$edad;break;
	default:
		echo "Es mayor de edad ".$edad;
}

?>