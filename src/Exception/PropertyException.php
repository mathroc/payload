<?php

/**
 * GpsLab component.
 *
 * @author    Peter Gribanov <info@peter-gribanov.ru>
 * @copyright Copyright (c) 2011, Peter Gribanov
 * @license   http://opensource.org/licenses/MIT
 */

namespace GpsLab\Component\Payload\Exception;

class PropertyException extends \RuntimeException
{
    /**
     * @param string $property
     * @param object $class
     *
     * @return PropertyException
     */
    public static function undefinedProperty($property, $class)
    {
        return new self(sprintf('Undefined property "%s" of class "%s"', $property, get_class($class)));
    }

    /**
     * @param array $lost
     * @param object $class
     *
     * @return PropertyException
     */
    public static function noRequiredProperties(array $lost, $class)
    {
        return new self(sprintf('No required property "%s" of class "%s"', implode('", "', $lost), get_class($class)));
    }
}
