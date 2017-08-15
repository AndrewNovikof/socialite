<?php

namespace Laravel\Socialite\Contracts\Helpers;

use Laravel\Socialite\Contracts\ConfigInterface;
use Laravel\Socialite\Exception\MissingConfigException;

interface ConfigRetrieverInterface
{
    /**
     * @param string $providerIdentifier
     * @param array  $additionalConfigKeys
     *
     * @throws MissingConfigException
     *
     * @return ConfigInterface
     */
    public function fromEnv($providerIdentifier, array $additionalConfigKeys = []);

    /**
     * @param string $providerName
     * @param array  $additionalConfigKeys
     *
     * @throws MissingConfigException
     *
     * @return ConfigInterface
     */
    public function fromServices($providerName, array $additionalConfigKeys = []);
}
