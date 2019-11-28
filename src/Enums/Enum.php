<?php

namespace Destiny\ClientBundle\Enums;

/**
 * Interface Enum
 * @package Destiny\ClientBundle\Enums
 */
interface Enum
{

    /**
     * Returns the string version of the enum value
     *
     * @param int $type
     * @return string
     */
    public static function getLabel($type);
}