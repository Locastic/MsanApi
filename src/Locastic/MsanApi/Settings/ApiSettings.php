<?php

namespace Locastic\MsanApi\Settings;

use Locastic\MsanApi\Helpers\Resources;

/**
 * Class ApiSettings
 * @package Locastic\MsanApi\Settings
 */
class ApiSettings
{
    /**
     * @var array
     */
    private $settings;

    /**
     * ApiSettings constructor.
     */
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