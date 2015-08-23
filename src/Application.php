<?php

namespace Acme;

use Cliphar\BaseApplication;
use Cliphar\ServiceProvider\LoggerProvider;

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
        return [];
    }


    /**
     * @return string[]
     */
    protected function getProviders()
    {
        return [
            LoggerProvider::class
        ];
    }
}