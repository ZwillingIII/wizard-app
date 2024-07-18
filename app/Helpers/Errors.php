<?php

namespace App\Helpers;

class Errors
{
    public static function setError(int|string $status, string $message = '')
    {
        return [
            'status' => $status,
            'message' => $message
        ];
    }
}