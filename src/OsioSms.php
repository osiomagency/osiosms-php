<?php

namespace OsioSms;

use OsioSms\Api\Contacts;
use OsioSms\Api\Groups;
/*use OsioSms\Api\SmsApi;
use OsioSms\Api\VoiceApi;
use OsioSms\Api\MmsApi;
use OsioSms\Api\WhatsappApi;
use OsioSms\Api\OtpApi;
use OsioSms\Api\ViberApi;*/

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

    /*public function sms()
    {
        return new SmsApi($this->apiToken);
    }

    public function voice()
    {
        return new VoiceApi($this->apiToken);
    }

    public function mms()
    {
        return new MmsApi($this->apiToken);
    }

    public function whatsapp()
    {
        return new WhatsappApi($this->apiToken);
    }

    public function otp()
    {
        return new OtpApi($this->apiToken);
    }

    public function viber()
    {
        return new ViberApi($this->apiToken);
    }*/
}
