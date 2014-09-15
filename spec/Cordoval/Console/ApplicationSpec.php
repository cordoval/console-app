<?php

namespace spec\Cordoval\Console;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Cordoval\Console\Application;

class ApplicationSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith();
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Application::class);
    }
}
