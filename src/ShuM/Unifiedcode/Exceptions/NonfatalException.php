<?php

namespace ShuM\Unifiedcode\Exceptions;

class NonfatalException extends \Exception
{
    /**
     * NonfatalException constructor.
     * @param int $code
     * @param string $message
     */
    public function __construct(int $code, $message = '')
    {
        parent::__construct($message, $code);
    }
}
