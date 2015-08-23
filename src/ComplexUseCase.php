<?php
/*
 * Copyright (c) 2015 Juan José Torroglosa Ramón
 *
 * This file is part of the Cliphar package.
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Acme;

use Psr\Log\LoggerInterface;

class ComplexUseCase
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * ComplexUseCase constructor.
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function invoke($color, $name)
    {
        $possibleColors = array('red' => true, 'blue' => true, 'yellow' => true);
        if (!isset($possibleColors[$color])) {
            $color = "default";
        }

        $this->logger->debug("This is a debug message");
        $this->logger->info("Hello <bg=$color>{$name}</>");
    }
}