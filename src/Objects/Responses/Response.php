<?php


namespace Destiny\ClientBundle\Objects\Responses;


/**
 * Class Response
 * @package Destiny\ClientBundle\Objects\Responses
 */
class Response
{
    /**
     * @var string|int
     */
    public $errorCode;

    /**
     * @var int
     */
    public $throttleSeconds;

    /**
     * @var string
     */
    public $errorStatus;

    /**
     * @var string
     */
    public $message;

    /**
     * @return int|string
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @param int|string $errorCode
     * @return Response
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getThrottleSeconds(): int
    {
        return $this->throttleSeconds;
    }

    /**
     * @param int $throttleSeconds
     * @return Response
     */
    public function setThrottleSeconds(int $throttleSeconds): Response
    {
        $this->throttleSeconds = $throttleSeconds;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorStatus(): string
    {
        return $this->errorStatus;
    }

    /**
     * @param string $errorStatus
     * @return Response
     */
    public function setErrorStatus(string $errorStatus): Response
    {
        $this->errorStatus = $errorStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return Response
     */
    public function setMessage(string $message): Response
    {
        $this->message = $message;
        return $this;
    }

}