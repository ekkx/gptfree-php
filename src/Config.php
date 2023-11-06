<?php

namespace gptfree;

class Config {
    /**
     * @var array $config
     */
    private $config;

    /**
     * @var array $default
     */
    private static $default = [
        'vendor',
        'debug' => false
    ];

    /**
     * Config constructor.
     * @param array $config
     */

    public function __construct(array $config) {
        $this->config = $config;
    }
}