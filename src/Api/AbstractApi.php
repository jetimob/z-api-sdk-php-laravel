<?php

namespace Jetimob\ZApi\Api;

use Jetimob\Http\Request;
use Jetimob\ZApi\Exceptions\ZApiRequestException;

abstract class AbstractApi extends \Jetimob\Http\AbstractApi
{
    protected ?string $exceptionClass = ZApiRequestException::class;
    protected ?string $instanceId = null;

    public function usingInstance(string $instanceId): self
    {
        $this->instanceId = $instanceId;
        return $this;
    }

    protected function makeBaseRequest($method, $path, array $headers = [], $body = null): Request
    {
        if (is_null($this->instanceId)) {
            $this->instanceId = $this->http->getConfig('default_instance_id');
        }

        $token = $this->http->getConfig('bearer_token_value');
        $path = "/instances/$this->instanceId/token/$token/$path";

        return new AuthorizedRequest($method, $path, $headers, $body);
    }
}
