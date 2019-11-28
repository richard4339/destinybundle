<?php

namespace Destiny\ClientBundle\Enums;

/**
 * Class GroupType
 * @package Destiny\ClientBundle\Enums
 */
class GroupType implements Enum
{

    /**
     *
     */
    const GENERAL = 0;

    /**
     *
     */
    const CLAN = 1;

    /**
     * Returns the string version of the enum value
     *
     * @param int $type
     * @return string
     */
    public static function getLabel($type) {
        switch ($type) {
            case self::GENERAL:
                return "General";
                break;
            case self::CLAN:
                return "Clan";
                break;
            default:
                return "";
                break;
        }
    }

}