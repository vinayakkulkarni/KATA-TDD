<?php

class EvenOddSpec
{
    public function generate($num)
    {
    	$EvenOdd = [];

        if ($num % 2 == 0)

        {
        	$EvenOdd[] = $num;
        }

        elseif ($num % 3 == 0)

        {
        	$EvenOdd[] = $num;
        }
        
        return $EvenOdd;
    }
}
