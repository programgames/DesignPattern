<?php

use Structural\Adapter\ClientInterface;

/**
 * The client code can work with any class that follows the ClientInterface interface.
 * @param ClientInterface $client
 * @param $message
 */
function clientCode(ClientInterface $client,$message)
{
    echo $client->sendRequest($message);

}