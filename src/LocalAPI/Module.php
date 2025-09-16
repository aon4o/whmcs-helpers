<?php

namespace Aon4o\WhmcsHelpers\LocalAPI;

use Aon4o\WhmcsHelpers\Interfaces\LocalAPI;

class Module extends LocalAPI
{
    /**
     * @link https://developers.whmcs.com/api-reference/activatemodule/
     */
    public function activateModule(string $module_type, string $module_name, null|array $parameters = null): array
    {
        return self::call('ActivateModule', self::payload([
            'moduleType' => $module_type,
            'moduleName' => $module_name,
            'parameters' => $parameters,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/deactivatemodule/
     */
    public function deactivateModule(string $module_type, string $module_name, null|string $new_gateway = null): array
    {
        return self::call('DeactivateModule', self::payload([
            'moduleType' => $module_type,
            'moduleName' => $module_name,
            'newGateway' => $new_gateway,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/getmoduleconfigurationparameters/
     */
    public function getModuleConfigurationParameters(string $module_type, string $module_name): array
    {
        return self::call('GetModuleConfigurationParameters', self::payload([
            'moduleType' => $module_type,
            'moduleName' => $module_name,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/getmodulequeue/
     */
    public function getModuleQueue(
        null|int $related_id = null,
        null|string $service_type = null,
        null|string $module_name = null,
        null|string $module_action = null,
        null|string $since = null,
    ): array {
        return self::call('GetModuleQueue', self::payload([
            'relatedId' => $related_id,
            'serviceType' => $service_type,
            'moduleName' => $module_name,
            'moduleAction' => $module_action,
            'since' => $since,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/updatemoduleconfiguration/
     */
    public function updateModuleConfiguration(
        string $module_type,
        string $module_name,
        null|array $parameters = null,
    ): array {
        return self::call('UpdateModuleConfiguration', self::payload([
            'moduleType' => $module_type,
            'moduleName' => $module_name,
            'parameters' => $parameters,
        ]));
    }
}
