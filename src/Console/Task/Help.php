<?php

namespace Cordoval\Console\Task;

use Aura\Cli\Stdio;
use Aura\Cli\Context;
use Aura\Cli\Status;

class Help
{
    private $context;
    private $stdio;

    public function __construct(Context $context, Stdio $stdio)
    {
        $this->context = $context;
        $this->stdio = $stdio;
    }

    public function __invoke()
    {
        $this->stdio->outln('all good boss');

        return Status::USAGE;
    }
}
