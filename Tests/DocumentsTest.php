<?php

use Locastic\MsanApi\Handler\DocumentHandler;
use Locastic\MsanApi\Helpers\ApiData;
use Locastic\MsanApi\Reader\XmlReader;
use Locastic\MsanApi\Settings\ApiSettings;
use Locastic\MsanApi\Settings\CurlSettings;

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
        $curlSettings = array(
            (string)CURLOPT_SSL_VERIFYPEER => 1,
            (string)CURLOPT_CAINFO => 'certs/ca.pem',
            (string)CURLOPT_SSLCERT => 'certs/client.pem',
            (string)CURLOPT_SSLKEY => 'certs/key.pem',
            (string)CURLOPT_SSLKEYPASSWD => '1234',
            (string)CURLOPT_TIMEOUT => 300,
        );

        $this->documentXmlHandler = new DocumentHandler(
            new CurlSettings($curlSettings),
            new ApiSettings(),
            new XmlReader()
        );
    }
}