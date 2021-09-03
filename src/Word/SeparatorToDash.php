<?php

namespace Laminas\Filter\Word;

class SeparatorToDash extends SeparatorToSeparator
{
    /**
     * Constructor
     *
     * @param string $searchSeparator Separator to search for change
     * @throws \Laminas\Filter\Exception\InvalidArgumentException
     */
    public function __construct($searchSeparator = ' ')
    {
        parent::__construct($searchSeparator, '-');
    }
}
