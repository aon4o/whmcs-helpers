<?php

namespace Aon4o\WhmcsHelpers\LocalAPI;

use Aon4o\WhmcsHelpers\Interfaces\LocalAPI;

class Affiliates extends LocalAPI
{
    /**
     * @link https://developers.whmcs.com/api-reference/affiliateactivate/
     */
    public function activate(int $user_id): array
    {
        return self::call('AffiliateActivate', self::payload(['userid' => $user_id]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/getaffiliates/
     */
    public function getAffiliates(
        null|int $limit_start = null,
        null|int $limit_num = null,
        null|int $user_id = null,
        null|int $visitors = null,
        null|string $pay_type = null,
        null|float $pay_amount = null,
        null|int $one_time = null,
        null|float $balance = null,
        null|float $withdrawn = null,
    ): array {
        return self::call('GetAffiliates', self::payload([
            'limitstart' => $limit_start,
            'limitnum' => $limit_num,
            'userid' => $user_id,
            'visitors' => $visitors,
            'paytype' => $pay_type,
            'payamount' => $pay_amount,
            'onetime' => $one_time,
            'balance' => $balance,
            'withdrawn' => $withdrawn,
        ]));
    }
}
