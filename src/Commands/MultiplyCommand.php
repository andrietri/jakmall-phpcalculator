<?php

namespace Jakmall\Recruitment\Calculator\Commands;

// use Illuminate\Console\Command;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class MultiplyCommand extends Command
{
    /**
     * @var string
     */
    protected $description = "Multiply all given Numbers";
    /**
     * @var string
     */
    protected $arguments = "The number to be multiplied";

    public function __construct()
    {
        parent::__construct();

        $this->description = $description;
        $this->arguments = $arguments;
    }

    protected function configure()
    {
        $this->setName('multiply')
        ->addArgument('numbers', InputArgument::IS_ARRAY | InputArgument::REQUIRED, $this->arguments)
        ->setDescription($this->description);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $number = $input->getArgument('numbers');

        if (count($number) > 1) {
            for ($i=0; $i < count($number); $i++) { 
                $output->write($number[$i].' ');
                
                if($i == count($number) - 1){
                    $output->write('= ');
                } else {
                    $output->write('* ');
                }
                
                $result[] = $number[$i];
            }
            $output->writeln(array_product($result)); 
        } else {
            $output->writeln($number);
        }
    }
}