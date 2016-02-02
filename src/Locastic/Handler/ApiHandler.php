<?php

namespace Locastic\Handler;

use Buzz\Client\Curl;
use Buzz\Message\Form\FormRequest;
use Buzz\Browser;
use Buzz\Message\Response;

use Locastic\Reader\ReaderInterface;
use Locastic\Settings\ApiSettings;
use Locastic\Settings\CurlSettings;

class ApiHandler
{
    /**
     * @var Browser
     */
    private $browser;

    /**
     * @var Curl
     */
    private $client;

    /**
     * @var ReaderInterface
     */
    private $reader;

    /**
     * @var array
     */
    private $apiSettings;


    public function __construct(CurlSettings $curlSettings = null, ApiSettings $apiSettings, ReaderInterface $reader)
    {
        $this->client = new Curl();

        $this->apiSettings = $apiSettings->getSettings();

        if ($curlSettings)
            $this->setCurlOptions($this->client, $curlSettings->getSettings());

        $this->browser = new Browser($this->client);
        $this->reader = $reader;
    }

    /**
     * @param Curl $client
     * @param array $settings
     */
    private function setCurlOptions(Curl $client, array $settings)
    {
        foreach ($settings as $option => $value) {
            $client->setOption($option, $value);
        }
    }

    /**
     * @param $route
     * @param null $params
     * @param null $headers
     * @return mixed
     */
    protected function makeGetRequest($route, $params = null, $headers = null)
    {
        return $this->makeRequest(FormRequest::METHOD_GET, $params, $route, $headers);
    }

    /**
     * @param $method
     * @param null $params
     * @param $route
     * @param null $headers
     * @return mixed
     */
    private function makeRequest($method, $params = null, $route, $headers = null)
    {
        $request = new FormRequest(
            $method,
            $route,
            $this->apiSettings['api_endpoint']
        );

        if ($params) {
            $request->setFields($params);
        }

        if ($headers) {
            $request->setHeaders($headers);
        }
//        ddd($request);
        return $this->sendRequest($request);
    }

    /**
     * @param FormRequest $request
     * @return mixed
     */
    private function sendRequest(FormRequest $request)
    {
        /**
         * @var Response $response
         */
        $response = $this->browser->send($request);

        return $this->reader->read($response);
    }


}