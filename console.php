<?php

use Cordoval\Console\Config;
use Cordoval\Console\Runner;

require __DIR__.'/vendor/autoload.php';

$status = (new ContainerBuilder())
    ->newInstance([], [Config::class])
    ->newInstance(Runner::class)
    ->run()
;

exit($status);
