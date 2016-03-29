<?php

namespace Locastic\MsanApi\Handler;

use Locastic\MsanApi\Helpers\Resources;

/**
 * Class DocumentHandler
 * @package Locastic\MsanApi\Handler
 */
class DocumentHandler extends ApiHandler
{
    /**
     * @param array $params
     * @return mixed
     */
    public function getDocumentsItems(array $params = null)
    {
        return $this->makeGetRequest(Resources::DOCUMENTS_ITEMS, $params);
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function getDocumentsHeaders(array $params = null)
    {
        return $this->makeGetRequest(Resources::DOCUMENTS_HEADERS, $params);
    }
} 