<?php

namespace Aon4o\WhmcsHelpers\LocalAPI;

use Aon4o\WhmcsHelpers\Interfaces\LocalAPI;

class Affiliates extends LocalAPI
{
    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function activate(int $userid): array
    {
        return self::call('AffiliateActivate', self::payload(['userid' => $userid]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getAffiliates(
        null|int $limitstart = null,
        null|int $limitnum = null,
        null|int $userid = null,
        null|int $visitors = null,
        null|string $paytype = null,
        null|float $payamount = null,
        null|int $onetime = null,
        null|float $balance = null,
        null|float $withdrawn = null,
    ): array {
        return self::call('GetAffiliates', self::payload([
            'limitstart' => $limitstart, 'limitnum' => $limitnum, 'userid' => $userid, 'visitors' => $visitors,
            'paytype' => $paytype, 'payamount' => $payamount, 'onetime' => $onetime, 'balance' => $balance,
            'withdrawn' => $withdrawn,
        ]));
    }
}
