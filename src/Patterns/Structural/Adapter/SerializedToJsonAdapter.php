<?php


namespace Structural\Adapter;


class SerializedToJsonAdapter implements ClientInterface
{
    /** @var SerializedClient */
    private $serializedClient;

    /**
     * SerializedToJsonAdapter constructor.
     * @param $serializedClient
     */
    public function __construct($serializedClient)
    {
        $this->serializedClient = $serializedClient;
    }

    public function sendRequest($data)
    {
        $data = json_decode($data);
        $this->serializedClient->sendSerialized(serialize($data));
    }
}