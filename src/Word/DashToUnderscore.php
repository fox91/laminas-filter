<?php

/**
 * @see       https://github.com/laminas/laminas-filter for the canonical source repository
 * @copyright https://github.com/laminas/laminas-filter/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-filter/blob/master/LICENSE.md New BSD License
 */

namespace Zend\Filter\Word;

class DashToUnderscore extends SeparatorToSeparator
{
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct('-', '_');
    }
}
