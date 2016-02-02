<?php

namespace Locastic\Handler;

use Locastic\Helpers\Resources;

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