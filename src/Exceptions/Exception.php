<?php

namespace Destiny\ClientBundle\Exceptions;

use Throwable;

/**
 * Class Exception
 * @package Destiny\ClientBundle\Exceptions
 *
 * @property int $throttleSeconds
 * @property string $status
 */
class Exception extends \Exception
{

    /**
     * Exception constructor.
     *
     * @param string $message
     * @param int $code
     * @param int $seconds
     * @param string $status
     * @param Throwable|null $previous
     */
    public function __construct($message = "", $code = 0, $seconds = 0, $status = '', ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);

        $this->throttleSeconds = $seconds;
        $this->status = $status;
    }
}