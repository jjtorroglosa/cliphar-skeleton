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

class SimpleUseCase
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * SimpleUseCase constructor.
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function invoke()
    {
        $this->logger->info("hello world");
    }
}