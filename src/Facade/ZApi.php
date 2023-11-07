<?php

namespace Jetimob\ZApi\Facade;

use Jetimob\ZApi\Api\Instance\InstanceApi;
use Jetimob\ZApi\Api\Message\MessageApi;
use Jetimob\ZApi\Api\Queue\QueueApi;
use Illuminate\Support\Facades\Facade;

/**
 * @method static InstanceApi instance()
 * @method static MessageApi message()
 * @method static QueueApi queue()
 */
class ZApi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'jetimob.z-api';
    }
}
