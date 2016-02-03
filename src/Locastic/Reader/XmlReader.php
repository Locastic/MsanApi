<?php

namespace Locastic\Reader;

use Buzz\Message\Response;

class XmlReader implements ReaderInterface
{
    /**
     * @param Response $response
     * @return \SimpleXMLElement
     */
    public function read(Response $response)
    {
        return new \SimpleXMLElement($response->getContent());
    }
}
