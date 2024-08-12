<?php

namespace OsioSms\Api;

class Groups extends Base
{
    public function create($name)
    {
        $url = "contacts";
        $data = ['name' => $name];

        return $this->sendRequest('POST', $url, $data);
    }

    public function view($groupId)
    {
        $url = "contacts/{$groupId}/show";

        return $this->sendRequest('POST', $url);
    }

    public function update($groupId, $name)
    {
        $url = "contacts/{$groupId}";
        $data = ['name' => $name];

        return $this->sendRequest('PATCH', $url, $data);
    }

    public function delete($groupId)
    {
        $url = "contacts/{$groupId}";

        return $this->sendRequest('DELETE', $url);
    }

    public function viewAll()
    {
        $url = "contacts";

        return $this->sendRequest('GET', $url);
    }
}
