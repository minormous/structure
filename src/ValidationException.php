<?php

namespace Minormous\Structure;

use DomainException;

class ValidationException extends DomainException
{
    /**
     * @param string $message
     *
     * @return static
     */
    public static function invalid($message)
    {
        return new static($message);
    }
}
