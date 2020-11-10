<?php

namespace App\Helpers;

class SessionFlash
{
    public static function createMessage(array $message, string $type = 'alert-info')
    {
        \Session::flash('messages', $message);
        \Session::flash('alert_type', $type);
    }
}
