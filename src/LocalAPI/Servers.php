<?php

namespace Aon4o\WhmcsHelpers\LocalAPI;

use Aon4o\WhmcsHelpers\Interfaces\LocalAPI;

class Servers extends LocalAPI
{
    /**
     * @link https://developers.whmcs.com/api-reference/gethealthstatus/
     */
    public function getHealthStatus(
        bool|null $fetch_status = null,
    ): array {
        return self::call('GetHealthStatus', self::payload([
            'fetchStatus' => $fetch_status,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/getservers/
     */
    public function getServers(
        int|null $service_id = null,
        int|null $addon_id = null,
        bool|null $fetch_status = null,
    ): array {
        return self::call('GetServers', self::payload([
            'serviceId' => $service_id,
            'addonId' => $addon_id,
            'fetchStatus' => $fetch_status,
        ]));
    }
}
