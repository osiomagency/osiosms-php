<?php

namespace OsioSms\Api;

class Mms extends Base
{
    public function send($recipient, $senderId, $mediaUrl, $message = null, $scheduleTime = null)
    {
        $url = "sms/send";
        $data = [
            'recipient' => $recipient,
            'sender_id' => $senderId,
            'type' => 'mms',
            'media_url' => $mediaUrl,
        ];

        if ($message) {
            $data['message'] = $message;
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
