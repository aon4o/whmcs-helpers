<?php

namespace Aon4o\WhmcsHelpers\LocalAPI;

use Aon4o\WhmcsHelpers\Interfaces\LocalAPI;

class Addons extends LocalAPI
{
    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updateClientAddon(
        int $id,
        null|string $status = null,
        null|int $addonid = null,
        null|string $name = null,
        null|float $setupfee = null,
        null|float $recurring = null,
        null|string $billingcycle = null,
        null|string $nextduedate = null,
        null|string $terminationdate = null,
        null|string $notes = null,
        null|bool $autorecalc = null,
    ): array {
        return self::call('UpdateClientAddon', self::payload([
            'id' => $id, 'status' => $status, 'addonid' => $addonid, 'name' => $name, 'setupfee' => $setupfee,
            'recurring' => $recurring, 'billingcycle' => $billingcycle, 'nextduedate' => $nextduedate,
            'terminationdate' => $terminationdate, 'notes' => $notes, 'autorecalc' => $autorecalc,
        ]));
    }
}
