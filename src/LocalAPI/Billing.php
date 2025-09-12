<?php

namespace Aon4o\WhmcsHelpers\LocalAPI;

use Aon4o\WhmcsHelpers\Interfaces\LocalAPI;

class Billing extends LocalAPI
{
    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function acceptQuote(int $quote_id): array
    {
        return self::call('AcceptQuote', self::payload(['quoteid' => $quote_id]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function addBillableItem(
        int $client_id,
        string $description,
        float $amount,
        string $unit,
        null|float $quantity = null,
        null|string $invoice_action = null,
        null|int $recur = null,
        null|string $recur_cycle = null,
        null|int $recur_for = null,
        null|string $due_date = null,
    ): array {
        return self::call('AddBillableItem', self::payload([
            'clientid' => $client_id,
            'description' => $description,
            'amount' => $amount,
            'unit' => $unit,
            'quantity' => $quantity,
            'invoiceaction' => $invoice_action,
            'recur' => $recur,
            'recurcycle' => $recur_cycle,
            'recurfor' => $recur_for,
            'duedate' => $due_date,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function addCredit(
        int $client_id,
        string $description,
        float $amount,
        null|string $date = null,
        null|int $admin_id = null,
        null|string $type = null,
    ): array {
        return self::call('AddCredit', self::payload([
            'clientid' => $client_id,
            'description' => $description,
            'amount' => $amount,
            'date' => $date,
            'adminid' => $admin_id,
            'type' => $type,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function addInvoicePayment(
        int $invoice_id,
        string $trans_id,
        string $gateway,
        string $date,
        null|float $amount = null,
        null|float $fees = null,
        null|bool $no_email = null,
    ): array {
        return self::call('AddInvoicePayment', self::payload([
            'invoiceid' => $invoice_id,
            'transid' => $trans_id,
            'gateway' => $gateway,
            'date' => $date,
            'amount' => $amount,
            'fees' => $fees,
            'noemail' => $no_email,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function addPayMethod(
        int $client_id,
        null|string $type = null,
        null|string $description = null,
        null|string $gateway_module_name = null,
        null|string $card_number = null,
        null|string $card_expiry = null,
        null|string $card_start = null,
        null|int $card_issue_number = null,
        null|string $bank_name = null,
        null|string $bank_account_type = null,
        null|string $bank_code = null,
        null|string $bank_account = null,
        null|bool $set_as_default = null,
    ): array {
        return self::call('AddPayMethod', self::payload([
            'clientid' => $client_id,
            'type' => $type,
            'description' => $description,
            'gateway_module_name' => $gateway_module_name,
            'card_number' => $card_number,
            'card_expiry' => $card_expiry,
            'card_start' => $card_start,
            'card_issue_number' => $card_issue_number,
            'bank_name' => $bank_name,
            'bank_account_type' => $bank_account_type,
            'bank_code' => $bank_code,
            'bank_account' => $bank_account,
            'set_as_default' => $set_as_default,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function addTransaction(
        string $payment_method,
        null|int $user_id = null,
        null|int $invoice_id = null,
        null|string $trans_id = null,
        null|string $date = null,
        null|int $currency_id = null,
        null|string $description = null,
        null|float $amount_in = null,
        null|float $fees = null,
        null|float $amount_out = null,
        null|float $rate = null,
        null|bool $credit = null,
        null|bool $allow_duplicate_trans_id = null,
    ): array {
        return self::call('AddTransaction', self::payload([
            'paymentmethod' => $payment_method,
            'userid' => $user_id,
            'invoiceid' => $invoice_id,
            'transid' => $trans_id,
            'date' => $date,
            'currencyid' => $currency_id,
            'description' => $description,
            'amountin' => $amount_in,
            'fees' => $fees,
            'amountout' => $amount_out,
            'rate' => $rate,
            'credit' => $credit,
            'allowduplicatetransid' => $allow_duplicate_trans_id,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function applyCredit(int $invoice_id, null|float $amount = null, null|bool $no_email = null): array
    {
        return self::call('ApplyCredit', self::payload([
            'invoiceid' => $invoice_id,
            'amount' => $amount,
            'noemail' => $no_email,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function capturePayment(int $invoice_id, null|string $cvv = null): array
    {
        return self::call('CapturePayment', self::payload(['invoiceid' => $invoice_id, 'cvv' => $cvv]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function createInvoice(
        int $user_id,
        null|string $status = null,
        null|bool $draft = null,
        null|bool $send_invoice = null,
        null|string $payment_method = null,
        null|float $tax_rate = null,
        null|float $tax_rate2 = null,
        null|string $date = null,
        null|string $due_date = null,
        null|string $notes = null,
        null|string $item_description_x = null,
        null|float $item_amount_x = null,
        null|bool $item_taxed_x = null,
        null|bool $auto_apply_credit = null,
    ): array {
        return self::call('CreateInvoice', self::payload([
            'userid' => $user_id,
            'status' => $status,
            'draft' => $draft,
            'sendinvoice' => $send_invoice,
            'paymentmethod' => $payment_method,
            'taxrate' => $tax_rate,
            'taxrate2' => $tax_rate2,
            'date' => $date,
            'duedate' => $due_date,
            'notes' => $notes,
            'itemdescriptionx' => $item_description_x,
            'itemamountx' => $item_amount_x,
            'itemtaxedx' => $item_taxed_x,
            'autoapplycredit' => $auto_apply_credit,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function createQuote(
        string $subject,
        string $stage,
        string $valid_until,
        null|string $date_created = null,
        null|array $line_items = null,
        null|string $line_items_x__desc_ = null,
        null|int $lineitems_x__qty_ = null, // TODO
        null|float $lineitems_x__up_ = null,
        null|float $lineitems_x__discount_ = null,
        null|bool $lineitems_x__taxable_ = null,
        null|int $user_id = null,
        null|string $firstname = null,
        null|string $lastname = null,
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
        null|string $proposal = null,
        null|string $customer_notes = null,
        null|string $admin_notes = null,
    ): array {
        return self::call('CreateQuote', self::payload([
            'subject' => $subject,
            'stage' => $stage,
            'validuntil' => $valid_until,
            'datecreated' => $date_created,
            'lineitems' => $line_items,
            'lineitems[x][desc]' => $line_items_x__desc_,
            'lineitems[x][qty]' => $lineitems_x__qty_,
            'lineitems[x][up]' => $lineitems_x__up_,
            'lineitems[x][discount]' => $lineitems_x__discount_,
            'lineitems[x][taxable]' => $lineitems_x__taxable_,
            'userid' => $user_id,
            'firstname' => $firstname,
            'lastname' => $lastname,
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
            'proposal' => $proposal,
            'customernotes' => $customer_notes,
            'adminnotes' => $admin_notes,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function deletePayMethod(int $client_id, int $pay_method_id, null|bool $fail_on_remote_failure = null): array
    {
        return self::call('DeletePayMethod', self::payload([
            'clientid' => $client_id,
            'paymethodid' => $pay_method_id,
            'failonremotefailure' => $fail_on_remote_failure,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function deleteQuote(int $quote_id): array
    {
        return self::call('DeleteQuote', self::payload(['quoteid' => $quote_id]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function genInvoices(
        null|bool $no_emails = null,
        null|int $client_id = null,
        null|string $service_ids = null,
        null|string $domain_ids = null,
        null|string $addon_ids = null,
    ): array {
        return self::call('GenInvoices', self::payload([
            'noemails' => $no_emails,
            'clientid' => $client_id,
            'serviceids' => $service_ids,
            'domainids' => $domain_ids,
            'addonids' => $addon_ids,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getCredits(int $client_id): array
    {
        return self::call('GetCredits', self::payload(['clientid' => $client_id]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getInvoice(int $invoice_id): array
    {
        return self::call('GetInvoice', self::payload(['invoiceid' => $invoice_id]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getInvoices(
        null|int $limit_start = null,
        null|int $limit_num = null,
        null|int $user_id = null,
        null|string $status = null,
        null|string $order_by = null,
        null|string $order = null,
    ): array {
        return self::call('GetInvoices', self::payload([
            'limitstart' => $limit_start,
            'limitnum' => $limit_num,
            'userid' => $user_id,
            'status' => $status,
            'orderby' => $order_by,
            'order' => $order,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getPayMethods(int $client_id, null|int $pay_method_id = null, null|string $type = null): array
    {
        return self::call('GetPayMethods', self::payload([
            'clientid' => $client_id,
            'paymethodid' => $pay_method_id,
            'type' => $type,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getQuotes(
        null|int $limit_start = null,
        null|int $limit_num = null,
        null|int $quote_id = null,
        null|int $user_id = null,
        null|string $subject = null,
        null|string $stage = null,
        null|string $date_created = null,
        null|string $last_modified = null,
        null|string $valid_until = null,
    ): array {
        return self::call('GetQuotes', self::payload([
            'limitstart' => $limit_start,
            'limitnum' => $limit_num,
            'quoteid' => $quote_id,
            'userid' => $user_id,
            'subject' => $subject,
            'stage' => $stage,
            'datecreated' => $date_created,
            'lastmodified' => $last_modified,
            'validuntil' => $valid_until,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getTransactions(
        null|int $invoice_id = null,
        null|int $client_id = null,
        null|string $trans_id = null,
    ): array {
        return self::call('GetTransactions', self::payload([
            'invoiceid' => $invoice_id,
            'clientid' => $client_id,
            'transid' => $trans_id,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function sendQuote(int $quote_id): array
    {
        return self::call('SendQuote', self::payload(['quoteid' => $quote_id]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updateInvoice(
        int $invoice_id,
        null|string $status = null,
        null|string $payment_method = null,
        null|float $tax_rate = null,
        null|float $tax_rate2 = null,
        null|float $credit = null,
        null|string $date = null,
        null|string $due_date = null,
        null|string $date_paid = null,
        null|string $notes = null,
        null|string $item_description = null,
        null|string $item_amount = null,
        null|string $item_taxed = null,
        null|string $new_item_description = null,
        null|string $new_item_amount = null,
        null|string $new_item_taxed = null,
        null|string $delete_line_ids = null,
        null|bool $publish = null,
        null|bool $publish_and_send_email = null,
    ): array {
        return self::call('UpdateInvoice', self::payload([
            'invoiceid' => $invoice_id,
            'status' => $status,
            'paymentmethod' => $payment_method,
            'taxrate' => $tax_rate,
            'taxrate2' => $tax_rate2,
            'credit' => $credit,
            'date' => $date,
            'duedate' => $due_date,
            'datepaid' => $date_paid,
            'notes' => $notes,
            'itemdescription' => $item_description,
            'itemamount' => $item_amount,
            'itemtaxed' => $item_taxed,
            'newitemdescription' => $new_item_description,
            'newitemamount' => $new_item_amount,
            'newitemtaxed' => $new_item_taxed,
            'deletelineids' => $delete_line_ids,
            'publish' => $publish,
            'publishandsendemail' => $publish_and_send_email,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updatePayMethod(
        int $client_id,
        int $pay_method_id,
        null|string $card_number = null,
        null|string $card_expiry = null,
        null|string $card_start = null,
        null|int $card_issue_number = null,
        null|string $bank_name = null,
        null|string $bank_account_type = null,
        null|string $bank_code = null,
        null|string $bank_account = null,
        null|bool $set_as_default = null,
    ): array {
        return self::call('UpdatePayMethod', self::payload([
            'clientid' => $client_id,
            'paymethodid' => $pay_method_id,
            'card_number' => $card_number,
            'card_expiry' => $card_expiry,
            'card_start' => $card_start,
            'card_issue_number' => $card_issue_number,
            'bank_name' => $bank_name,
            'bank_account_type' => $bank_account_type,
            'bank_code' => $bank_code,
            'bank_account' => $bank_account,
            'set_as_default' => $set_as_default,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updateQuote(
        int $quote_id,
        null|string $subject = null,
        null|string $stage = null,
        null|string $valid_until = null,
        null|string $date_created = null,
        null|array $lineitems = null,
        null|int $lineitems_x__id_ = null,
        null|string $lineitems_x__desc_ = null,
        null|int $lineitems_x__qty_ = null,
        null|float $lineitems_x__up_ = null,
        null|float $lineitems_x__discount_ = null,
        null|bool $lineitems_x__taxable_ = null,
        null|int $user_id = null,
        null|string $firstname = null,
        null|string $lastname = null,
        null|string $companyname = null,
        null|string $email = null,
        null|string $address1 = null,
        null|string $address2 = null,
        null|string $city = null,
        null|string $state = null,
        null|string $country = null,
        null|string $phonenumber = null,
        null|string $tax_id = null,
        null|int $currency = null,
        null|string $proposal = null,
        null|string $customernotes = null,
        null|string $adminnotes = null,
    ): array {
        return self::call('UpdateQuote', self::payload([
            'quoteid' => $quote_id,
            'subject' => $subject,
            'stage' => $stage,
            'validuntil' => $valid_until,
            'datecreated' => $date_created,
            'lineitems' => $lineitems,
            'lineitems[x][id]' => $lineitems_x__id_,
            'lineitems[x][desc]' => $lineitems_x__desc_,
            'lineitems[x][qty]' => $lineitems_x__qty_,
            'lineitems[x][up]' => $lineitems_x__up_,
            'lineitems[x][discount]' => $lineitems_x__discount_,
            'lineitems[x][taxable]' => $lineitems_x__taxable_,
            'userid' => $user_id,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'companyname' => $companyname,
            'email' => $email,
            'address1' => $address1,
            'address2' => $address2,
            'city' => $city,
            'state' => $state,
            'country' => $country,
            'phonenumber' => $phonenumber,
            'tax_id' => $tax_id,
            'currency' => $currency,
            'proposal' => $proposal,
            'customernotes' => $customernotes,
            'adminnotes' => $adminnotes,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updateTransaction(
        int $transaction_id,
        null|int $refund_id = null,
        null|int $user_id = null,
        null|int $invoice_id = null,
        null|string $trans_id = null,
        null|string $date = null,
        null|string $gateway = null,
        null|int $currency = null,
        null|string $description = null,
        null|float $amount_in = null,
        null|float $fees = null,
        null|float $amount_out = null,
        null|float $rate = null,
        null|bool $credit = null,
    ): array {
        return self::call('UpdateTransaction', self::payload([
            'transactionid' => $transaction_id,
            'refundid' => $refund_id,
            'userid' => $user_id,
            'invoiceid' => $invoice_id,
            'transid' => $trans_id,
            'date' => $date,
            'gateway' => $gateway,
            'currency' => $currency,
            'description' => $description,
            'amountin' => $amount_in,
            'fees' => $fees,
            'amountout' => $amount_out,
            'rate' => $rate,
            'credit' => $credit,
        ]));
    }
}
