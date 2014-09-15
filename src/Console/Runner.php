<?php

namespace Cordoval\Console;

use Aura\Dispatcher\Dispatcher;
use Aura\Cli\Context;

/**
 * It loads cli context from prompt and dispatches to registered callable commands
 */
final class Runner
{
    private $dispatcher;
    private $context;

    public function __construct(Dispatcher $dispatcher, Context $context)
    {
        $this->dispatcher = $dispatcher;
        $this->context = $context;
    }

    public function run()
    {
        list ($params, $command) = $this->loadContext();

        return (int) $this->dispatcher->__invoke($params, $command);
    }

    public function loadContext()
    {
        $params = $this->context->argv->get();
        array_shift($params);
        $command = array_shift($params);

        return [$params, $command];
    }
}
