<?php
namespace RtxLabs\JsRoutingBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Rotex\Sbp\InventoryBundle\Entity\Inventory;

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
        $targetArg = rtrim($input->getArgument('target'), '/');

        if (!is_dir($targetArg)) {
            throw new \InvalidArgumentException(sprintf('The target directory "%s" does not exist.', $input->getArgument('target')));
        }

        $filesystem = $this->getContainer()->get('filesystem');
        $filesystem->mkdir($targetArg.'/routes/', 0777);

        $routes = new \stdClass();
        $router = $this->getContainer()->get('router');
        foreach ($router->getRouteCollection()->all() as $name => $route) {
            $routes->$name =  $route->getPattern();
        }

        if (false === file_put_contents($targetArg.'/routes/routes.js', "var __routes = ".json_encode($routes))) {
            $output->writeln('<error>There was an error writing the route file</error>');
        }
        else {
            $output->writeln('<info>Wrote web/routes/route.js file</info>');
        }
    }
}