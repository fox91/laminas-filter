<?php

namespace Laminas\Filter\Word;

class UnderscoreToSeparator extends SeparatorToSeparator
{
    /**
     * Constructor
     *
     * @param  string $replacementSeparator Space by default
     * @throws \Laminas\Filter\Exception\InvalidArgumentException
     */
    public function __construct($replacementSeparator = ' ')
    {
        parent::__construct('_', $replacementSeparator);
    }
}
