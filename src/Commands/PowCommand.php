<?php

namespace Jakmall\Recruitment\Calculator\Commands;

// use Illuminate\Console\Command;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class PowCommand extends Command
{
    /**
     * @var string
     */
    protected $description = "Exponent the given Numbers";
    /**
     * @var string
     */
    protected $argumentsBase = "The base number";
    /**
     * @var string
     */
    protected $argumentsExp = "The exponent number";

    public function __construct()
    {
        parent::__construct();

        $this->description = $description;
        $this->argumentsBase = $argumentsBase;
        $this->argumentsExp = $argumentsExp;
    }

    protected function configure()
    {
        $this->setName('pow')
        ->addArgument('base', InputArgument::REQUIRED, $this->argumentsBase)
        ->addArgument('exp', InputArgument::REQUIRED, $this->argumentsExp)
        ->setDescription($this->description);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $base = $input->getArgument('base');
        $exp = $input->getArgument('exp');
        $result = pow($base, $exp);

        $output->writeln($base.' ^ '.$exp.' = '.$result);
    }
}