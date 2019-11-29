<?php


namespace Destiny\ClientBundle\Objects\Responses;


use Destiny\ClientBundle\Objects\GroupResponse;

/**
 * Class BaseGroupResponse
 * @package Destiny\ClientBundle\Objects
 */
class BaseGroupResponse extends Response
{
    /**
     * @var GroupResponse|null
     */
    public $response;

    /**
     * @return GroupResponse|null
     */
    public function getResponse(): ?GroupResponse
    {
        return $this->response;
    }

    /**
     * @param GroupResponse|null $response
     * @return BaseGroupResponse
     */
    public function setResponse(?GroupResponse $response): BaseGroupResponse
    {
        $this->response = $response;
        return $this;
    }
}