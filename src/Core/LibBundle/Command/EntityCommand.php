<?php

namespace Core\LibBundle\Command;

use Sensio\Bundle\GeneratorBundle\Command\GenerateDoctrineEntityCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Core\LibBundle\Generator\EntityGenerator;

class EntityCommand extends GenerateDoctrineEntityCommand{
	protected function configure()
    {
        parent::configure();

        $this->setName('mobelite:generate:entity');
        $this->setDescription('Mobelite entities generator');
    }

    protected function createGenerator()
    {
        return new EntityGenerator($this->getContainer()->get('filesystem'), $this->getContainer()->get('doctrine'));
    }
}
