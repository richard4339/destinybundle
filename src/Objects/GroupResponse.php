<?php


namespace Destiny\ClientBundle\Objects;


/**
 * Class GroupResponse
 * @package Destiny\ClientBundle\Objects
 */
class GroupResponse
{
    /**
     * @var Group|null
     */
    public $detail;

    /**
     * @var GroupMember|null
     */
    public $founder;

    /**
     * @return Group|null
     */
    public function getDetail(): ?Group
    {
        return $this->detail;
    }

    /**
     * @param Group|null $detail
     * @return GroupResponse
     */
    public function setDetail(?Group $detail): GroupResponse
    {
        $this->detail = $detail;
        return $this;
    }

    /**
     * @return GroupMember|null
     */
    public function getFounder(): ?GroupMember
    {
        return $this->founder;
    }

    /**
     * @param GroupMember|null $founder
     * @return GroupResponse
     */
    public function setFounder(?GroupMember $founder): GroupResponse
    {
        $this->founder = $founder;
        return $this;
    }

}