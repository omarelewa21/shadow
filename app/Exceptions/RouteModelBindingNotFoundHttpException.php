<?php

namespace App\Exceptions;

use Exception;

class RouteModelBindingNotFoundHttpException extends Exception
{
    /**
     * @param string     $message  The internal exception message
     * @param \Throwable $previous The previous exception
     * @param int        $code     The internal exception code
     */
    public function __construct(string $message = null, \Throwable $previous = null, int $code = 0, array $headers = [])
    {
        // we throw an exception to bugsnag in order to match the error towards the cake environment
        parent::__construct(404, $message, $previous, $headers, $code);
    }
}
