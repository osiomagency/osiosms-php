<?php

namespace OsioSms\Api;

class Contacts extends Base
{
    public function create($groupId, $phone, $fields = [])
    {
        $url = "contacts/{$groupId}/store";
        $data = array_merge(['PHONE' => $phone], $fields);

        return $this->sendRequest('POST', $url, $data);
    }

    public function view($groupId, $uid)
    {
        $url = "contacts/{$groupId}/search/{$uid}";

        return $this->sendRequest('POST', $url);
    }

    public function update($groupId, $uid, $phone, $fields = [])
    {
        $url = "contacts/{$groupId}/update/{$uid}";
        $data = array_merge(['PHONE' => $phone], $fields);

        return $this->sendRequest('PATCH', $url, $data);
    }

    public function delete($groupId, $uid)
    {
        $url = "contacts/{$groupId}/delete/{$uid}";

        return $this->sendRequest('DELETE', $url);
    }

    public function viewAll($groupId)
    {
        $url = "contacts/{$groupId}/all";

        return $this->sendRequest('POST', $url);
    }
}
