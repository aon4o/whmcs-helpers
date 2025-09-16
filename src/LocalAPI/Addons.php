<?php

namespace Aon4o\WhmcsHelpers\LocalAPI;

use Aon4o\WhmcsHelpers\Interfaces\LocalAPI;

class Addons extends LocalAPI
{
    /**
     * @link https://developers.whmcs.com/api-reference/updateclientaddon/
     */
    public function updateClientAddon(
        int $id,
        null|string $status = null,
        null|int $addon_id = null,
        null|string $name = null,
        null|float $setup_fee = null,
        null|float $recurring = null,
        null|string $billing_cycle = null,
        null|string $next_due_date = null,
        null|string $termination_date = null,
        null|string $notes = null,
        null|bool $auto_recalc = null,
    ): array {
        return self::call('UpdateClientAddon', self::payload([
            'id' => $id,
            'status' => $status,
            'addonid' => $addon_id,
            'name' => $name,
            'setupfee' => $setup_fee,
            'recurring' => $recurring,
            'billingcycle' => $billing_cycle,
            'nextduedate' => $next_due_date,
            'terminationdate' => $termination_date,
            'notes' => $notes,
            'autorecalc' => $auto_recalc,
        ]));
    }
}
