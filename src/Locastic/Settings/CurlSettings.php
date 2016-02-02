<?php

namespace Locastic\Settings;

class CurlSettings
{
    /**
     * @var array
     */
    private $settings;

    public function __construct(array $settings)
    {
        $this->settings = $settings;
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