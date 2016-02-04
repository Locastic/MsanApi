<?php

namespace Locastic\Helpers;

use Buzz\Message\Response;


class ApiData
{
    /**
     * @var Response
     */
    private $apiResponse;

    /**
     * @var mixed
     */
    private $data;

    /**
     * @param Response $response
     * @param mixed $data
     */
    public function __construct(Response $response, $data)
    {
        $this->apiResponse = $response;
        $this->data = $data;
    }

    /**
     * @return Response
     */
    public function getApiResponse()
    {
        return $this->apiResponse;
    }

    /**
     * @param Response $apiResponse
     */
    public function setApiResponse($apiResponse)
    {
        $this->apiResponse = $apiResponse;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

}