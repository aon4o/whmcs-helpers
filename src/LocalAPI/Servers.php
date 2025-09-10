<?php

namespace Aon4o\WhmcsHelpers\LocalAPI;

use Aon4o\WhmcsHelpers\Interfaces\LocalAPI;

class Servers extends LocalAPI
{
    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getHealthStatus(null|bool $fetchStatus = null): array
    {
        return self::call('GetHealthStatus', self::payload(['fetchStatus' => $fetchStatus]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getServers(
        null|int $serviceId = null,
        null|int $addonId = null,
        null|bool $fetchStatus = null,
    ): array {
        return self::call('GetServers',
            self::payload(['serviceId' => $serviceId, 'addonId' => $addonId, 'fetchStatus' => $fetchStatus]));
    }
}
