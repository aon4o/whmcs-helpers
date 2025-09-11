<?php

namespace Aon4o\WhmcsHelpers\LocalAPI;

use Aon4o\WhmcsHelpers\Interfaces\LocalAPI;

class Service extends LocalAPI
{
    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function moduleChangePackage(int $service_id): array
    {
        return self::call('ModuleChangePackage', self::payload(['serviceid' => $service_id]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function moduleChangePw(int $service_id, null|string $service_password = null): array
    {
        return self::call('ModuleChangePw',
            self::payload(['serviceid' => $service_id, 'servicepassword' => $service_password]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function moduleCreate(int $service_id): array
    {
        return self::call('ModuleCreate', self::payload(['serviceid' => $service_id]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function moduleCustom(int $service_id, string $func_name): array
    {
        return self::call('ModuleCustom', self::payload(['serviceid' => $service_id, 'func_name' => $func_name]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function moduleSuspend(int $service_id, null|string $suspend_reason = null): array
    {
        return self::call('ModuleSuspend',
            self::payload(['serviceid' => $service_id, 'suspendreason' => $suspend_reason]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function moduleTerminate(int $service_id): array
    {
        return self::call('ModuleTerminate', self::payload(['serviceid' => $service_id]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function moduleUnsuspend(int $service_id): array
    {
        return self::call('ModuleUnsuspend', self::payload(['serviceid' => $service_id]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updateClientProduct(
        int $service_id,
        null|int $pid = null,
        null|int $server_id = null,
        null|string $reg_date = null,
        null|string $next_due_date = null,
        null|string $termination_date = null,
        null|string $domain = null,
        null|float $first_payment_amount = null,
        null|float $recurring_amount = null,
        null|string $payment_method = null,
        null|string $billing_cycle = null,
        null|string $subscription_id = null,
        null|string $status = null,
        null|string $notes = null,
        null|string $service_username = null,
        null|string $service_password = null,
        null|string $override_auto_suspend = null,
        null|string $override_suspend_until = null,
        null|string $ns1 = null,
        null|string $ns2 = null,
        null|string $dedicated_ip = null,
        null|string $assigned_ips = null,
        null|int $disk_usage = null,
        null|int $disk_limit = null,
        null|int $bw_usage = null,
        null|int $bw_limit = null,
        null|string $suspend_reason = null,
        null|int $promo_id = null,
        null|array $unset = null,
        null|bool $auto_recalc = null,
        null|string $custom_fields = null,
        null|string $config_options = null,
    ): array {
        return self::call('UpdateClientProduct', self::payload([
            'serviceid' => $service_id, 'pid' => $pid, 'serverid' => $server_id, 'regdate' => $reg_date,
            'nextduedate' => $next_due_date, 'terminationdate' => $termination_date, 'domain' => $domain,
            'firstpaymentamount' => $first_payment_amount, 'recurringamount' => $recurring_amount,
            'paymentmethod' => $payment_method, 'billingcycle' => $billing_cycle, 'subscriptionid' => $subscription_id,
            'status' => $status, 'notes' => $notes, 'serviceusername' => $service_username,
            'servicepassword' => $service_password, 'overideautosuspend' => $override_auto_suspend,
            'overidesuspenduntil' => $override_suspend_until, 'ns1' => $ns1, 'ns2' => $ns2, 'dedicatedip' => $dedicated_ip,
            'assignedips' => $assigned_ips, 'diskusage' => $disk_usage, 'disklimit' => $disk_limit, 'bwusage' => $bw_usage,
            'bwlimit' => $bw_limit, 'suspendreason' => $suspend_reason, 'promoid' => $promo_id, 'unset' => $unset,
            'autorecalc' => $auto_recalc, 'customfields' => $custom_fields, 'configoptions' => $config_options,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function upgradeProduct(
        int $service_id,
        null|bool $calc_only = null,
        string $payment_method,
        string $type,
        null|int $new_product_id = null,
        null|string $new_product_billing_cycle = null,
        null|string $promo_code = null,
        null|array $config_options = null,
    ): array {
        return self::call('UpgradeProduct', self::payload([
            'serviceid' => $service_id, 'calconly' => $calc_only, 'paymentmethod' => $payment_method, 'type' => $type,
            'newproductid' => $new_product_id, 'newproductbillingcycle' => $new_product_billing_cycle,
            'promocode' => $promo_code, 'configoptions' => $config_options,
        ]));
    }
}
