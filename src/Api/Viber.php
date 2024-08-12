<?php

namespace OsioSms\Api;

class ViberApi extends BaseApi
{
    public function send($recipient, $senderId, $message, $mediaUrl = null, $scheduleTime = null)
    {
        $url = "sms/send";
        $data = [
            'recipient' => $recipient,
            'sender_id' => $senderId,
            'type' => 'viber',
            'message' => $message,
        ];

        if ($mediaUrl) {
            $data['media_url'] = $mediaUrl;
        }

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
