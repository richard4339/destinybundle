<?php


namespace Destiny\ClientBundle\Objects;


/**
 * Class Group
 * @package Destiny\ClientBundle\Objects
 *
 * @link https://bungie-net.github.io/multi/schema_GroupsV2-GroupV2.html#schema_GroupsV2-GroupV2
 *
 * @property string|int|null $groupId
 * @property string|null $name
 * @property int|null $groupType GroupType enum
 * @property string|int|null $membershipIdCreated
 * @property \DateTime|null $creationDate
 * @property \DateTime|null $modificationDate
 * @property string|null $about
 * @property string[]|null $tags
 * @property int|null $memberCount
 * @property boolean|null $isPublic
 * @property boolean|null $isPublicTopicAdminOnly
 * @property string|null $motto
 * @property boolean|null $allowChat
 * @property boolean|null $isDefaultPostPublic
 * @property int|null $chatSecurity ChatSecuritySetting enum
 * @property string|null $locale
 * @property int|null $avatarImageIndex
 * @property int|null $homepage GroupHomepage enum
 * @property int|null $membershipOption MembershipOption enum
 * @property int|null $defaultPublicity GroupPostPublicity enum
 * @property string|null $theme
 * @property string|null $bannerPath
 * @property string|null $avatarPath
 * @property string|int|null $conversationId
 * @property boolean|null $enableInvitationMessagingForAdmins
 * @property \DateTime|null $banExpireDate
 *
 */
class Group
{
    /**
     * @return int|string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * @param int|string|null $groupId
     * @return Group
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return Group
     */
    public function setName(?string $name): Group
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getGroupType(): ?int
    {
        return $this->groupType;
    }

    /**
     * @param int|null $groupType
     * @return Group
     */
    public function setGroupType(?int $groupType): Group
    {
        $this->groupType = $groupType;
        return $this;
    }

    /**
     * @return int|string|null
     */
    public function getMembershipIdCreated()
    {
        return $this->membershipIdCreated;
    }

    /**
     * @param int|string|null $membershipIdCreated
     * @return Group
     */
    public function setMembershipIdCreated($membershipIdCreated)
    {
        $this->membershipIdCreated = $membershipIdCreated;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getCreationDate(): ?\DateTime
    {
        return $this->creationDate;
    }

    /**
     * @param \DateTime|null $creationDate
     * @return Group
     */
    public function setCreationDate(?\DateTime $creationDate): Group
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getModificationDate(): ?\DateTime
    {
        return $this->modificationDate;
    }

    /**
     * @param \DateTime|null $modificationDate
     * @return Group
     */
    public function setModificationDate(?\DateTime $modificationDate): Group
    {
        $this->modificationDate = $modificationDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAbout(): ?string
    {
        return $this->about;
    }

    /**
     * @param string|null $about
     * @return Group
     */
    public function setAbout(?string $about): Group
    {
        $this->about = $about;
        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * @param string[]|null $tags
     * @return Group
     */
    public function setTags(?array $tags): Group
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMemberCount(): ?int
    {
        return $this->memberCount;
    }

    /**
     * @param int|null $memberCount
     * @return Group
     */
    public function setMemberCount(?int $memberCount): Group
    {
        $this->memberCount = $memberCount;
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
     * @return Group
     */
    public function setIsPublic(?bool $isPublic): Group
    {
        $this->isPublic = $isPublic;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsPublicTopicAdminOnly(): ?bool
    {
        return $this->isPublicTopicAdminOnly;
    }

    /**
     * @param bool|null $isPublicTopicAdminOnly
     * @return Group
     */
    public function setIsPublicTopicAdminOnly(?bool $isPublicTopicAdminOnly): Group
    {
        $this->isPublicTopicAdminOnly = $isPublicTopicAdminOnly;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMotto(): ?string
    {
        return $this->motto;
    }

    /**
     * @param string|null $motto
     * @return Group
     */
    public function setMotto(?string $motto): Group
    {
        $this->motto = $motto;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getAllowChat(): ?bool
    {
        return $this->allowChat;
    }

    /**
     * @param bool|null $allowChat
     * @return Group
     */
    public function setAllowChat(?bool $allowChat): Group
    {
        $this->allowChat = $allowChat;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsDefaultPostPublic(): ?bool
    {
        return $this->isDefaultPostPublic;
    }

    /**
     * @param bool|null $isDefaultPostPublic
     * @return Group
     */
    public function setIsDefaultPostPublic(?bool $isDefaultPostPublic): Group
    {
        $this->isDefaultPostPublic = $isDefaultPostPublic;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getChatSecurity(): ?int
    {
        return $this->chatSecurity;
    }

    /**
     * @param int|null $chatSecurity
     * @return Group
     */
    public function setChatSecurity(?int $chatSecurity): Group
    {
        $this->chatSecurity = $chatSecurity;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }

    /**
     * @param string|null $locale
     * @return Group
     */
    public function setLocale(?string $locale): Group
    {
        $this->locale = $locale;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAvatarImageIndex(): ?int
    {
        return $this->avatarImageIndex;
    }

    /**
     * @param int|null $avatarImageIndex
     * @return Group
     */
    public function setAvatarImageIndex(?int $avatarImageIndex): Group
    {
        $this->avatarImageIndex = $avatarImageIndex;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getHomepage(): ?int
    {
        return $this->homepage;
    }

    /**
     * @param int|null $homepage
     * @return Group
     */
    public function setHomepage(?int $homepage): Group
    {
        $this->homepage = $homepage;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMembershipOption(): ?int
    {
        return $this->membershipOption;
    }

    /**
     * @param int|null $membershipOption
     * @return Group
     */
    public function setMembershipOption(?int $membershipOption): Group
    {
        $this->membershipOption = $membershipOption;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getDefaultPublicity(): ?int
    {
        return $this->defaultPublicity;
    }

    /**
     * @param int|null $defaultPublicity
     * @return Group
     */
    public function setDefaultPublicity(?int $defaultPublicity): Group
    {
        $this->defaultPublicity = $defaultPublicity;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTheme(): ?string
    {
        return $this->theme;
    }

    /**
     * @param string|null $theme
     * @return Group
     */
    public function setTheme(?string $theme): Group
    {
        $this->theme = $theme;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBannerPath(): ?string
    {
        return $this->bannerPath;
    }

    /**
     * @param string|null $bannerPath
     * @return Group
     */
    public function setBannerPath(?string $bannerPath): Group
    {
        $this->bannerPath = $bannerPath;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAvatarPath(): ?string
    {
        return $this->avatarPath;
    }

    /**
     * @param string|null $avatarPath
     * @return Group
     */
    public function setAvatarPath(?string $avatarPath): Group
    {
        $this->avatarPath = $avatarPath;
        return $this;
    }

    /**
     * @return int|string|null
     */
    public function getConversationId()
    {
        return $this->conversationId;
    }

    /**
     * @param int|string|null $conversationId
     * @return Group
     */
    public function setConversationId($conversationId)
    {
        $this->conversationId = $conversationId;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getEnableInvitationMessagingForAdmins(): ?bool
    {
        return $this->enableInvitationMessagingForAdmins;
    }

    /**
     * @param bool|null $enableInvitationMessagingForAdmins
     * @return Group
     */
    public function setEnableInvitationMessagingForAdmins(?bool $enableInvitationMessagingForAdmins): Group
    {
        $this->enableInvitationMessagingForAdmins = $enableInvitationMessagingForAdmins;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getBanExpireDate(): ?\DateTime
    {
        return $this->banExpireDate;
    }

    /**
     * @param \DateTime|null $banExpireDate
     * @return Group
     */
    public function setBanExpireDate(?\DateTime $banExpireDate): Group
    {
        $this->banExpireDate = $banExpireDate;
        return $this;
    }

}