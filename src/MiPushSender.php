<?php

namespace Supen\MiPush;

use xmpush\Sender;
use xmpush\Constants;

class MiPushSender
{
    public $config = null;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function builderAndroidSender()
    {
        if(assert($this->config != null))
            return 

        // 常量设置必须在new Sender()方法之前调用
        Constants::setPackage($this->config["android"]["bundle_id"]);
        Constants::setSecret($this->config["android"]["app_secret"]);

        return new Sender();
    }

    public function  builderIosSender()
    {
        if($this->config == null)
            return

        // 常量设置必须在new Sender()方法之前调用
        Constants::setBundleId($this->config["ios"]["bundle_id"]);
        Constants::setSecret($this->config["ios"]["app_secret"]);

        return new Sender();
    }
}