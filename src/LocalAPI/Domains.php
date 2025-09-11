<?php

namespace Aon4o\WhmcsHelpers\LocalAPI;

use Aon4o\WhmcsHelpers\Interfaces\LocalAPI;

class Domains extends LocalAPI
{
    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function createOrUpdateTLD(
        string $extension,
        null|bool $id_protection = null,
        null|bool $dns_management = null,
        null|bool $email_forwarding = null,
        null|bool $epp_required = null,
        null|string $auto_registrar = null,
        null|string $group = null,
        null|string $currency_code = null,
        null|int $grace_period_days = null,
        null|float $grace_period_fee = null,
        null|int $redemption_period_days = null,
        null|float $redemption_period_fee = null,
        null|array $register = null,
        null|array $renew = null,
        null|array $transfer = null,
        null|string $display_after = null,
    ): array {
        return self::call('CreateOrUpdateTLD', self::payload([
            'extension' => $extension,
            'id_protection' => $id_protection,
            'dns_management' => $dns_management,
            'email_forwarding' => $email_forwarding,
            'epp_required' => $epp_required,
            'auto_registrar' => $auto_registrar,
            'group' => $group,
            'currency_code' => $currency_code,
            'grace_period_days' => $grace_period_days,
            'grace_period_fee' => $grace_period_fee,
            'redemption_period_days' => $redemption_period_days,
            'redemption_period_fee' => $redemption_period_fee,
            'register' => $register,
            'renew' => $renew,
            'transfer' => $transfer,
            'display_after' => $display_after,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getLockingStatus(int $domain_id): array
    {
        return self::call('DomainGetLockingStatus', self::payload(['domainid' => $domain_id]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getNameservers(int $domain_id): array
    {
        return self::call('DomainGetNameservers', self::payload(['domainid' => $domain_id]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getWhoisInfo(int $domain_id): array
    {
        return self::call('DomainGetWhoisInfo', self::payload(['domainid' => $domain_id]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function register(
        null|int $domain_id = null,
        null|string $domain = null,
        null|string $idn_language = null,
    ): array {
        return self::call('DomainRegister',
            self::payload(['domainid' => $domain_id, 'domain' => $domain, 'idnlanguage' => $idn_language]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function release(null|int $domain_id = null, null|string $domain = null, string $new_tag): array
    {
        return self::call('DomainRelease', self::payload([
            'domainid' => $domain_id,
            'domain' => $domain,
            'newtag' => $new_tag,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function renew(
        null|int $domain_id = null,
        null|string $domain = null,
        null|int $registration_period = null,
    ): array {
        return self::call('DomainRenew', self::payload([
            'domainid' => $domain_id,
            'domain' => $domain,
            'regperiod' => $registration_period,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function requestEPP(int $domain_id): array
    {
        return self::call('DomainRequestEPP', self::payload(['domainid' => $domain_id]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function toggleIdProtect(int $domain_id, null|bool $id_protect = null): array
    {
        return self::call('DomainToggleIdProtect', self::payload([
            'domainid' => $domain_id,
            'idprotect' => $id_protect,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function transfer(null|int $domain_id = null, null|string $domain = null, null|int $epp_code = null): array
    {
        return self::call('DomainTransfer', self::payload([
            'domainid' => $domain_id,
            'domain' => $domain,
            'eppcode' => $epp_code,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updateLockingStatus(int $domain_id, null|bool $lock_status = null): array
    {
        return self::call('DomainUpdateLockingStatus', self::payload([
            'domainid' => $domain_id,
            'lockstatus' => $lock_status,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updateNameservers(
        null|int $domain_id = null,
        null|string $domain = null,
        string $ns1,
        string $ns2,
        null|string $ns3 = null,
        null|string $ns4 = null,
        null|string $ns5 = null,
    ): array {
        return self::call('DomainUpdateNameservers', self::payload([
            'domainid' => $domain_id,
            'domain' => $domain,
            'ns1' => $ns1,
            'ns2' => $ns2,
            'ns3' => $ns3,
            'ns4' => $ns4,
            'ns5' => $ns5,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updateWhoisInfo(int $domain_id, string $xml): array
    {
        return self::call('DomainUpdateWhoisInfo', self::payload(['domainid' => $domain_id, 'xml' => $xml]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function whois(string $domain): array
    {
        return self::call('DomainWhois', self::payload(['domain' => $domain]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getRegistrars(): array
    {
        return self::call('GetRegistrars', self::payload([]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getTLDPricing(null|int $currency_id = null, null|int $client_id = null): array
    {
        return self::call('GetTLDPricing', self::payload(['currencyid' => $currency_id, 'clientid' => $client_id]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updateClientDomain(
        int $domain_id,
        null|bool $dns_management = null,
        null|bool $email_forwarding = null,
        null|bool $id_protection = null,
        null|bool $do_not_renew = null,
        null|string $type = null,
        null|string $reg_date = null,
        null|string $next_due_date = null,
        null|string $expiry_date = null,
        null|string $domain = null,
        null|float $first_payment_amount = null,
        null|float $recurring_amount = null,
        null|string $registrar = null,
        null|int $reg_period = null,
        null|string $payment_method = null,
        null|string $subscription_id = null,
        null|string $status = null,
        null|string $notes = null,
        null|int $promo_id = null,
        null|bool $auto_recalc = null,
        null|bool $update_ns = null,
        null|string $ns1 = null,
        null|string $ns2 = null,
        null|string $ns3 = null,
        null|string $ns4 = null,
        null|string $ns5 = null,
    ): array {
        return self::call('UpdateClientDomain', self::payload([
            'domainid' => $domain_id,
            'dnsmanagement' => $dns_management,
            'emailforwarding' => $email_forwarding,
            'idprotection' => $id_protection,
            'donotrenew' => $do_not_renew,
            'type' => $type,
            'regdate' => $reg_date,
            'nextduedate' => $next_due_date,
            'expirydate' => $expiry_date,
            'domain' => $domain,
            'firstpaymentamount' => $first_payment_amount,
            'recurringamount' => $recurring_amount,
            'registrar' => $registrar,
            'regperiod' => $reg_period,
            'paymentmethod' => $payment_method,
            'subscriptionid' => $subscription_id,
            'status' => $status,
            'notes' => $notes,
            'promoid' => $promo_id,
            'autorecalc' => $auto_recalc,
            'updatens' => $update_ns,
            'ns1' => $ns1,
            'ns2' => $ns2,
            'ns3' => $ns3,
            'ns4' => $ns4,
            'ns5' => $ns5,
        ]));
    }
}
