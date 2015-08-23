<?php

use Acme\ComplexUseCase;
use Acme\SimpleUseCase;
use Symfony\Component\Console\Input\InputInterface;


cmd('simple_example', '',

    function (SimpleUseCase $useCase) {
        $useCase->invoke();
    }

);


cmd('complex_example', '[color|c]="red" <name>="world"',

    function (InputInterface $input, ComplexUseCase $useCase) {
        $useCase->invoke(
            $input->getOption('color'),
            $input->getArgument('name')
        );
    }

);
