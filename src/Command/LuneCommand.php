<?php

namespace Fneveu\Bundle\LuneBundle\Command;

use Fneveu\Bundle\LuneBundle\Service\HelloWorld;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class LuneCommand extends Command
{
    protected static $defaultName = 'lune:hello-world';
    private $helloWorld;

    public function __construct(HelloWorld $helloWorld, string $name = null)
    {
        parent::__construct($name);
        $this->helloWorld = $helloWorld;
    }

    protected function configure()
    {
        $this->addArgument('name', InputArgument::OPTIONAL, 'Your name !');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);

        $io->success($this->helloWorld->sayHello($input->getArgument('name')));
    }
}
