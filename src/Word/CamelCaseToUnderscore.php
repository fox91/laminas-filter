<?php

namespace Laminas\Filter\Word;

class CamelCaseToUnderscore extends CamelCaseToSeparator
{
    /**
     * Constructor
     *
     * @throws \Laminas\Filter\Exception\InvalidArgumentException
     */
    public function __construct()
    {
        parent::__construct('_');
    }
}
