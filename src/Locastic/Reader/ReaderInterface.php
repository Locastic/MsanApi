<?php

namespace Locastic\Reader;

use Buzz\Message\Response;

interface ReaderInterface
{
    /**
     * @param Response $response
     * @return mixed
     */
    public function read(Response $response);
}