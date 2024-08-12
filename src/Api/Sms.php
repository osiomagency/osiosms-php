<?php

namespace OsioSms\Api;

class Sms extends Base
{
    public function send($recipient, $senderId, $type, $message, $scheduleTime = null, $dltTemplateId = null)
    {
        $url = "sms/send";
        $data = [
            'recipient' => $recipient,
            'sender_id' => $senderId,
            'type' => $type,
            'message' => $message,
        ];

        if ($scheduleTime) {
            $data['schedule_time'] = $scheduleTime;
        }

        if ($dltTemplateId) {
            $data['dlt_template_id'] = $dltTemplateId;
        }

        return $this->sendRequest('POST', $url, $data);
    }

    public function sendCampaign($contactListId, $senderId, $type, $message, $scheduleTime = null, $dltTemplateId = null)
    {
        $url = "sms/campaign";
        $data = [
            'contact_list_id' => $contactListId,
            'sender_id' => $senderId,
            'type' => $type,
            'message' => $message,
        ];

        if ($scheduleTime) {
            $data['schedule_time'] = $scheduleTime;
        }

        if ($dltTemplateId) {
            $data['dlt_template_id'] = $dltTemplateId;
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

    public function viewCampaign($uid)
    {
        $url = "campaign/{$uid}/view";

        return $this->sendRequest('GET', $url);
    }
}
