<?php


namespace Destiny\ClientBundle\Objects\UserInfoCard;


/**
 * Class Base
 * This contract supplies basic information commonly used to display a minimal amount of information about a user. Take
 * care to not add more properties here unless the property applies in all (or at least the majority) of the situations
 * where UserInfoCard is used. Avoid adding game specific or platform specific details here. In cases where UserInfoCard
 * is a subset of the data needed in a contract, use UserInfoCard as a property of other contracts.
 *
 * @package Destiny\ClientBundle\Objects\UserInfoCard
 *
 * @link https://bungie-net.github.io/multi/schema_User-UserInfoCard.html#schema_User-UserInfoCard
 *
 * @property string|null $supplementalDisplayName A platform specific additional display name - ex: psn Real Name, bnet Unique Name, etc.
 * @property string|null $iconPath URL the Icon if available.
 * @property int|null $membershipType BungieMembershipType enum Type of the membership.
 * @property string|null $membershipId Membership ID as they user is known in the Accounts service
 * The API reference states this is an int but it is returned as a string
 * @property string|null $displayName Display Name the player has chosen for themselves. The display name is optional when the data type is used as input to a platform API.
 * @property int|null $crossSaveOverride If there is a cross save override in effect, this value will tell you the type that is overridding this one.
 * @property int[]|null $applicableMembershipTypes The list of Membership Types indicating the platforms on which this Membership can be used. Not in Cross Save = its original membership type. Cross Save Primary = Any membership types it is overridding, and its original membership type Cross Save Overridden = Empty list
 * @property bool|null $isPublic If True, this is a public user membership.
 *
 */
abstract class Base
{
    /**
     * @return string|null
     */
    public function getSupplementalDisplayName(): ?string
    {
        return $this->supplementalDisplayName;
    }

    /**
     * @param string|null $supplementalDisplayName
     * @return Base
     */
    public function setSupplementalDisplayName(?string $supplementalDisplayName): Base
    {
        $this->supplementalDisplayName = $supplementalDisplayName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIconPath(): ?string
    {
        return $this->iconPath;
    }

    /**
     * @param string|null $iconPath
     * @return Base
     */
    public function setIconPath(?string $iconPath): Base
    {
        $this->iconPath = $iconPath;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMembershipType(): ?int
    {
        return $this->membershipType;
    }

    /**
     * @param int|null $membershipType
     * @return Base
     */
    public function setMembershipType(?int $membershipType): Base
    {
        $this->membershipType = $membershipType;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMembershipId(): ?string
    {
        return $this->membershipId;
    }

    /**
     * @param string|null $membershipId
     * @return Base
     */
    public function setMembershipId(?string $membershipId): Base
    {
        $this->membershipId = $membershipId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    /**
     * @param string|null $displayName
     * @return Base
     */
    public function setDisplayName(?string $displayName): Base
    {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCrossSaveOverride(): ?int
    {
        return $this->crossSaveOverride;
    }

    /**
     * @param int|null $crossSaveOverride
     * @return Base
     */
    public function setCrossSaveOverride(?int $crossSaveOverride): Base
    {
        $this->crossSaveOverride = $crossSaveOverride;
        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getApplicableMembershipTypes(): ?array
    {
        return $this->applicableMembershipTypes;
    }

    /**
     * @param int[]|null $applicableMembershipTypes
     * @return Base
     */
    public function setApplicableMembershipTypes(?array $applicableMembershipTypes): Base
    {
        $this->applicableMembershipTypes = $applicableMembershipTypes;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsPublic(): ?bool
    {
        return $this->isPublic;
    }

    /**
     * @param bool|null $isPublic
     * @return Base
     */
    public function setIsPublic(?bool $isPublic): Base
    {
        $this->isPublic = $isPublic;
        return $this;
    }

}