<?php

namespace Cordoval\Console;

use Aura\Cli\Context;
use Aura\Cli\Stdio;
use Aura\Di\Config as BaseConfig;
use Aura\Di\Container;
use Aura\Dispatcher\Dispatcher;
use Cordoval\Console\Task\Help;

class Config extends BaseConfig
{
    public function define(Container $di)
    {
        $di->set('cordoval:stdio', $di->lazyNew(Stdio::class));
        $di->set('cordoval:context', $di->lazyNew(Context::class));
        $di->set(
            'cordoval:dispatcher',
            $di->lazyNew(Dispatcher::class, ['object_param' => 'command'])
        );

        $di->params[Runner::class] = [
            'dispatcher' => $di->lazyGet('cordoval:dispatcher'),
            'context' => $di->lazyGet('cordoval:context'),
        ];

        $di->params[Help::class] = [
            'context' => $di->lazyGet('cordoval:context'),
            'stdio' => $di->lazyGet('cordoval:stdio'),
        ];
    }

    public function modify(Container $di)
    {
        $di->get('cordoval:dispatcher')
            ->setObject('help', $di->lazyNew(Help::class))
        ;
    }
}
