<?php

namespace Acme\Command;

use Exception;
use Psr\Log\LoggerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
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

    protected function configure()
    {
        $this->addArgument("optional", InputArgument::OPTIONAL, "An optional argument", "No argument passed");
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $this->logger->info("Hello World!");
        $this->logger->info("Argument passed: " . $input->getArgument("optional"));
        $this->logger->notice("A notice!");
        $this->logger->warning("A warning");
        $this->logger->debug("Debug");
        $this->logger->error(new Exception("My message"));
    }
}