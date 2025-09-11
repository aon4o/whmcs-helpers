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
        string $first_name,
        string $last_name,
        null|string $company_name = null,
        string $email,
        string $address1,
        null|string $address2 = null,
        string $city,
        string $state,
        string $postcode,
        string $country,
        string $phone_number,
        null|string $tax_id = null,
        null|string $password2 = null,
        null|int $security_question_id = null,
        null|string $security_question_answer = null,
        null|int $currency_id = null,
        null|int $group_id = null,
        null|string $custom_fields = null,
        null|string $language = null,
        null|string $client_ip = null,
        null|string $notes = null,
        null|bool $marketing_opt_in = null,
        null|bool $no_email = null,
        null|bool $skip_validation = null,
    ): array {
        return self::call('AddClient', self::payload([
            'owner_user_id' => $owner_user_id,
            'firstname' => $first_name,
            'lastname' => $last_name,
            'companyname' => $company_name,
            'email' => $email,
            'address1' => $address1,
            'address2' => $address2,
            'city' => $city,
            'state' => $state,
            'postcode' => $postcode,
            'country' => $country,
            'phonenumber' => $phone_number,
            'tax_id' => $tax_id,
            'password2' => $password2,
            'securityqid' => $security_question_id,
            'securityqans' => $security_question_answer,
            'currency' => $currency_id,
            'groupid' => $group_id,
            'customfields' => $custom_fields,
            'language' => $language,
            'clientip' => $client_ip,
            'notes' => $notes,
            'marketingoptin' => $marketing_opt_in,
            'noemail' => $no_email,
            'skipvalidation' => $skip_validation,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function addContact(
        int $client_id,
        null|string $first_name = null,
        null|string $last_name = null,
        null|string $company_name = null,
        null|string $email = null,
        null|string $address1 = null,
        null|string $address2 = null,
        null|string $city = null,
        null|string $state = null,
        null|string $postcode = null,
        null|string $country = null,
        null|string $phone_number = null,
        null|string $tax_id = null,
        null|bool $email_preference_general = null,
        null|bool $email_preference_product = null,
        null|bool $email_preference_domain = null,
        null|bool $email_preference_invoice = null,
        null|bool $email_preference_support = null,
        null|bool $email_preference_affiliate = null,
    ): array {
        return self::call('AddContact', self::payload([
            'clientid' => $client_id,
            'firstname' => $first_name,
            'lastname' => $last_name,
            'companyname' => $company_name,
            'email' => $email,
            'address1' => $address1,
            'address2' => $address2,
            'city' => $city,
            'state' => $state,
            'postcode' => $postcode,
            'country' => $country,
            'phonenumber' => $phone_number,
            'tax_id' => $tax_id,
            'email_preferences' => [
                'general' => $email_preference_general,
                'product' => $email_preference_product,
                'domain' => $email_preference_domain,
                'invoice' => $email_preference_invoice,
                'support' => $email_preference_support,
                'affiliate' => $email_preference_affiliate,
            ],
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function closeClient(int $client_id): array
    {
        return self::call('CloseClient', self::payload(['clientid' => $client_id]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function deleteClient(
        int $client_id,
        null|bool $delete_users = null,
        null|bool $delete_transactions = null,
    ): array {
        return self::call('DeleteClient', self::payload([
            'clientid' => $client_id,
            'deleteusers' => $delete_users,
            'deletetransactions' => $delete_transactions,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function deleteContact(int $contact_id): array
    {
        return self::call('DeleteContact', self::payload(['contactid' => $contact_id]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getCancelledPackages(null|int $limit_start = null, null|int $limit_num = null): array
    {
        return self::call('GetCancelledPackages', self::payload([
            'limitstart' => $limit_start,
            'limitnum' => $limit_num,
        ]));
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
    public function getClientPassword(null|int $user_id = null, null|string $email = null): array
    {
        return self::call('GetClientPassword', self::payload(['userid' => $user_id, 'email' => $email]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getClients(
        null|int $limit_start = null,
        null|int $limit_num = null,
        null|string $sorting = null,
        null|string $status = null,
        null|string $search = null,
        null|string $order_by = null,
    ): array {
        return self::call('GetClients', self::payload([
            'limitstart' => $limit_start,
            'limitnum' => $limit_num,
            'sorting' => $sorting,
            'status' => $status,
            'search' => $search,
            'orderby' => $order_by,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getClientsAddons(
        null|int $service_id = null,
        null|int $client_id = null,
        null|int $addon_id = null,
    ): array {
        return self::call('GetClientsAddons', self::payload([
            'serviceid' => $service_id,
            'clientid' => $client_id,
            'addonid' => $addon_id,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getClientsDetails(
        null|int $client_id = null,
        null|string $email = null,
        null|bool $stats = null,
    ): array {
        return self::call('GetClientsDetails', self::payload([
            'clientid' => $client_id,
            'email' => $email,
            'stats' => $stats,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getClientsDomains(
        null|int $limit_start = null,
        null|int $limit_num = null,
        null|int $client_id = null,
        null|int $domain_id = null,
        null|string $domain = null,
    ): array {
        return self::call('GetClientsDomains', self::payload([
            'limitstart' => $limit_start,
            'limitnum' => $limit_num,
            'clientid' => $client_id,
            'domainid' => $domain_id,
            'domain' => $domain,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getClientsProducts(
        null|int $limit_start = null,
        null|int $limit_num = null,
        null|int $client_id = null,
        null|int $service_id = null,
        null|int $pid = null,
        null|string $domain = null,
        null|string $username2 = null,
    ): array {
        return self::call('GetClientsProducts', self::payload([
            'limitstart' => $limit_start,
            'limitnum' => $limit_num,
            'clientid' => $client_id,
            'serviceid' => $service_id,
            'pid' => $pid,
            'domain' => $domain,
            'username2' => $username2,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getContacts(
        null|int $limit_start = null,
        null|int $limit_num = null,
        null|int $user_id = null,
        null|string $first_name = null,
        null|string $last_name = null,
        null|string $company_name = null,
        null|string $email = null,
        null|string $address1 = null,
        null|string $address2 = null,
        null|string $city = null,
        null|string $state = null,
        null|string $postcode = null,
        null|string $country = null,
        null|string $phone_number = null,
    ): array {
        return self::call('GetContacts', self::payload([
            'limitstart' => $limit_start,
            'limitnum' => $limit_num,
            'userid' => $user_id,
            'firstname' => $first_name,
            'lastname' => $last_name,
            'companyname' => $company_name,
            'email' => $email,
            'address1' => $address1,
            'address2' => $address2,
            'city' => $city,
            'state' => $state,
            'postcode' => $postcode,
            'country' => $country,
            'phonenumber' => $phone_number,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getEmails(
        int $client_id,
        null|int $limit_start = null,
        null|int $limit_num = null,
        null|string $date = null,
        null|string $subject = null,
    ): array {
        return self::call('GetEmails', self::payload([
            'clientid' => $client_id,
            'limitstart' => $limit_start,
            'limitnum' => $limit_num,
            'date' => $date,
            'subject' => $subject,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updateClient(
        null|int $client_id = null,
        null|string $client_email = null,
        null|string $first_name = null,
        null|string $last_name = null,
        null|string $company_name = null,
        null|string $email = null,
        null|string $address1 = null,
        null|string $address2 = null,
        null|string $city = null,
        null|string $state = null,
        null|string $postcode = null,
        null|string $country = null,
        null|string $phone_number = null,
        null|string $tax_id = null,
        null|int $currency = null,
        null|int $group_id = null,
        null|string $custom_fields = null,
        null|string $language = null,
        null|string $client_ip = null,
        null|string $notes = null,
        null|string $status = null,
        null|string $payment_method = null,
        null|bool $email_preference_general = null,
        null|bool $email_preference_product = null,
        null|bool $email_preference_domain = null,
        null|bool $email_preference_invoice = null,
        null|bool $email_preference_support = null,
        null|bool $email_preference_affiliate = null,
        null|bool $marketing_opt_in = null,
        null|bool $clear_credit_card = null,
        null|bool $skip_validation = null,
        null|bool $late_fee_overide = null,
        null|bool $override_due_notices = null,
        null|bool $tax_exempt = null,
        null|bool $separate_invoices = null,
        null|bool $disable_auto_cc = null,
        null|bool $override_auto_close = null,
    ): array {
        return self::call('UpdateClient', self::payload([
            'clientid' => $client_id,
            'clientemail' => $client_email,
            'firstname' => $first_name,
            'lastname' => $last_name,
            'companyname' => $company_name,
            'email' => $email,
            'address1' => $address1,
            'address2' => $address2,
            'city' => $city,
            'state' => $state,
            'postcode' => $postcode,
            'country' => $country,
            'phonenumber' => $phone_number,
            'tax_id' => $tax_id,
            'currency' => $currency,
            'groupid' => $group_id,
            'customfields' => $custom_fields,
            'language' => $language,
            'clientip' => $client_ip,
            'notes' => $notes,
            'status' => $status,
            'paymentmethod' => $payment_method,
            'email_preferences' => [
                'general' => $email_preference_general,
                'product' => $email_preference_product,
                'domain' => $email_preference_domain,
                'invoice' => $email_preference_invoice,
                'support' => $email_preference_support,
                'affiliate' => $email_preference_affiliate,
            ],
            'marketingoptin' => $marketing_opt_in,
            'clearcreditcard' => $clear_credit_card,
            'skipvalidation' => $skip_validation,
            'latefeeoveride' => $late_fee_overide,
            'overideduenotices' => $override_due_notices,
            'taxexempt' => $tax_exempt,
            'separateinvoices' => $separate_invoices,
            'disableautocc' => $disable_auto_cc,
            'overrideautoclose' => $override_auto_close,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updateContact(
        int $contact_id,
        null|string $first_name = null,
        null|string $last_name = null,
        null|string $company_name = null,
        null|string $email = null,
        null|string $address1 = null,
        null|string $address2 = null,
        null|string $city = null,
        null|string $state = null,
        null|string $postcode = null,
        null|string $country = null,
        null|string $phone_number = null,
        null|bool $email_preference_general = null,
        null|bool $email_preference_product = null,
        null|bool $email_preference_domain = null,
        null|bool $email_preference_invoice = null,
        null|bool $email_preference_support = null,
        null|bool $email_preference_affiliate = null,
    ): array {
        return self::call('UpdateContact', self::payload([
            'contactid' => $contact_id,
            'firstname' => $first_name,
            'lastname' => $last_name,
            'companyname' => $company_name,
            'email' => $email,
            'address1' => $address1,
            'address2' => $address2,
            'city' => $city,
            'state' => $state,
            'postcode' => $postcode,
            'country' => $country,
            'phonenumber' => $phone_number,
            'email_preferences' => [
                'general' => $email_preference_general,
                'product' => $email_preference_product,
                'domain' => $email_preference_domain,
                'invoice' => $email_preference_invoice,
                'support' => $email_preference_support,
                'affiliate' => $email_preference_affiliate,
            ],
        ]));
    }
}
