<?php

namespace Locastic\Test;


use Buzz\Message\Form\FormRequest;
use Locastic\Helpers\Resources;
use Buzz\Exception;


class ApiTest extends \PHPUnit_Framework_TestCase
{
    protected $client;


    public function testData()
    {
        $apiHandler = $this->getMockBuilder('ApiHandler')->getMock();
        $data = $this->getMockBuilder('ApiData')->getMock();

        $apiHandler
            ->expects($this->any())
            ->method('makeRequest')
            ->with(FormRequest::METHOD_GET, Resources::API_ENDPOINT);

        $this->assertInstanceOf('ApiData', $data);
    }

}