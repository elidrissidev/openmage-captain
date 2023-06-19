<?php

namespace OpenMage\Captain\Traits;

trait InteractsWithCompose
{
    /**
     * Additional services that can be added to Docker Compose configuration
     *
     * @var array
     */
    protected $supportedServices = [
        'mysql',
        'mariadb',
        'redis',
        'mailpit',
    ];

    /**
     * Default services that are included in Docker Compose configuration
     * if none are provided
     *
     * @var array
     */
    protected $defaultServices = ['mysql'];
}
