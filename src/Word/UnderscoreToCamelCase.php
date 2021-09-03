<?php

namespace Laminas\Filter\Word;

class UnderscoreToCamelCase extends SeparatorToCamelCase
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
