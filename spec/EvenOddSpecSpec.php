<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EvenOddSpecSpec extends ObjectBehavior
{
    function it_should_return_2_for_2()
    {
    	$this->generate(2)->shouldReturn([2]);
    }
    function it_should_return_3_for_3()
    {
    	$this->generate(3)->shouldReturn([3]);
    }
    function it_should_return_4_for_4()
    {
    	$this->generate(4)->shouldReturn([4]);
    }
    function it_should_return_10_for_10()
    {
    	$this->generate(10)->shouldReturn([10]);
    }
    function it_should_return_12_for_12()
    {
    	$this->generate(12)->shouldReturn([12]);
    }
}
