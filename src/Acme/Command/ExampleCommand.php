<?php

namespace Acme\Command;

use Exception;
use Psr\Log\LoggerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class ExampleCommand 
 */
class ExampleCommand extends Command
{
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        parent::__construct("example");
        $this->logger = $logger;
    }

    public function run(InputInterface $input, OutputInterface $output)
    {
        $this->logger->error(new Exception("My message"));
        $this->logger->warning("A warning");
        $this->logger->info("Hello World!");
        $this->logger->notice("A notice!");
        $this->logger->debug("Debug");
    }
}