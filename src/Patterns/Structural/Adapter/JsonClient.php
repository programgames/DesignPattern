<?php

namespace Structural\Adapter;

class JsonClient implements ClientInterface
{

    public function sendRequest($data)
    {
        if($this->isJson($data)) {
            $message = json_decode($data)->message;
            echo 'SENDING DATA : '. $message;

        }
    }

    public function isJson($string) {
        json_decode($string);
        return (json_last_error() == JSON_ERROR_NONE);
    }
}