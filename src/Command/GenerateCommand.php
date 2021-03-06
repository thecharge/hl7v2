<?php

namespace Hl7v2\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Hl7v2\Message;
use Hl7v2\Segment\MshSegment;

class GenerateCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('hl7v2:generate')
            ->setDescription('Generates an hl7v2 message')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $message = new Message();
        $msh = new MshSegment();
        $message->addSegment($msh);
        print_r($message);
        
        
    }
}
