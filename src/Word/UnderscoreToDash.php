<?php

namespace Laminas\Filter\Word;

class UnderscoreToDash extends SeparatorToSeparator
{
    /**
     * Constructor
     *
     * @throws \Laminas\Filter\Exception\InvalidArgumentException
     */
    public function __construct()
    {
        parent::__construct('_', '-');
    }
}
