<?php

namespace Locastic\MsanApi\Helpers;

/**
 * Class Resources
 * @package Locastic\MsanApi\Helpers
 */
class Resources
{
    const API_ENDPOINT = 'https://b2b.msan.hr/B2BService/HTTP/';

    const PRODUCTS_LIST = 'Product/GetProductsList.aspx';
    const PRODUCTS_PRICE_LIST = 'Product/GetProductsPriceList.aspx';
    const PRODUCTS_AVAILABILITY = 'Product/GetProductsAvailability.aspx';
    const PRODUCTS_CATEGORIES = 'Product/GetCategoriesList.aspx';
    const PRODUCTS_CATEGORISATION = 'Product/GetProductsCategory.aspx';
    const PRODUCTS_SPECIFICATION = 'Product/GetProductsSpecification.aspx';
    const PRODUCTS_BARCODES = 'Product/GetProductsBarcodes.aspx';
    const DOCUMENTS_HEADERS = 'Document/GetDocumentsHeaders.aspx';
    const DOCUMENTS_ITEMS = 'Document/GetDocumentsItems.aspx';
}