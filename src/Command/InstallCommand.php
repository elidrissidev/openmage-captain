<?php

namespace OpenMage\Captain\Command;

use OpenMage\Captain\Traits\InteractsWithCompose;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class InstallCommand extends Command
{
    use InteractsWithCompose;

    protected function configure(): void
    {
        $this->setName('install')
            ->setDescription('Install Docker Compose file to the root of your project');

        $this->addOption(
            'services',
            's',
            InputArgument::OPTIONAL | InputArgument::IS_ARRAY,
            'Additional services to include in the generated Docker Compose file',
            $this->defaultServices
        );
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        return self::SUCCESS;
    }
}
