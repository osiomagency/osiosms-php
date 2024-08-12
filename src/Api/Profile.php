<?php

namespace OsioSms\Api;

class Profile extends Base
{
    public function viewBalance()
    {
        $url = "balance";

        return $this->sendRequest('GET', $url);
    }

    public function viewProfile()
    {
        $url = "me";

        return $this->sendRequest('GET', $url);
    }
}
