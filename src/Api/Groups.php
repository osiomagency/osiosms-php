<?php

namespace OsioSms\Api;

class Groups extends BaseApi
{
    public function createGroup($name)
    {
        $url = "contacts";
        $data = ['name' => $name];

        return $this->sendRequest('POST', $url, $data);
    }

    public function viewGroup($groupId)
    {
        $url = "contacts/{$groupId}/show";

        return $this->sendRequest('POST', $url);
    }

    public function updateGroup($groupId, $name)
    {
        $url = "contacts/{$groupId}";
        $data = ['name' => $name];

        return $this->sendRequest('PATCH', $url, $data);
    }

    public function deleteGroup($groupId)
    {
        $url = "contacts/{$groupId}";

        return $this->sendRequest('DELETE', $url);
    }

    public function viewAllGroups()
    {
        $url = "contacts";

        return $this->sendRequest('GET', $url);
    }
}
