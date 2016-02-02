<?php

namespace Locastic\Settings;

class CurlSettings
{
    /**
     * @var array
     */
    private $settings;

    /**
     * @param array $settings
     */
    public function __construct(array $settings = null)
    {
        $this->settings = array(
            (string)CURLOPT_VERBOSE => 1,
            (string)CURLOPT_SSL_VERIFYPEER => 1,
            (string)CURLOPT_CAINFO => 'certs/ca.pem',
            (string)CURLOPT_SSLCERT => 'certs/client.pem',
            (string)CURLOPT_SSLKEY => 'certs/key.pem',
            (string)CURLOPT_SSLKEYPASSWD => '1234',
            (string)CURLOPT_TIMEOUT => 60,
        );

        if ($settings)
            $this->settings += $settings;
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