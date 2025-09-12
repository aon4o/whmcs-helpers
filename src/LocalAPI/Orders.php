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
            'orderid' => $order_id,
            'serverid' => $server_id,
            'serviceusername' => $service_username,
            'servicepassword' => $service_password,
            'registrar' => $registrar,
            'sendregistrar' => $send_registrar,
            'autosetup' => $auto_setup,
            'sendemail' => $send_email,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function addOrder(
        int $client_id,
        string $payment_method,
        null|string $product_id = null,
        null|string $quantity = null,
        null|string $domain = null,
        null|string $billing_cycle = null,
        null|string $domain_type = null,
        null|string $registration_period = null,
        null|string $idn_language = null,
        null|string $epp_code = null,
        null|string $nameserver1 = null,
        null|string $nameserver2 = null,
        null|string $nameserver3 = null,
        null|string $nameserver4 = null,
        null|string $nameserver5 = null,
        null|string $custom_fields = null,
        null|string $config_options = null,
        null|string $price_override = null,
        null|string $promo_code = null,
        null|bool $promo_override = null,
        null|int $affiliate_id = null,
        null|bool $no_invoice = null,
        null|bool $no_invoice_email = null,
        null|bool $no_email = null,
        null|string $addons = null,
        null|string $addons_quantity = null,
        null|string $hostname = null,
        null|string $ns1prefix = null,
        null|string $ns2prefix = null,
        null|string $root_password = null,
        null|int $contact_id = null,
        null|string $dns_management = null,
        null|string $domain_fields = null,
        null|string $email_forwarding = null,
        null|string $id_protection = null,
        null|string $domain_price_override = null,
        null|string $domain_renew_override = null,
        null|array $domain_renewals = null,
        null|string $client_ip = null,
        null|int $addon_id = null,
        null|int $addon_id_quantity = null,
        null|int $service_id = null,
        null|string $addon_ids = null,
        null|string $addon_ids_quantity = null,
        null|string $service_ids = null,
        null|string $service_renewals = null,
        null|string $addon_renewals = null,
    ): array {
        return self::call('AddOrder', self::payload([
            'clientid' => $client_id,
            'paymentmethod' => $payment_method,
            'pid' => $product_id,
            'qty' => $quantity,
            'domain' => $domain,
            'billingcycle' => $billing_cycle,
            'domaintype' => $domain_type,
            'regperiod' => $registration_period,
            'idnlanguage' => $idn_language,
            'eppcode' => $epp_code,
            'nameserver1' => $nameserver1,
            'nameserver2' => $nameserver2,
            'nameserver3' => $nameserver3,
            'nameserver4' => $nameserver4,
            'nameserver5' => $nameserver5,
            'customfields' => $custom_fields,
            'configoptions' => $config_options,
            'priceoverride' => $price_override,
            'promocode' => $promo_code,
            'promooverride' => $promo_override,
            'affid' => $affiliate_id,
            'noinvoice' => $no_invoice,
            'noinvoiceemail' => $no_invoice_email,
            'noemail' => $no_email,
            'addons' => $addons,
            'addonsqty' => $addons_quantity,
            'hostname' => $hostname,
            'ns1prefix' => $ns1prefix,
            'ns2prefix' => $ns2prefix,
            'rootpw' => $root_password,
            'contactid' => $contact_id,
            'dnsmanagement' => $dns_management,
            'domainfields' => $domain_fields,
            'emailforwarding' => $email_forwarding,
            'idprotection' => $id_protection,
            'domainpriceoverride' => $domain_price_override,
            'domainrenewoverride' => $domain_renew_override,
            'domainrenewals' => $domain_renewals,
            'clientip' => $client_ip,
            'addonid' => $addon_id,
            'addonidqty' => $addon_id_quantity,
            'serviceid' => $service_id,
            'addonids' => $addon_ids,
            'addonidsqty' => $addon_ids_quantity,
            'serviceids' => $service_ids,
            'servicerenewals' => $service_renewals,
            'addonrenewals' => $addon_renewals,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function cancelOrder(int $order_id, null|bool $cancel_sub = null, null|bool $no_email = null): array
    {
        return self::call('CancelOrder', self::payload([
            'orderid' => $order_id,
            'cancelsub' => $cancel_sub,
            'noemail' => $no_email,
        ]));
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
            'limitstart' => $limit_start,
            'limitnum' => $limit_num,
            'id' => $id,
            'userid' => $user_id,
            'requestor_id' => $requestor_id,
            'status' => $status,
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
    public function getProducts(
        null|int $product_id = null,
        null|int $group_id = null,
        null|string $module_name = null,
    ): array {
        return self::call('GetProducts', self::payload([
            'pid' => $product_id,
            'gid' => $group_id,
            'module' => $module_name,
        ]));
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
