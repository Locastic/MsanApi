<?php

namespace Locastic\MsanApi\Reader;

use Buzz\Message\Response;

/**
 * Interface ReaderInterface
 * @package Locastic\MsanApi\Reader
 */
interface ReaderInterface
{
    /**
     * @param Response $response
     * @return mixed
     */
    public function read(Response $response);
}