<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PerfectNumberSpec extends ObjectBehavior
{
    function it_will_return_empty_on_1()
    {
    	$this->generate(1)->shouldReturn([]);
    }
    function it_will_return_2_on_2()
    {
    	$this->generate(2)->shouldReturn([2]);
    }
    function it_will_return_3_on_3()
    {
    	$this->generate(3)->shouldReturn([3]);
    }
    function it_will_return_2_2_for_4()
    {
    	$this->generate(4)->shouldReturn([2,2]);
    }
    function it_will_return_5_for_5()
    {
    	$this->generate(5)->shouldReturn([5]);
    }
    function it_will_return_1_2_3_for_6()
    {
    	$this->generate(6)->shouldReturn([1,2,3]);
    }
    function it_will_return_2_4_7_for_28()
    {
    	$this->generate(28)->shouldReturn([1,2,4,7,14]);
    }
}