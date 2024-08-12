<?php

namespace OsioSms;

use OsioSms\Api\Contacts;
use OsioSms\Api\Groups;
use OsioSms\Api\Sms;
use OsioSms\Api\Voice;
use OsioSms\Api\Mms;
use OsioSms\Api\Whatsapp;
use OsioSms\Api\Otp;
use OsioSms\Api\Viber;
use OsioSms\Api\Profile;

class OsioSms
{
    private $apiToken;

    public function __construct($apiToken)
    {
        $this->apiToken = $apiToken;
    }

    public function contacts()
    {
        return new Contacts($this->apiToken);
    }

    public function groups()
    {
        return new Groups($this->apiToken);
    }

    public function sms()
    {
        return new Sms($this->apiToken);
    }

    public function voice()
    {
        return new Voice($this->apiToken);
    }

    public function mms()
    {
        return new Mms($this->apiToken);
    }

    public function whatsapp()
    {
        return new Whatsapp($this->apiToken);
    }

    public function otp()
    {
        return new Otp($this->apiToken);
    }

    public function viber()
    {
        return new Viber($this->apiToken);
    }

    public function profile()
    {
        return new profile($this->apiToken);
    }
}
