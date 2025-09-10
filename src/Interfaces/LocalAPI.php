<?php

namespace Aon4o\WhmcsHelpers\Interfaces;

abstract class LocalAPI
{
    /**
     * @param  string  $command
     * @param  array  $data
     * @param  string|null  $admin_username
     *
     * @return array
     *
     * @link https://developers.whmcs.com/api/internal-api/
     */
    public static function call(string $command, array $data = [], string|null $admin_username = null): array
    {
        if ($admin_username) {
            return localAPI($command, $data, $admin_username);
        }

        return localAPI($command, $data);
    }

    /**
     * Helper to filter out nulls and assemble payload.
     *
     * @param  array  $params
     *
     * @return array
     */
    public static function payload(array $params): array
    {
        return array_filter($params, static fn ($v) => $v !== null);
    }
}
