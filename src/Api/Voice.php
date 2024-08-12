<?php

namespace OsioSms\Api;

class Voice extends BaseApi
{
    public function send($recipient, $senderId, $language, $gender, $message, $scheduleTime = null)
    {
        $url = "sms/send";
        $data = [
            'recipient' => $recipient,
            'sender_id' => $senderId,
            'type' => 'voice',
            'language' => $language,
            'gender' => $gender,
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
