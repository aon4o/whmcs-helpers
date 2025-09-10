<?php

namespace Aon4o\WhmcsHelpers\LocalAPI;

use Aon4o\WhmcsHelpers\Interfaces\LocalAPI;

class Service extends LocalAPI
{
    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function moduleChangePackage(int $serviceid): array
    {
        return self::call('ModuleChangePackage', self::payload(['serviceid' => $serviceid]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function moduleChangePw(int $serviceid, null|string $servicepassword = null): array
    {
        return self::call('ModuleChangePw',
            self::payload(['serviceid' => $serviceid, 'servicepassword' => $servicepassword]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function moduleCreate(int $serviceid): array
    {
        return self::call('ModuleCreate', self::payload(['serviceid' => $serviceid]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function moduleCustom(int $serviceid, string $func_name): array
    {
        return self::call('ModuleCustom', self::payload(['serviceid' => $serviceid, 'func_name' => $func_name]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function moduleSuspend(int $serviceid, null|string $suspendreason = null): array
    {
        return self::call('ModuleSuspend',
            self::payload(['serviceid' => $serviceid, 'suspendreason' => $suspendreason]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function moduleTerminate(int $serviceid): array
    {
        return self::call('ModuleTerminate', self::payload(['serviceid' => $serviceid]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function moduleUnsuspend(int $serviceid): array
    {
        return self::call('ModuleUnsuspend', self::payload(['serviceid' => $serviceid]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updateClientProduct(
        int $serviceid,
        null|int $pid = null,
        null|int $serverid = null,
        null|string $regdate = null,
        null|string $nextduedate = null,
        null|string $terminationdate = null,
        null|string $domain = null,
        null|float $firstpaymentamount = null,
        null|float $recurringamount = null,
        null|string $paymentmethod = null,
        null|string $billingcycle = null,
        null|string $subscriptionid = null,
        null|string $status = null,
        null|string $notes = null,
        null|string $serviceusername = null,
        null|string $servicepassword = null,
        null|string $overideautosuspend = null,
        null|string $overidesuspenduntil = null,
        null|string $ns1 = null,
        null|string $ns2 = null,
        null|string $dedicatedip = null,
        null|string $assignedips = null,
        null|int $diskusage = null,
        null|int $disklimit = null,
        null|int $bwusage = null,
        null|int $bwlimit = null,
        null|string $suspendreason = null,
        null|int $promoid = null,
        null|array $unset = null,
        null|bool $autorecalc = null,
        null|string $customfields = null,
        null|string $configoptions = null,
    ): array {
        return self::call('UpdateClientProduct', self::payload([
            'serviceid' => $serviceid, 'pid' => $pid, 'serverid' => $serverid, 'regdate' => $regdate,
            'nextduedate' => $nextduedate, 'terminationdate' => $terminationdate, 'domain' => $domain,
            'firstpaymentamount' => $firstpaymentamount, 'recurringamount' => $recurringamount,
            'paymentmethod' => $paymentmethod, 'billingcycle' => $billingcycle, 'subscriptionid' => $subscriptionid,
            'status' => $status, 'notes' => $notes, 'serviceusername' => $serviceusername,
            'servicepassword' => $servicepassword, 'overideautosuspend' => $overideautosuspend,
            'overidesuspenduntil' => $overidesuspenduntil, 'ns1' => $ns1, 'ns2' => $ns2, 'dedicatedip' => $dedicatedip,
            'assignedips' => $assignedips, 'diskusage' => $diskusage, 'disklimit' => $disklimit, 'bwusage' => $bwusage,
            'bwlimit' => $bwlimit, 'suspendreason' => $suspendreason, 'promoid' => $promoid, 'unset' => $unset,
            'autorecalc' => $autorecalc, 'customfields' => $customfields, 'configoptions' => $configoptions,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function upgradeProduct(
        int $serviceid,
        null|bool $calconly = null,
        string $paymentmethod,
        string $type,
        null|int $newproductid = null,
        null|string $newproductbillingcycle = null,
        null|string $promocode = null,
        null|array $configoptions = null,
    ): array {
        return self::call('UpgradeProduct', self::payload([
            'serviceid' => $serviceid, 'calconly' => $calconly, 'paymentmethod' => $paymentmethod, 'type' => $type,
            'newproductid' => $newproductid, 'newproductbillingcycle' => $newproductbillingcycle,
            'promocode' => $promocode, 'configoptions' => $configoptions,
        ]));
    }
}
