<?php namespace Console;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Console\Command;

class DemoCommand extends Command
{
    /**
     * @var bool
     */
    protected $requireForm;

    /**
     * @var bool
     */
    protected $requireTo;


    public function __construct()
    {
        $this->requireform = true;
        $this->requireto = true;
        parent::__construct();
    }

    public function configure()
    {
        $this->setName('onlyphp:demo')
            ->setDescription('demo Command')
            ->setHelp('Help here')
            ->addArgument('from', $this->requireForm ? InputArgument::REQUIRED : InputArgument::OPTIONAL, 'Start number')
            ->addArgument('to', $this->requireTo ? InputArgument::REQUIRED : InputArgument::OPTIONAL, 'End number')
            ->addOption('iterations','i',InputOption::VALUE_REQUIRED,'How many times should the message be printed?',1);
    }
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $this->initCli($input, $output);
       
        $from = $input->getArgument('from');
        $to = $input->getArgument('to');

        //Only numbers
        if(is_numeric($from) && is_numeric($to)){
            $this->colorTest($input, $output);
            $output->writeln('<info>From: </info>'.$from);
            $output->writeln('<info>To: </info>'.$to);
            for ($i = 0; $i < $input->getOption('iterations'); $i++) {
                $output->writeln('Iteration: '.$i.' <comment>Result: '.($from + $to).'</comment>');
            }
        }else{
            $output->writeln('<error>Please, send me two numbers. Thanks</error>');
        }
        $output->writeln('');
        $this->endCli($input, $output);
        return Command::SUCCESS;
    }
}