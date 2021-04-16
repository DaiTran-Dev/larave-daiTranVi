<?php

namespace App\Exceptions;

use Exception;

class ArticelException extends Exception
{
    public function render($request)
    {
        dd("asda");
    }
}
