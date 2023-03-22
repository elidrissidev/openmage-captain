<?php

namespace OpenMage\Captain\Trait;

trait InteractsWithCompose
{
    /**
     * Additional services that can be added to Docker Compose configuration
     *
     * @var array
     */
    protected const ADDITIONAL_SERVICES = [
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
