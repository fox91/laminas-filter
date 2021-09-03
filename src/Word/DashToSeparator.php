<?php

namespace Laminas\Filter\Word;

class DashToSeparator extends AbstractSeparator
{
    /**
     * @inheritDoc
     */
    public function filter($value)
    {
        if (! is_scalar($value) && ! is_array($value)) {
            return $value;
        }

        return str_replace('-', $this->separator, $value);
    }
}
