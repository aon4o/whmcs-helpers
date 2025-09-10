<?php

namespace Aon4o\WhmcsHelpers\LocalAPI;

use Aon4o\WhmcsHelpers\Interfaces\LocalAPI;

class Orders extends LocalAPI
{
    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function acceptOrder(
        int $orderid,
        null|int $serverid = null,
        null|string $serviceusername = null,
        null|string $servicepassword = null,
        null|string $registrar = null,
        null|bool $sendregistrar = null,
        null|bool $autosetup = null,
        null|bool $sendemail = null,
    ): array {
        return self::call('AcceptOrder', self::payload([
            'orderid' => $orderid, 'serverid' => $serverid, 'serviceusername' => $serviceusername,
            'servicepassword' => $servicepassword, 'registrar' => $registrar, 'sendregistrar' => $sendregistrar,
            'autosetup' => $autosetup, 'sendemail' => $sendemail,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function addOrder(
        int $clientid,
        string $paymentmethod,
        null|string $pid = null,
        null|string $qty = null,
        null|string $domain = null,
        null|string $billingcycle = null,
        null|string $domaintype = null,
        null|string $regperiod = null,
        null|string $idnlanguage = null,
        null|string $eppcode = null,
        null|string $nameserver1 = null,
        null|string $nameserver2 = null,
        null|string $nameserver3 = null,
        null|string $nameserver4 = null,
        null|string $nameserver5 = null,
        null|string $customfields = null,
        null|string $configoptions = null,
        null|string $priceoverride = null,
        null|string $promocode = null,
        null|bool $promooverride = null,
        null|int $affid = null,
        null|bool $noinvoice = null,
        null|bool $noinvoiceemail = null,
        null|bool $noemail = null,
        null|string $addons = null,
        null|string $addonsqty = null,
        null|string $hostname = null,
        null|string $ns1prefix = null,
        null|string $ns2prefix = null,
        null|string $rootpw = null,
        null|int $contactid = null,
        null|string $dnsmanagement = null,
        null|string $domainfields = null,
        null|string $emailforwarding = null,
        null|string $idprotection = null,
        null|string $domainpriceoverride = null,
        null|string $domainrenewoverride = null,
        null|array $domainrenewals = null,
        null|string $clientip = null,
        null|int $addonid = null,
        null|int $addonidqty = null,
        null|int $serviceid = null,
        null|string $addonids = null,
        null|string $addonidsqty = null,
        null|string $serviceids = null,
        null|string $servicerenewals = null,
        null|string $addonrenewals = null,
    ): array {
        return self::call('AddOrder', self::payload([
            'clientid' => $clientid, 'paymentmethod' => $paymentmethod, 'pid' => $pid, 'qty' => $qty,
            'domain' => $domain, 'billingcycle' => $billingcycle, 'domaintype' => $domaintype,
            'regperiod' => $regperiod, 'idnlanguage' => $idnlanguage, 'eppcode' => $eppcode,
            'nameserver1' => $nameserver1, 'nameserver2' => $nameserver2, 'nameserver3' => $nameserver3,
            'nameserver4' => $nameserver4, 'nameserver5' => $nameserver5, 'customfields' => $customfields,
            'configoptions' => $configoptions, 'priceoverride' => $priceoverride, 'promocode' => $promocode,
            'promooverride' => $promooverride, 'affid' => $affid, 'noinvoice' => $noinvoice,
            'noinvoiceemail' => $noinvoiceemail, 'noemail' => $noemail, 'addons' => $addons, 'addonsqty' => $addonsqty,
            'hostname' => $hostname, 'ns1prefix' => $ns1prefix, 'ns2prefix' => $ns2prefix, 'rootpw' => $rootpw,
            'contactid' => $contactid, 'dnsmanagement' => $dnsmanagement, 'domainfields' => $domainfields,
            'emailforwarding' => $emailforwarding, 'idprotection' => $idprotection,
            'domainpriceoverride' => $domainpriceoverride, 'domainrenewoverride' => $domainrenewoverride,
            'domainrenewals' => $domainrenewals, 'clientip' => $clientip, 'addonid' => $addonid,
            'addonidqty' => $addonidqty, 'serviceid' => $serviceid, 'addonids' => $addonids,
            'addonidsqty' => $addonidsqty, 'serviceids' => $serviceids, 'servicerenewals' => $servicerenewals,
            'addonrenewals' => $addonrenewals,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function cancelOrder(int $orderid, null|bool $cancelsub = null, null|bool $noemail = null): array
    {
        return self::call('CancelOrder',
            self::payload(['orderid' => $orderid, 'cancelsub' => $cancelsub, 'noemail' => $noemail]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function deleteOrder(int $orderid): array
    {
        return self::call('DeleteOrder', self::payload(['orderid' => $orderid]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function fraudOrder(int $orderid, null|bool $cancelsub = null): array
    {
        return self::call('FraudOrder', self::payload(['orderid' => $orderid, 'cancelsub' => $cancelsub]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getOrders(
        null|int $limitstart = null,
        null|int $limitnum = null,
        null|int $id = null,
        null|int $userid = null,
        null|int $requestor_id = null,
        null|string $status = null,
    ): array {
        return self::call('GetOrders', self::payload([
            'limitstart' => $limitstart, 'limitnum' => $limitnum, 'id' => $id, 'userid' => $userid,
            'requestor_id' => $requestor_id, 'status' => $status,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getOrderStatuses(): array
    {
        return self::call('GetOrderStatuses', self::payload([]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getProducts(null|int $pid = null, null|int $gid = null, null|string $module = null): array
    {
        return self::call('GetProducts', self::payload(['pid' => $pid, 'gid' => $gid, 'module' => $module]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getPromotions(null|string $code = null): array
    {
        return self::call('GetPromotions', self::payload(['code' => $code]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function fraudCheck(int $orderid, null|string $ipaddress = null): array
    {
        return self::call('OrderFraudCheck', self::payload(['orderid' => $orderid, 'ipaddress' => $ipaddress]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function pendingOrder(int $orderid): array
    {
        return self::call('PendingOrder', self::payload(['orderid' => $orderid]));
    }
}
