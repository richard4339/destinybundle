<?php


namespace Destiny\ClientBundle\Objects\UserInfoCard;


/**
 * Class GroupUserInfoCard
 * @package Destiny\ClientBundle\Objects\UserInfoCard
 */
class GroupUserInfoCard extends Base
{
    /**
     * This will be the display name the clan server last saw the user as. If the account is an active cross save override, this will be the display name to use. Otherwise, this will match the displayName property.
     * @var string|null
     */
    public $lastSeenDisplayName;

    /**
     * The platform of the LastSeenDisplayName
     * @var int|null
     */
    public $lastSeenDisplayNameType;

    /**
     * @return string|null
     */
    public function getLastSeenDisplayName(): ?string
    {
        return $this->lastSeenDisplayName;
    }

    /**
     * @param string|null $lastSeenDisplayName
     * @return GroupUserInfoCard
     */
    public function setLastSeenDisplayName(?string $lastSeenDisplayName): GroupUserInfoCard
    {
        $this->lastSeenDisplayName = $lastSeenDisplayName;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getLastSeenDisplayNameType(): ?int
    {
        return $this->lastSeenDisplayNameType;
    }

    /**
     * @param int|null $lastSeenDisplayNameType
     * @return GroupUserInfoCard
     */
    public function setLastSeenDisplayNameType(?int $lastSeenDisplayNameType): GroupUserInfoCard
    {
        $this->lastSeenDisplayNameType = $lastSeenDisplayNameType;
        return $this;
    }


}