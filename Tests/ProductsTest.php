<?php

use Locastic\MsanApi\Handler\ProductHandler;
use Locastic\MsanApi\Helpers\ApiData;
use Locastic\MsanApi\Reader\XmlReader;
use Locastic\MsanApi\Settings\ApiSettings;
use Locastic\MsanApi\Settings\CurlSettings;

class ProductsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ProductHandler
     */
    protected $productXmlHandler;

    public function testProductListValidOutputXml()
    {
        /**
         * @var ApiData
         */
        $apiData = $this->productXmlHandler->getProductsList();

        $this->assertEquals(200, $apiData->getApiResponse()->getStatusCode());
        $this->assertInstanceOf('SimpleXMLElement', $apiData->getData());

    }

    public function testProductPriceListValidOutputXml()
    {
        /**
         * @var ApiData
         */
        $apiData = $this->productXmlHandler->getProductsList();

        $this->assertEquals(200, $apiData->getApiResponse()->getStatusCode());
        $this->assertInstanceOf('SimpleXMLElement', $apiData->getData());

    }

    public function testProductAvailabilityValidOutputXml()
    {
        /**
         * @var ApiData
         */
        $apiData = $this->productXmlHandler->getProductsAvailability();

        $this->assertEquals(200, $apiData->getApiResponse()->getStatusCode());
        $this->assertInstanceOf('SimpleXMLElement', $apiData->getData());

    }

    public function testProductCategoriesValidOutputXml()
    {
        /**
         * @var ApiData
         */
        $apiData = $this->productXmlHandler->getProductsCategories();

        $this->assertEquals(200, $apiData->getApiResponse()->getStatusCode());
        $this->assertInstanceOf('SimpleXMLElement', $apiData->getData());

    }

    public function testProductCategorisationValidOutputXml()
    {
        /**
         * @var ApiData
         */
        $apiData = $this->productXmlHandler->getProductsCategorisation();

        $this->assertEquals(200, $apiData->getApiResponse()->getStatusCode());
        $this->assertInstanceOf('SimpleXMLElement', $apiData->getData());

    }

    public function testProductBarcodesValidOutputXml()
    {
        /**
         * @var ApiData
         */
        $apiData = $this->productXmlHandler->getProductsBarcodes();

        $this->assertEquals(200, $apiData->getApiResponse()->getStatusCode());
        $this->assertInstanceOf('SimpleXMLElement', $apiData->getData());

    }

    public function testProductSpecificationValidOutputXml()
    {
        /**
         * @var ApiData
         */
        $apiData = $this->productXmlHandler->getProductsSpecification();

        $this->assertEquals(200, $apiData->getApiResponse()->getStatusCode());
        $this->assertInstanceOf('SimpleXMLElement', $apiData->getData());

    }


    public function testProductListByTypeXmlDataStructure()
    {
        /**
         * @var ApiData
         */
        $apiData = $this->productXmlHandler->getProductsList(array('ProductType' => 'Procesor'));

        $this->assertObjectHasAttribute('ProductCode', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('ProductName', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('ProductType', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('Brand', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('Model', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('PartNo', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('Warranty', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('PackageWeight', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('PackageDimensionLength', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('PackageDimensionWidth', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('PackageDimensionHeight', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('TechnicalDescription', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('MarketingDescription', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('ProductImageUrl', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('IsComputerComponent', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('ChangeDateTime', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('BrojPovratnihNaknada', $apiData->getData()->Table[0]);
    }

    public function testProductPriceListXmlDataStructure()
    {
        /**
         * @var ApiData
         */
        $apiData = $this->productXmlHandler->getProductsPriceList();

        $this->assertObjectHasAttribute('ProductCode', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('ProductListPrice', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('ProductDiscount', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('ProductPartnerPrice', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('RecommendedRetailPrice', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('ProductAvailability', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('OnPromotion', $apiData->getData()->Table[0]);

    }

    public function testProductAvailabilityXmlDataStructure()
    {
        /**
         * @var ApiData
         */
        $apiData = $this->productXmlHandler->getProductsAvailability();

        $this->assertObjectHasAttribute('ProductCode', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('ProductAvailability', $apiData->getData()->Table[0]);
    }


    public function testProductCategorisationXmlDataStructure()
    {
        /**
         * @var ApiData
         */
        $apiData = $this->productXmlHandler->getProductsCategorisation();

        $this->assertObjectHasAttribute('ProductCode', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('CategoryID', $apiData->getData()->Table[0]);
    }

    public function testProductCategoriesXmlLDataStructure()
    {
        /**
         * @var ApiData
         */
        $apiData = $this->productXmlHandler->getProductsCategories();

        $this->assertObjectHasAttribute('CategoryID', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('CategoryName', $apiData->getData()->Table[0]);
    }

    public function testProductBarcodesXmlLDataStructure()
    {
        /**
         * @var ApiData
         */
        $apiData = $this->productXmlHandler->getProductsBarcodes();

        $this->assertObjectHasAttribute('ProductCode', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('BarcodeType', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('BarcodeValue', $apiData->getData()->Table[0]);
    }

    public function testProductSpecificationXmlLDataStructure()
    {
        /**
         * @var ApiData
         */
        $apiData = $this->productXmlHandler->getProductsSpecification();

        $this->assertObjectHasAttribute('ProductCode', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('SpecificationGroup', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('SpecificationItemNo', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('SpecificationItemName', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('SpecificationItemValues', $apiData->getData()->Table[0]);
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

        $this->productXmlHandler = new ProductHandler(
            new CurlSettings($curlSettings),
            new ApiSettings(),
            new XmlReader()
        );
    }
}