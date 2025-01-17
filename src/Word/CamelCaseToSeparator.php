<?php

namespace Laminas\Filter\Word;

use Laminas\Stdlib\StringUtils;

class CamelCaseToSeparator extends AbstractSeparator
{
    /**
     * @inheritDoc
     */
    public function filter($value)
    {
        if (! is_scalar($value) && ! is_array($value)) {
            return $value;
        }

        if (StringUtils::hasPcreUnicodeSupport()) {
            $pattern     = ['#(?<=(?:\p{Lu}))(\p{Lu}\p{Ll})#', '#(?<=(?:\p{Ll}|\p{Nd}))(\p{Lu})#'];
            $replacement = [$this->separator . '\1', $this->separator . '\1'];
        } else {
            $pattern     = ['#(?<=(?:[A-Z]))([A-Z]+)([A-Z][a-z])#', '#(?<=(?:[a-z0-9]))([A-Z])#'];
            $replacement = ['\1' . $this->separator . '\2', $this->separator . '\1'];
        }

        return preg_replace($pattern, $replacement, $value);
    }
}
