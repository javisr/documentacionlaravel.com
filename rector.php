<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\PHPUnit\Set\PHPUnitSetList;
use Rector\ValueObject\PhpVersion;
use RectorLaravel\Set\LaravelSetList;

return RectorConfig::configure()
    ->withPhpVersion(PhpVersion::PHP_81)
    ->withPaths([
        __DIR__.'/app',
        __DIR__.'/bootstrap',
        __DIR__.'/config',
        __DIR__.'/public',
        __DIR__.'/resources',
        __DIR__.'/routes',

    ])
    ->withSkip([
        // __DIR__.'/tests/**/*',
        __DIR__.'/vendor/**/*',
    ])
    ->withPhpSets(
        php83: true,
    )
    ->withPreparedSets(
    )
    ->withSets([
        LaravelSetList::LARAVEL_100,
    ]);
