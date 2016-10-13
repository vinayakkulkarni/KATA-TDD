<?php

class PerfectNumber
{
    public function generate($number)
    {
     	$candidate = 2;

        if ($number % $candidate == 0) {

            $perfect = array(1);
            
            for ($sum = 2; $sum < $number; $sum++) {

                if ($number % $sum == 0) {

                    $perfect[] = $sum;

                }
                
            }

            if (array_sum($perfect) == $number)
                return $perfect;
        }
    }
}
