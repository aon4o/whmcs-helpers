<?php

declare(strict_types=1);

namespace Aon4o\WhmcsHelpers;

class WHMCS
{
    /**
     * @param  string  $function
     * @param  mixed|null  $request
     * @param  mixed|null  $response
     *
     * @return void
     *
     * @link https://developers.whmcs.com/provisioning-modules/module-logging/
     */
    public static function log(string $function, mixed $request = null, mixed $response = null): void
    {
        $module = basename(dirname(__FILE__, 5));

        logModuleCall($module, $function, $request, $response);
    }

    /**
     * Used to initialize the WHMCS system when running scripts from CLI.
     * 'init.php' is at the root of your WHMCS installation.
     *
     * @return void
     */
    public static function init(): void
    {
        require_once __DIR__ . '/../../../../../../../init.php';
    }
}
