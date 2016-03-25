<?php

namespace Locastic\MsanApi\Reader;

use Buzz\Message\Response;

/**
 * Class XmlReader
 * @package Locastic\MsanApi\Reader
 */
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
