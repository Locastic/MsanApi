<?php

namespace Locastic\Test;


use Locastic\Handler\DocumentHandler;
use Locastic\Helpers\ApiData;
use Locastic\Reader\XmlReader;
use Locastic\Settings\ApiSettings;
use Locastic\Settings\CurlSettings;

class DocumentsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var DocumentHandler
     */
    protected $documentXmlHandler;

    public function testDocumentsHeadersValidOutputXml()
    {
        /**
         * @var ApiData
         */
        $apiData = $this->documentXmlHandler->getDocumentsHeaders();

        $this->assertEquals(200, $apiData->getApiResponse()->getStatusCode());
        $this->assertInstanceOf('SimpleXMLElement', $apiData->getData());
    }

    public function testDocumentsItemsValidOutputXml()
    {
        /**
         * @var ApiData
         */
        $apiData = $this->documentXmlHandler->getDocumentsItems();

        $this->assertEquals(200, $apiData->getApiResponse()->getStatusCode());
        $this->assertInstanceOf('SimpleXMLElement', $apiData->getData());
    }

    public function testDocumentsHeadersXmlDataStructure()
    {
        /**
         * @var ApiData
         */
        $apiData = $this->documentXmlHandler->getDocumentsHeaders();

        $this->assertObjectHasAttribute('DocumentNo', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('DocumentType', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('DocumentDate', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('ShippingType', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('DocumentSubtotal', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('DocumentTaxTotal', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('DocumentTotal', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('DocumentCancellation', $apiData->getData()->Table[0]);
    }

    public function testDocumentsItemsXmlDataStructure()
    {
        /**
         * @var ApiData
         */
        $apiData = $this->documentXmlHandler->getDocumentsItems();

        $this->assertObjectHasAttribute('DocumentNo', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('DocumentType', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('DocumentDate', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('ItemNo', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('ItemProductCode', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('ItemType', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('ItemUnit', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('ItemQuantity', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('ItemProductPrice', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('ItemBaseDiscount', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('ItemAdditionalDiscount', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('ItemTax', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('ItemTotal', $apiData->getData()->Table[0]);
    }

    protected function setUp()
    {
        $this->documentXmlHandler = new DocumentHandler(new CurlSettings(), new ApiSettings(), new XmlReader());
    }
}