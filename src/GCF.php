<?php

class GCF
{
	public function generate($num1, $num2)
	{	
		$tmp = $num1 % $num2;

    	$result = [];

    	while ($tmp!=0) {

        	$num1 = $num2;
        	$num2 = $tmp;
        	$tmp = $num1 % $num2;

    	}

    	$result[] = $num2;

    	return $result;

	}
}

/* 
Example : 18 - 24
num1 = 18 ; num2 = 24
$tmp = 18%24 = 18

    while tmp != 0
    num1 holds value of num2 = 24
    num2 = tmp = 18
    new tmp = 24%18 = 6

    again while tmp != 0
    num1 = 24
    num2 = tmp = 6
    new tmp = 24%6 = 0

    now tmp = 0; exits while loop

$num2 has value of 6 which is GCF of 18 & 24
*/