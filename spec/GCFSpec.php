<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GCFSpec extends ObjectBehavior
{
    function it_will_return_1_on_1_1()
    {
    	$this->generate(1,1)->shouldReturn([1]);
    }
    function it_will_return_1_on_1_2()
    {
    	$this->generate(1,2)->shouldReturn([1]);
    }
    function it_will_return_2_on_2_2()
    {
    	$this->generate(2,2)->shouldReturn([2]);
    }
    function it_will_return_2_on_4_2()
    {
    	$this->generate(4,2)->shouldReturn([2]);
    }
    function it_will_return_10_on_10_20()
    {
    	$this->generate(10,20)->shouldReturn([10]);
    }
    function it_will_return_2_on_12_10()
    {
    	$this->generate(12,10)->shouldReturn([2]);
    }
    function it_will_return_100_on_100_200()
    {
    	$this->generate(100,200)->shouldReturn([100]);
    }
    function it_will_return_4_on_100_16()
    {
    	$this->generate(100,16)->shouldReturn([4]);
    }
    function it_will_return_7_on_14_49()
    {
    	$this->generate(14,49)->shouldReturn([7]);
    }
    function it_will_return_2_on_12_50()
    {
    	$this->generate(12,50)->shouldReturn([2]);
    }
}
