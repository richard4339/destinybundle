<?php

namespace Destiny\ClientBundle\Exceptions;

use Throwable;

/**
 * Class OAuthException
 * @package Destiny\ClientBundle\Exceptions
 */
class OAuthException extends Exception
{

    /**
     * OAuthException constructor.
     * @param string $message
     * @param int $code
     * @param int $seconds
     * @param string $status
     * @param Throwable|null $previous
     */
    public function __construct(string $message = "No OAuth access token provided to method that requires authentication.", int $code = 0, int $seconds = 0, string $status = '', ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $seconds, $status, $previous);
    }
}