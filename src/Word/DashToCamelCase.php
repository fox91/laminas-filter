<?php

namespace Laminas\Filter\Word;

class DashToCamelCase extends SeparatorToCamelCase
{
    /**
     * Constructor
     *
     * @throws \Laminas\Filter\Exception\InvalidArgumentException
     */
    public function __construct()
    {
        parent::__construct('-');
    }
}
