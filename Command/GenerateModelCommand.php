<?php
namespace RtxLabs\BackboneBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class GenerateModelCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('backbone:generate:model')
            ->setDescription('Interactive Model Generator')
            ->setDefinition(array(
                new InputArgument('bundle', InputArgument::REQUIRED, 'The target bundle'),
            ));
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

    }
}