<?php

namespace Aon4o\WhmcsHelpers\LocalAPI;

use Aon4o\WhmcsHelpers\Interfaces\LocalAPI;

class Client extends LocalAPI
{
    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function addClient(
        null|int $owner_user_id = null,
        string $firstname,
        string $lastname,
        null|string $companyname = null,
        string $email,
        string $address1,
        null|string $address2 = null,
        string $city,
        string $state,
        string $postcode,
        string $country,
        string $phonenumber,
        null|string $tax_id = null,
        null|string $password2 = null,
        null|int $securityqid = null,
        null|string $securityqans = null,
        null|int $currency = null,
        null|int $groupid = null,
        null|string $customfields = null,
        null|string $language = null,
        null|string $clientip = null,
        null|string $notes = null,
        null|bool $marketingoptin = null,
        null|bool $noemail = null,
        null|bool $skipvalidation = null,
        null|string $__cardtype__ = null,
        null|string $__cardnum__ = null,
        null|string $__expdate__ = null,
        null|string $__startdate__ = null,
        null|string $__issuenumber__ = null,
        null|string $__cvv__ = null,
    ): array {
        return self::call('AddClient', self::payload([
            'owner_user_id' => $owner_user_id, 'firstname' => $firstname, 'lastname' => $lastname,
            'companyname' => $companyname, 'email' => $email, 'address1' => $address1, 'address2' => $address2,
            'city' => $city, 'state' => $state, 'postcode' => $postcode, 'country' => $country,
            'phonenumber' => $phonenumber, 'tax_id' => $tax_id, 'password2' => $password2,
            'securityqid' => $securityqid, 'securityqans' => $securityqans, 'currency' => $currency,
            'groupid' => $groupid, 'customfields' => $customfields, 'language' => $language, 'clientip' => $clientip,
            'notes' => $notes, 'marketingoptin' => $marketingoptin, 'noemail' => $noemail,
            'skipvalidation' => $skipvalidation, '~~cardtype~~' => $__cardtype__, '~~cardnum~~' => $__cardnum__,
            '~~expdate~~' => $__expdate__, '~~startdate~~' => $__startdate__, '~~issuenumber~~' => $__issuenumber__,
            '~~cvv~~' => $__cvv__,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function addContact(
        int $clientid,
        null|string $firstname = null,
        null|string $lastname = null,
        null|string $companyname = null,
        null|string $email = null,
        null|string $address1 = null,
        null|string $address2 = null,
        null|string $city = null,
        null|string $state = null,
        null|string $postcode = null,
        null|string $country = null,
        null|string $phonenumber = null,
        null|string $tax_id = null,
        null|bool $email_preferences_general_ = null,
        null|bool $email_preferences_product_ = null,
        null|bool $email_preferences_domain_ = null,
        null|bool $email_preferences_invoice_ = null,
        null|bool $email_preferences_support_ = null,
        null|bool $email_preferences_affiliate_ = null,
    ): array {
        return self::call('AddContact', self::payload([
            'clientid' => $clientid, 'firstname' => $firstname, 'lastname' => $lastname, 'companyname' => $companyname,
            'email' => $email, 'address1' => $address1, 'address2' => $address2, 'city' => $city, 'state' => $state,
            'postcode' => $postcode, 'country' => $country, 'phonenumber' => $phonenumber, 'tax_id' => $tax_id,
            'email_preferences[general]' => $email_preferences_general_,
            'email_preferences[product]' => $email_preferences_product_,
            'email_preferences[domain]' => $email_preferences_domain_,
            'email_preferences[invoice]' => $email_preferences_invoice_,
            'email_preferences[support]' => $email_preferences_support_,
            'email_preferences[affiliate]' => $email_preferences_affiliate_,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function closeClient(int $clientid): array
    {
        return self::call('CloseClient', self::payload(['clientid' => $clientid]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function deleteClient(
        int $clientid,
        null|bool $deleteusers = null,
        null|bool $deletetransactions = null,
    ): array {
        return self::call('DeleteClient', self::payload([
            'clientid' => $clientid, 'deleteusers' => $deleteusers, 'deletetransactions' => $deletetransactions,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function deleteContact(int $contactid): array
    {
        return self::call('DeleteContact', self::payload(['contactid' => $contactid]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getCancelledPackages(null|int $limitstart = null, null|int $limitnum = null): array
    {
        return self::call('GetCancelledPackages',
            self::payload(['limitstart' => $limitstart, 'limitnum' => $limitnum]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getClientGroups(): array
    {
        return self::call('GetClientGroups', self::payload([]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getClientPassword(null|int $userid = null, null|string $email = null): array
    {
        return self::call('GetClientPassword', self::payload(['userid' => $userid, 'email' => $email]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getClients(
        null|int $limitstart = null,
        null|int $limitnum = null,
        null|string $sorting = null,
        null|string $status = null,
        null|string $search = null,
        null|string $orderby = null,
    ): array {
        return self::call('GetClients', self::payload([
            'limitstart' => $limitstart, 'limitnum' => $limitnum, 'sorting' => $sorting, 'status' => $status,
            'search' => $search, 'orderby' => $orderby,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getClientsAddons(
        null|int $serviceid = null,
        null|int $clientid = null,
        null|int $addonid = null,
    ): array {
        return self::call('GetClientsAddons',
            self::payload(['serviceid' => $serviceid, 'clientid' => $clientid, 'addonid' => $addonid]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getClientsDetails(
        null|int $clientid = null,
        null|string $email = null,
        null|bool $stats = null,
    ): array {
        return self::call('GetClientsDetails',
            self::payload(['clientid' => $clientid, 'email' => $email, 'stats' => $stats]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getClientsDomains(
        null|int $limitstart = null,
        null|int $limitnum = null,
        null|int $clientid = null,
        null|int $domainid = null,
        null|string $domain = null,
    ): array {
        return self::call('GetClientsDomains', self::payload([
            'limitstart' => $limitstart, 'limitnum' => $limitnum, 'clientid' => $clientid, 'domainid' => $domainid,
            'domain' => $domain,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getClientsProducts(
        null|int $limitstart = null,
        null|int $limitnum = null,
        null|int $clientid = null,
        null|int $serviceid = null,
        null|int $pid = null,
        null|string $domain = null,
        null|string $username2 = null,
    ): array {
        return self::call('GetClientsProducts', self::payload([
            'limitstart' => $limitstart, 'limitnum' => $limitnum, 'clientid' => $clientid, 'serviceid' => $serviceid,
            'pid' => $pid, 'domain' => $domain, 'username2' => $username2,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getContacts(
        null|int $limitstart = null,
        null|int $limitnum = null,
        null|int $userid = null,
        null|string $firstname = null,
        null|string $lastname = null,
        null|string $companyname = null,
        null|string $email = null,
        null|string $address1 = null,
        null|string $address2 = null,
        null|string $city = null,
        null|string $state = null,
        null|string $postcode = null,
        null|string $country = null,
        null|string $phonenumber = null,
    ): array {
        return self::call('GetContacts', self::payload([
            'limitstart' => $limitstart, 'limitnum' => $limitnum, 'userid' => $userid, 'firstname' => $firstname,
            'lastname' => $lastname, 'companyname' => $companyname, 'email' => $email, 'address1' => $address1,
            'address2' => $address2, 'city' => $city, 'state' => $state, 'postcode' => $postcode, 'country' => $country,
            'phonenumber' => $phonenumber,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getEmails(
        int $clientid,
        null|int $limitstart = null,
        null|int $limitnum = null,
        null|string $date = null,
        null|string $subject = null,
    ): array {
        return self::call('GetEmails', self::payload([
            'clientid' => $clientid, 'limitstart' => $limitstart, 'limitnum' => $limitnum, 'date' => $date,
            'subject' => $subject,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updateClient(
        null|int $clientid = null,
        null|string $clientemail = null,
        null|string $firstname = null,
        null|string $lastname = null,
        null|string $companyname = null,
        null|string $email = null,
        null|string $address1 = null,
        null|string $address2 = null,
        null|string $city = null,
        null|string $state = null,
        null|string $postcode = null,
        null|string $country = null,
        null|string $phonenumber = null,
        null|string $tax_id = null,
        null|string $__cardtype__ = null,
        null|string $__cardnum__ = null,
        null|string $__expdate__ = null,
        null|string $__startdate__ = null,
        null|string $__issuenumber__ = null,
        null|string $__cvv__ = null,
        null|string $__bankcode__ = null,
        null|string $__bankacct__ = null,
        null|int $currency = null,
        null|int $groupid = null,
        null|string $customfields = null,
        null|string $language = null,
        null|string $clientip = null,
        null|string $notes = null,
        null|string $status = null,
        null|string $paymentmethod = null,
        null|bool $email_preferences_general_ = null,
        null|bool $email_preferences_product_ = null,
        null|bool $email_preferences_domain_ = null,
        null|bool $email_preferences_invoice_ = null,
        null|bool $email_preferences_support_ = null,
        null|bool $email_preferences_affiliate_ = null,
        null|bool $marketingoptin = null,
        null|bool $clearcreditcard = null,
        null|bool $skipvalidation = null,
        null|bool $latefeeoveride = null,
        null|bool $overideduenotices = null,
        null|bool $taxexempt = null,
        null|bool $separateinvoices = null,
        null|bool $disableautocc = null,
        null|bool $overrideautoclose = null,
    ): array {
        return self::call('UpdateClient', self::payload([
            'clientid' => $clientid, 'clientemail' => $clientemail, 'firstname' => $firstname, 'lastname' => $lastname,
            'companyname' => $companyname, 'email' => $email, 'address1' => $address1, 'address2' => $address2,
            'city' => $city, 'state' => $state, 'postcode' => $postcode, 'country' => $country,
            'phonenumber' => $phonenumber, 'tax_id' => $tax_id, '~~cardtype~~' => $__cardtype__,
            '~~cardnum~~' => $__cardnum__, '~~expdate~~' => $__expdate__, '~~startdate~~' => $__startdate__,
            '~~issuenumber~~' => $__issuenumber__, '~~cvv~~' => $__cvv__, '~~bankcode~~' => $__bankcode__,
            '~~bankacct~~' => $__bankacct__, 'currency' => $currency, 'groupid' => $groupid,
            'customfields' => $customfields, 'language' => $language, 'clientip' => $clientip, 'notes' => $notes,
            'status' => $status, 'paymentmethod' => $paymentmethod,
            'email_preferences[general]' => $email_preferences_general_,
            'email_preferences[product]' => $email_preferences_product_,
            'email_preferences[domain]' => $email_preferences_domain_,
            'email_preferences[invoice]' => $email_preferences_invoice_,
            'email_preferences[support]' => $email_preferences_support_,
            'email_preferences[affiliate]' => $email_preferences_affiliate_, 'marketingoptin' => $marketingoptin,
            'clearcreditcard' => $clearcreditcard, 'skipvalidation' => $skipvalidation,
            'latefeeoveride' => $latefeeoveride, 'overideduenotices' => $overideduenotices, 'taxexempt' => $taxexempt,
            'separateinvoices' => $separateinvoices, 'disableautocc' => $disableautocc,
            'overrideautoclose' => $overrideautoclose,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updateContact(
        int $contactid,
        null|string $firstname = null,
        null|string $lastname = null,
        null|string $companyname = null,
        null|string $email = null,
        null|string $address1 = null,
        null|string $address2 = null,
        null|string $city = null,
        null|string $state = null,
        null|string $postcode = null,
        null|string $country = null,
        null|string $phonenumber = null,
        null|bool $email_preferences_general_ = null,
        null|bool $email_preferences_product_ = null,
        null|bool $email_preferences_domain_ = null,
        null|bool $email_preferences_invoice_ = null,
        null|bool $email_preferences_support_ = null,
        null|bool $email_preferences_affiliate_ = null,
    ): array {
        return self::call('UpdateContact', self::payload([
            'contactid' => $contactid, 'firstname' => $firstname, 'lastname' => $lastname,
            'companyname' => $companyname, 'email' => $email, 'address1' => $address1, 'address2' => $address2,
            'city' => $city, 'state' => $state, 'postcode' => $postcode, 'country' => $country,
            'phonenumber' => $phonenumber, 'email_preferences[general]' => $email_preferences_general_,
            'email_preferences[product]' => $email_preferences_product_,
            'email_preferences[domain]' => $email_preferences_domain_,
            'email_preferences[invoice]' => $email_preferences_invoice_,
            'email_preferences[support]' => $email_preferences_support_,
            'email_preferences[affiliate]' => $email_preferences_affiliate_,
        ]));
    }
}
