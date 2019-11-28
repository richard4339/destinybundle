<?php

namespace Destiny\ClientBundle\Enums;

/**
 * Class GlobalAlertLevel
 * @package Destiny\ClientBundle\Enums
 *
 * @link https://bungie-net.github.io/multi/schema_GlobalAlertLevel.html#schema_GlobalAlertLevel
 */
class GlobalAlertLevel implements Enum
{

    /**
     *
     */
    const UNKNOWN = 0;

    /**
     *
     */
    const BLUE = 1;

    /**
     *
     */
    const YELLOW = 2;

    /**
     *
     */
    const RED = 3;

    /**
     * Returns the string version of the enum value
     *
     * @param int $type
     * @return string
     */
    public static function getLabel($type)
    {
        switch ($type) {
            case self::UNKNOWN:
                return "Unknown";
                break;
            case self::BLUE:
                return "Blue";
                break;
            case self::YELLOW:
                return "Yellow";
                break;
            case self::RED:
                return "Red";
                break;
            default:
                return '';
                break;
        }
    }
}