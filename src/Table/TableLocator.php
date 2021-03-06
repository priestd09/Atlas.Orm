<?php
/**
 *
 * This file is part of Atlas for PHP.
 *
 * @license http://opensource.org/licenses/MIT MIT
 *
 */
namespace Atlas\Orm\Table;

use Atlas\Orm\AbstractLocator;
use Atlas\Orm\Exception;

/**
 *
 * A ServiceLocator for Table objects.
 *
 * @package atlas/orm
 *
 */
class TableLocator extends AbstractLocator
{
    /**
     *
     * Returns the Exception for when a class is not available.
     *
     * @param string $class The class that was not found.
     *
     * @return Exception
     *
     */
    protected function notFoundException($class)
    {
        return Exception::tableNotFound($class);
    }
}
