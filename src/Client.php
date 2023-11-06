<?php

namespace gptfree;

use GuzzleHttp\Client as GuzzleClient;

class Client extends GuzzleClient {
    public function __construct(array $config = []) {
        $gptfConfig = new Config($config);
    }
}