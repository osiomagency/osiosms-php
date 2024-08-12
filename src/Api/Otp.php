<?php

namespace OsioSms\Api;

class Otp extends Base
{
    public function send($recipient, $senderId, $message, $scheduleTime = null)
    {
        $url = "sms/send";
        $data = [
            'recipient' => $recipient,
            'sender_id' => $senderId,
            'type' => 'otp',
            'message' => $message,
        ];

        if ($scheduleTime) {
            $data['schedule_time'] = $scheduleTime;
        }

        return $this->sendRequest('POST', $url, $data);
    }

    public function view($uid)
    {
        $url = "sms/{$uid}";

        return $this->sendRequest('GET', $url);
    }

    public function viewAll()
    {
        $url = "sms/";

        return $this->sendRequest('GET', $url);
    }
}
