<?php

namespace Locastic\Settings;


use Locastic\Helpers\Resources;

class ApiSettings
{
    /**
     * @var array
     */
    private $settings;

    public function __construct()
    {
        $this->settings = array('api_endpoint' => Resources::API_ENDPOINT);
    }

    /**
     * @return array
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * @param array $settings
     */
    public function setSettings($settings)
    {
        $this->settings = $settings;
    }

} 