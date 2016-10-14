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

/* Example: 6
$number = 6
$candidate = 2

 if ((num)6 % (candidate)2 == 0) {

    $perfect = array(1);

    for (sum = 2; (sum)2 < (num)6; 2++){

        if ((num)6 % (sum)2 == 0) {
            add the value of $sum to perfect[] array
        }

    }

    if sum of elements in perfect[] array  == $number
        return $perfect;
 }
*/