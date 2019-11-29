<?php


namespace Destiny\ClientBundle\Objects\Responses;


use Destiny\ClientBundle\Objects\GroupMemberResponse;

/**
 * Class BaseGroupMemberResponse
 * @package Destiny\ClientBundle\Objects\Responses
 */
class BaseGroupMemberResponse extends Response
{
    /**
     * @var GroupMemberResponse|null
     */
    public $response;

    /**
     * @return GroupMemberResponse|null
     */
    public function getResponse(): ?GroupMemberResponse
    {
        return $this->response;
    }

    /**
     * @param GroupMemberResponse|null $response
     * @return BaseGroupMemberResponse
     */
    public function setResponse(?GroupMemberResponse $response): BaseGroupMemberResponse
    {
        $this->response = $response;
        return $this;
    }


}