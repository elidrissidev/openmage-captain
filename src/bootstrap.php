<?php

use OpenMage\Captain\Command\InstallCommand;
use Symfony\Component\Console\Application;

$application = new Application('OpenMage Captain', 'dev-main');

$application->addCommands([
    new InstallCommand(),
]);

return $application;
