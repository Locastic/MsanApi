<?php

namespace Locastic\Reader;

use Buzz\Message\Response;

class XmlReader implements ReaderInterface
{
    /**
     * @var \SimpleXMLElement
     */
    private $data;

    /**
     * @param Response $response
     * @return \SimpleXMLElement
     */
    public function read(Response $response)
    {
        try {
            $this->data = new \SimpleXMLElement($response->getContent());
        } catch (\Exception $e) {
            $e->getMessage();
        }

        return $this->data;
    }
}
