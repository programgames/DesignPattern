<?php


namespace Structural\Adapter;


class SerializedClient
{
    public function sendSerialized($data)
    {
        if ($data = unserialize($data)) {
            echo "DATA SEND : " . $data->message;
        }
    }
}