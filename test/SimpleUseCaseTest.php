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

use PHPUnit_Framework_TestCase;

class SimpleUseCaseTest extends PHPUnit_Framework_TestCase
{
    public function testHelloWorld()
    {
        $logger = $this->getMock('Psr\Log\LoggerInterface');
        $logger->expects($this->once())
            ->method('info');
        $useCase = new SimpleUseCase($logger);

        $useCase->invoke();
    }
}