<?php

namespace Locastic\MsanApi\Settings;

/**
 * Class CurlSettings
 * @package Locastic\MsanApi\Settings
 */
class CurlSettings
{
    /**
     * @var array
     */
    private $settings;

    /**
     * @var array
     */
    private $mandatorySettings;

    /**
     * @param array $settings
     */
    public function __construct(array $settings)
    {
        // todo decouple this settings
        $this->mandatorySettings = array('64', '10065', '10025', '10087', '10026');

        if (!$settings) {
            throw new \InvalidArgumentException(
                sprintf(
                    "\n"."Please provide mandatory cURL arguments with constants casted to strings:"."\n".
                    "(string)CURLOPT_SSL_VERIFYPEER => 1,"."\n".
                    "(string)CURLOPT_CAINFO => 'certs/ca.pem'"."\n".
                    "(string)CURLOPT_SSLCERT => 'certs/client.pem'"."\n".
                    "(string)CURLOPT_SSLKEY => 'certs/key.pem'"."\n".
                    "(string)CURLOPT_SSLKEYPASSWD => '1234'"."\n"
                )
            );
        } elseif (count(array_intersect_key(array_flip($this->mandatorySettings), $settings)) === count(
                $this->mandatorySettings
            )
        ) {
            $this->settings = $settings;
        } else {
            throw new \InvalidArgumentException(
                sprintf(
                    "\n"."Please provide mandatory cURL arguments with constants casted to strings:"."\n".
                    "(string)CURLOPT_SSL_VERIFYPEER => 1,"."\n".
                    "(string)CURLOPT_CAINFO => 'certs/ca.pem'"."\n".
                    "(string)CURLOPT_SSLCERT => 'certs/client.pem'"."\n".
                    "(string)CURLOPT_SSLKEY => 'certs/key.pem'"."\n".
                    "(string)CURLOPT_SSLKEYPASSWD => '1234'"."\n"
                )
            );
        }
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