<?php
namespace Supen\MiPush\Facades;

use Illuminate\Support\Facades\Facade;

class MiPushSender extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'MiPushSender';
    }
}