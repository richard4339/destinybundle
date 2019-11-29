<?php


namespace Destiny\ClientBundle\Objects\Responses;


use Destiny\ClientBundle\Objects\GlobalAlert;

/**
 * Class BaseGlobalAlertsResponse
 * @package Destiny\ClientBundle\Objects\Responses
 */
class BaseGlobalAlertsResponse extends Response
{
    /**
     * @var GlobalAlert[]|null
     */
    public $response;

    /**
     * @return GlobalAlert[]|null
     */
    public function getResponse(): ?array
    {
        return $this->response;
    }

    /**
     * @param GlobalAlert[]|null $response
     * @return BaseGlobalAlertsResponse
     */
    public function setResponse(?array $response): BaseGlobalAlertsResponse
    {
        $this->response = $response;
        return $this;
    }
}