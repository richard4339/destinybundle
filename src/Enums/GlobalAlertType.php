<?php

namespace Destiny\ClientBundle\Enums;

/**
 * Class GlobalAlertType
 * @package Destiny\ClientBundle\Enums
 *
 * @link https://bungie-net.github.io/multi/schema_GlobalAlertType.html#schema_GlobalAlertType
 */
class GlobalAlertType implements Enum
{

    /**
     *
     */
    const GLOBALALERT = 0;

    /**
     *
     */
    const STREAMINGALERT = 1;

    /**
     * Returns the string version of the enum value
     *
     * @param int $type
     * @return string
     */
    public static function getLabel($type)
    {
        switch ($type) {
            case self::GLOBALALERT:
                return "GlobalAlert";
                break;
            case self::STREAMINGALERT:
                return "StreamingAlert";
                break;
            default:
                return '';
                break;
        }
    }
}