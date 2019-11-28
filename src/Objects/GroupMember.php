<?php


namespace Destiny\ClientBundle\Objects;



use Destiny\ClientBundle\Objects\UserInfoCard\UserInfoCard;
use Destiny\ClientBundle\Objects\UserInfoCard\GroupUserInfoCard;

/**
 * Class GroupMember
 * @package Destiny\ClientBundle\Objects
 *
 * @link https://bungie-net.github.io/multi/schema_GroupsV2-GroupMember.html#schema_GroupsV2-GroupMember
 *
 * @property int|null $memberType RuntimeGroupMemberType enum
 * @property bool|null $isOnline
 * @property string|null $groupId
 * @property \DateTime|null $joinDate
 * @property GroupUserInfoCard|null $destinyUserInfo
 * @property UserInfoCard|null $bungieNetUserInfo
 */
class GroupMember
{
    /**
     * @return int|null
     */
    public function getMemberType(): ?int
    {
        return $this->memberType;
    }

    /**
     * @param int|null $memberType
     * @return GroupMember
     */
    public function setMemberType(?int $memberType): GroupMember
    {
        $this->memberType = $memberType;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsOnline(): ?bool
    {
        return $this->isOnline;
    }

    /**
     * @param bool|null $isOnline
     * @return GroupMember
     */
    public function setIsOnline(?bool $isOnline): GroupMember
    {
        $this->isOnline = $isOnline;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getGroupId(): ?string
    {
        return $this->groupId;
    }

    /**
     * @param string|null $groupId
     * @return GroupMember
     */
    public function setGroupId(?string $groupId): GroupMember
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getJoinDate(): ?\DateTime
    {
        return $this->joinDate;
    }

    /**
     * @param \DateTime|null $joinDate
     * @return GroupMember
     */
    public function setJoinDate(?\DateTime $joinDate): GroupMember
    {
        $this->joinDate = $joinDate;
        return $this;
    }

    /**
     * @return GroupUserInfoCard|null
     */
    public function getDestinyUserInfo(): ?GroupUserInfoCard
    {
        return $this->destinyUserInfo;
    }

    /**
     * @param GroupUserInfoCard|null $destinyUserInfo
     * @return GroupMember
     */
    public function setDestinyUserInfo(?GroupUserInfoCard $destinyUserInfo): GroupMember
    {
        $this->destinyUserInfo = $destinyUserInfo;
        return $this;
    }

    /**
     * @return UserInfoCard|null
     */
    public function getBungieNetUserInfo(): ?UserInfoCard
    {
        return $this->bungieNetUserInfo;
    }

    /**
     * @param UserInfoCard|null $bungieNetUserInfo
     * @return GroupMember
     */
    public function setBungieNetUserInfo(?UserInfoCard $bungieNetUserInfo): GroupMember
    {
        $this->bungieNetUserInfo = $bungieNetUserInfo;
        return $this;
    }

}