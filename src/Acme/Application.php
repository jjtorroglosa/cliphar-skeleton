<?php

namespace Acme;

use Cliphar\BaseApplication;

/**
 * Class Application 
 */
class Application extends BaseApplication
{
    /**
     * @return string
     */
    protected function getVersion()
    {
        return "1.0";
    }

    /**
     * @return string
     */
    protected function getName()
    {
        return "Cliphar skeleton";
    }

    /**
     * @return string[]
     */
    protected function getCommands()
    {
        return array(
            'Acme\Command\ExampleCommand'
        );
    }

    /**
     * @return string[]
     */
    protected function getProviders()
    {
        return array(
            'Cliphar\ServiceProvider\LoggerProvider'
        );
    }
}