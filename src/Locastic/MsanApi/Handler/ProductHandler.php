<?php

namespace Locastic\MsanApi\Handler;

use Locastic\MsanApi\Helpers\Resources;

/**
 * Class ProductHandler
 * @package Locastic\MsanApi\Handler
 */
class ProductHandler extends ApiHandler
{
    /**
     * @param array $params
     * @return mixed
     */
    public function getProductsList(array $params = null)
    {
        return $this->makeGetRequest(Resources::PRODUCTS_LIST, $params);
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function getProductsPriceList(array $params = null)
    {
        return $this->makeGetRequest(Resources::PRODUCTS_PRICE_LIST, $params);
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function getProductsAvailability(array $params = null)
    {
        return $this->makeGetRequest(Resources::PRODUCTS_AVAILABILITY, $params);
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function getProductsCategories(array $params = ['CategoryTypeId' => 1])
    {
        return $this->makeGetRequest(Resources::PRODUCTS_CATEGORIES, $params);
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function getProductsCategorisation(array $params = ['CategoryTypeId' => 1])
    {
        return $this->makeGetRequest(Resources::PRODUCTS_CATEGORISATION, $params);
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function getProductsBarcodes(array $params = null)
    {
        return $this->makeGetRequest(Resources::PRODUCTS_BARCODES, $params);
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function getProductsSpecification(array $params = null)
    {
        return $this->makeGetRequest(Resources::PRODUCTS_SPECIFICATION, $params);
    }

} 