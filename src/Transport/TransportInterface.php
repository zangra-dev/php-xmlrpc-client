<?php

namespace Zangra\Component\XmlRpc\Transport;

interface TransportInterface
{
    /**
     * @throws TransportException when posting failed
     */
    public function post(string $url, string $xmlRequest): Response;
}
