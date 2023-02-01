<?php

namespace Jetimob\ZApi\Tests;

use Jetimob\ZApi\ZApiServiceProvider;
use Orchestra\Testbench\TestCase;

class AbstractTestCase extends TestCase
{
    /** @inheritDoc */
    public function getPackageProviders($app): array
    {
        return [ZApiServiceProvider::class];
    }
}
