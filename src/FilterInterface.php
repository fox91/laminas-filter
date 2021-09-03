<?php

namespace Laminas\Filter;

/**
 * @template T
 */
interface FilterInterface
{
    /**
     * Returns the result of filtering $value
     *
     * @param  T $value
     * @throws Exception\RuntimeException If filtering $value is impossible
     * @return T
     */
    public function filter($value);
}
