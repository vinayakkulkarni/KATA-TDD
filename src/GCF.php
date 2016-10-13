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
