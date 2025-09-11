<?php

declare(strict_types=1);

namespace Aon4o\WhmcsHelpers;

use Aon4o\WhmcsHelpers\Enums\Hooks\Addon;
use Aon4o\WhmcsHelpers\Enums\Hooks\AdminArea;
use Aon4o\WhmcsHelpers\Enums\Hooks\Authentication;
use Aon4o\WhmcsHelpers\Enums\Hooks\Client;
use Aon4o\WhmcsHelpers\Enums\Hooks\ClientAreaInterface;
use Aon4o\WhmcsHelpers\Enums\Hooks\Contact;
use Aon4o\WhmcsHelpers\Enums\Hooks\Cron;
use Aon4o\WhmcsHelpers\Enums\Hooks\Domain;
use Aon4o\WhmcsHelpers\Enums\Hooks\EverythingElse;
use Aon4o\WhmcsHelpers\Enums\Hooks\InvoicesQuotes;
use Aon4o\WhmcsHelpers\Enums\Hooks\Module;
use Aon4o\WhmcsHelpers\Enums\Hooks\Output;
use Aon4o\WhmcsHelpers\Enums\Hooks\ProductsServices;
use Aon4o\WhmcsHelpers\Enums\Hooks\RegistrarModule;
use Aon4o\WhmcsHelpers\Enums\Hooks\Service;
use Aon4o\WhmcsHelpers\Enums\Hooks\ShoppingCart;
use Aon4o\WhmcsHelpers\Enums\Hooks\SupportTools;
use Aon4o\WhmcsHelpers\Enums\Hooks\Ticket;
use Aon4o\WhmcsHelpers\Enums\Hooks\User;

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

    /**
     * @param  Addon|AdminArea|Authentication|Client|ClientAreaInterface|Contact|Cron|Domain|EverythingElse|InvoicesQuotes|Module|Output|ProductsServices|RegistrarModule|Service|ShoppingCart|SupportTools|Ticket|User  $hook
     * @param  int  $priority
     * @param  callable  $closure
     *
     * @return void
     */
    public static function addHook(
        Addon|AdminArea|Authentication|Client|ClientAreaInterface|Contact|Cron|Domain|EverythingElse|InvoicesQuotes|Module|Output|ProductsServices|RegistrarModule|Service|ShoppingCart|SupportTools|Ticket|User $hook,
        callable $closure,
        int $priority = 1,
    ): void {
        add_hook($hook->value, $priority, $closure);
    }
}
