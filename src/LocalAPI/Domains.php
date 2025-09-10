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
            'extension' => $extension, 'id_protection' => $id_protection, 'dns_management' => $dns_management,
            'email_forwarding' => $email_forwarding, 'epp_required' => $epp_required,
            'auto_registrar' => $auto_registrar, 'group' => $group, 'currency_code' => $currency_code,
            'grace_period_days' => $grace_period_days, 'grace_period_fee' => $grace_period_fee,
            'redemption_period_days' => $redemption_period_days, 'redemption_period_fee' => $redemption_period_fee,
            'register' => $register, 'renew' => $renew, 'transfer' => $transfer, 'display_after' => $display_after,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getLockingStatus(int $domainid): array
    {
        return self::call('DomainGetLockingStatus', self::payload(['domainid' => $domainid]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getNameservers(int $domainid): array
    {
        return self::call('DomainGetNameservers', self::payload(['domainid' => $domainid]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getWhoisInfo(int $domainid): array
    {
        return self::call('DomainGetWhoisInfo', self::payload(['domainid' => $domainid]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function register(
        null|int $domainid = null,
        null|string $domain = null,
        null|string $idnlanguage = null,
    ): array {
        return self::call('DomainRegister',
            self::payload(['domainid' => $domainid, 'domain' => $domain, 'idnlanguage' => $idnlanguage]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function release(null|int $domainid = null, null|string $domain = null, string $newtag): array
    {
        return self::call('DomainRelease',
            self::payload(['domainid' => $domainid, 'domain' => $domain, 'newtag' => $newtag]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function renew(null|int $domainid = null, null|string $domain = null, null|int $regperiod = null): array
    {
        return self::call('DomainRenew',
            self::payload(['domainid' => $domainid, 'domain' => $domain, 'regperiod' => $regperiod]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function requestEPP(int $domainid): array
    {
        return self::call('DomainRequestEPP', self::payload(['domainid' => $domainid]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function toggleIdProtect(int $domainid, null|bool $idprotect = null): array
    {
        return self::call('DomainToggleIdProtect',
            self::payload(['domainid' => $domainid, 'idprotect' => $idprotect]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function transfer(null|int $domainid = null, null|string $domain = null, null|int $eppcode = null): array
    {
        return self::call('DomainTransfer',
            self::payload(['domainid' => $domainid, 'domain' => $domain, 'eppcode' => $eppcode]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updateLockingStatus(int $domainid, null|bool $lockstatus = null): array
    {
        return self::call('DomainUpdateLockingStatus',
            self::payload(['domainid' => $domainid, 'lockstatus' => $lockstatus]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updateNameservers(
        null|int $domainid = null,
        null|string $domain = null,
        string $ns1,
        string $ns2,
        null|string $ns3 = null,
        null|string $ns4 = null,
        null|string $ns5 = null,
    ): array {
        return self::call('DomainUpdateNameservers', self::payload([
            'domainid' => $domainid, 'domain' => $domain, 'ns1' => $ns1, 'ns2' => $ns2, 'ns3' => $ns3, 'ns4' => $ns4,
            'ns5' => $ns5,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updateWhoisInfo(int $domainid, string $xml): array
    {
        return self::call('DomainUpdateWhoisInfo', self::payload(['domainid' => $domainid, 'xml' => $xml]));
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
    public function getTLDPricing(null|int $currencyid = null, null|int $clientid = null): array
    {
        return self::call('GetTLDPricing', self::payload(['currencyid' => $currencyid, 'clientid' => $clientid]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updateClientDomain(
        int $domainid,
        null|bool $dnsmanagement = null,
        null|bool $emailforwarding = null,
        null|bool $idprotection = null,
        null|bool $donotrenew = null,
        null|string $type = null,
        null|string $regdate = null,
        null|string $nextduedate = null,
        null|string $expirydate = null,
        null|string $domain = null,
        null|float $firstpaymentamount = null,
        null|float $recurringamount = null,
        null|string $registrar = null,
        null|int $regperiod = null,
        null|string $paymentmethod = null,
        null|string $subscriptionid = null,
        null|string $status = null,
        null|string $notes = null,
        null|int $promoid = null,
        null|bool $autorecalc = null,
        null|bool $updatens = null,
        null|string $ns1 = null,
        null|string $ns2 = null,
        null|string $ns3 = null,
        null|string $ns4 = null,
        null|string $ns5 = null,
    ): array {
        return self::call('UpdateClientDomain', self::payload([
            'domainid' => $domainid, 'dnsmanagement' => $dnsmanagement, 'emailforwarding' => $emailforwarding,
            'idprotection' => $idprotection, 'donotrenew' => $donotrenew, 'type' => $type, 'regdate' => $regdate,
            'nextduedate' => $nextduedate, 'expirydate' => $expirydate, 'domain' => $domain,
            'firstpaymentamount' => $firstpaymentamount, 'recurringamount' => $recurringamount,
            'registrar' => $registrar, 'regperiod' => $regperiod, 'paymentmethod' => $paymentmethod,
            'subscriptionid' => $subscriptionid, 'status' => $status, 'notes' => $notes, 'promoid' => $promoid,
            'autorecalc' => $autorecalc, 'updatens' => $updatens, 'ns1' => $ns1, 'ns2' => $ns2, 'ns3' => $ns3,
            'ns4' => $ns4, 'ns5' => $ns5,
        ]));
    }
}
