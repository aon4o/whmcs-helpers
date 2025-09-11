<?php

namespace Aon4o\WhmcsHelpers\LocalAPI;

use Aon4o\WhmcsHelpers\Interfaces\LocalAPI;

class Orders extends LocalAPI
{
    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function acceptOrder(
        int $order_id,
        null|int $server_id = null,
        null|string $service_username = null,
        null|string $service_password = null,
        null|string $registrar = null,
        null|bool $send_registrar = null,
        null|bool $auto_setup = null,
        null|bool $send_email = null,
    ): array {
        return self::call('AcceptOrder', self::payload([
            'orderid' => $order_id, 'serverid' => $server_id, 'serviceusername' => $service_username,
            'servicepassword' => $service_password, 'registrar' => $registrar, 'sendregistrar' => $send_registrar,
            'autosetup' => $auto_setup, 'sendemail' => $send_email,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function addOrder(
        int $client_id,
        string $payment_method,
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
            'clientid' => $client_id, 'paymentmethod' => $payment_method, 'pid' => $pid, 'qty' => $qty,
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
    public function cancelOrder(int $order_id, null|bool $cancel_sub = null, null|bool $no_email = null): array
    {
        return self::call('CancelOrder',
            self::payload(['orderid' => $order_id, 'cancelsub' => $cancel_sub, 'noemail' => $no_email]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function deleteOrder(int $order_id): array
    {
        return self::call('DeleteOrder', self::payload(['orderid' => $order_id]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function fraudOrder(int $order_id, null|bool $cancel_sub = null): array
    {
        return self::call('FraudOrder', self::payload(['orderid' => $order_id, 'cancelsub' => $cancel_sub]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getOrders(
        null|int $limit_start = null,
        null|int $limit_num = null,
        null|int $id = null,
        null|int $user_id = null,
        null|int $requestor_id = null,
        null|string $status = null,
    ): array {
        return self::call('GetOrders', self::payload([
            'limitstart' => $limit_start, 'limitnum' => $limit_num, 'id' => $id, 'userid' => $user_id,
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
    public function getProducts(null|int $pid = null, null|int $gid = null, null|string $module_name = null): array
    {
        return self::call('GetProducts', self::payload(['pid' => $pid, 'gid' => $gid, 'module' => $module_name]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getPromotions(null|string $promo_code = null): array
    {
        return self::call('GetPromotions', self::payload(['code' => $promo_code]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function fraudCheck(int $order_id, null|string $ip_address = null): array
    {
        return self::call('OrderFraudCheck', self::payload(['orderid' => $order_id, 'ipaddress' => $ip_address]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function pendingOrder(int $order_id): array
    {
        return self::call('PendingOrder', self::payload(['orderid' => $order_id]));
    }
}
