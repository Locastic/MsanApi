<?php

use Buzz\Message\Form\FormRequest;
use Locastic\MsanApi\Helpers\Resources;
use Buzz\Exception;

class ApiTest extends \PHPUnit_Framework_TestCase
{

    public function testDataResponse()
    {
        $apiHandler = $this->getMockBuilder('ApiHandler')->getMock();
        $data = $this->getMockBuilder('ApiData')->getMock();

        $apiHandler
            ->expects($this->any())
            ->method('makeRequest')
            ->with(FormRequest::METHOD_GET, Resources::API_ENDPOINT)
            ->willReturn($this->returnValue($data));

    }

}