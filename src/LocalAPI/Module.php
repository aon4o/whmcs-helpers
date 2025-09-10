<?php

namespace Aon4o\WhmcsHelpers\LocalAPI;

use Aon4o\WhmcsHelpers\Interfaces\LocalAPI;

class Module extends LocalAPI
{
    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function activateModule(string $moduleType, string $moduleName, null|array $parameters = null): array
    {
        return self::call('ActivateModule',
            self::payload(['moduleType' => $moduleType, 'moduleName' => $moduleName, 'parameters' => $parameters]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function deactivateModule(string $moduleType, string $moduleName, null|string $newGateway = null): array
    {
        return self::call('DeactivateModule',
            self::payload(['moduleType' => $moduleType, 'moduleName' => $moduleName, 'newGateway' => $newGateway]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getModuleConfigurationParameters(string $moduleType, string $moduleName): array
    {
        return self::call('GetModuleConfigurationParameters',
            self::payload(['moduleType' => $moduleType, 'moduleName' => $moduleName]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getModuleQueue(
        null|int $relatedId = null,
        null|string $serviceType = null,
        null|string $moduleName = null,
        null|string $moduleAction = null,
        null|string $since = null,
    ): array {
        return self::call('GetModuleQueue', self::payload([
            'relatedId' => $relatedId, 'serviceType' => $serviceType, 'moduleName' => $moduleName,
            'moduleAction' => $moduleAction, 'since' => $since,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updateModuleConfiguration(
        string $moduleType,
        string $moduleName,
        null|array $parameters = null,
    ): array {
        return self::call('UpdateModuleConfiguration',
            self::payload(['moduleType' => $moduleType, 'moduleName' => $moduleName, 'parameters' => $parameters]));
    }
}
