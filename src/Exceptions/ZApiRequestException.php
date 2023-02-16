<?php

namespace Jetimob\ZApi\Exceptions;

use GuzzleHttp\Exception\RequestException;
use Jetimob\Http\Contracts\HydratableContract;
use Jetimob\Http\Traits\Serializable;

class ZApiRequestException extends RequestException implements HydratableContract
{
    use Serializable;
}
