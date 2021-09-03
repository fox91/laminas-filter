<?php

namespace Laminas\Filter\Word;

class DashToUnderscore extends SeparatorToSeparator
{
    /**
     * Constructor
     *
     * @throws \Laminas\Filter\Exception\InvalidArgumentException
     */
    public function __construct()
    {
        parent::__construct('-', '_');
    }
}
