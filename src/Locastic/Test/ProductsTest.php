<?php

namespace Locastic\Test;


use Locastic\Handler\ProductHandler;
use Locastic\Helpers\ApiData;
use Locastic\Reader\XmlReader;
use Locastic\Settings\ApiSettings;
use Locastic\Settings\CurlSettings;

class ProductsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ProductHandler
     */
    protected $productXmlHandler;

    public function testProductsListValidOutputXml()
    {
        /**
         * @var ApiData
         */
        $apiData = $this->productXmlHandler->getProductsCategories();

        $this->assertEquals(200, $apiData->getApiResponse()->getStatusCode());
        $this->assertInstanceOf('SimpleXMLElement', $apiData->getData());

    }

    public function testProductListDataStructure()
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
        $this->assertObjectHasAttribute('ProductImageurl', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('IsComputerComponent', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('ChangeDateTime', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('BrojPovratnihNaknada', $apiData->getData()->Table[0]);
    }

    public function testProductCategoriesDataStructure()
    {
        /**
         * @var ApiData
         */
        $apiData = $this->productXmlHandler->getProductsCategories();


        $this->assertObjectHasAttribute('CategoryID', $apiData->getData()->Table[0]);
        $this->assertObjectHasAttribute('CategoryName', $apiData->getData()->Table[0]);
    }

    protected function setUp()
    {
        $this->productXmlHandler = new ProductHandler(new CurlSettings(), new ApiSettings(), new XmlReader());
    }
}