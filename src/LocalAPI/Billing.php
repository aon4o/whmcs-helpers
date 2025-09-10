<?php

namespace Aon4o\WhmcsHelpers\LocalAPI;

use Aon4o\WhmcsHelpers\Interfaces\LocalAPI;

class Billing extends LocalAPI
{
    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function acceptQuote(int $quoteid): array
    {
        return self::call('AcceptQuote', self::payload(['quoteid' => $quoteid]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function addBillableItem(
        int $clientid,
        string $description,
        float $amount,
        string $unit,
        null|float $quantity = null,
        null|string $invoiceaction = null,
        null|int $recur = null,
        null|string $recurcycle = null,
        null|int $recurfor = null,
        null|string $duedate = null,
    ): array {
        return self::call('AddBillableItem', self::payload([
            'clientid' => $clientid, 'description' => $description, 'amount' => $amount, 'unit' => $unit,
            'quantity' => $quantity, 'invoiceaction' => $invoiceaction, 'recur' => $recur, 'recurcycle' => $recurcycle,
            'recurfor' => $recurfor, 'duedate' => $duedate,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function addCredit(
        int $clientid,
        string $description,
        float $amount,
        null|string $date = null,
        null|int $adminid = null,
        null|string $type = null,
    ): array {
        return self::call('AddCredit', self::payload([
            'clientid' => $clientid, 'description' => $description, 'amount' => $amount, 'date' => $date,
            'adminid' => $adminid, 'type' => $type,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function addInvoicePayment(
        int $invoiceid,
        string $transid,
        string $gateway,
        string $date,
        null|float $amount = null,
        null|float $fees = null,
        null|bool $noemail = null,
    ): array {
        return self::call('AddInvoicePayment', self::payload([
            'invoiceid' => $invoiceid, 'transid' => $transid, 'gateway' => $gateway, 'date' => $date,
            'amount' => $amount, 'fees' => $fees, 'noemail' => $noemail,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function addPayMethod(
        int $clientid,
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
            'clientid' => $clientid, 'type' => $type, 'description' => $description,
            'gateway_module_name' => $gateway_module_name, 'card_number' => $card_number, 'card_expiry' => $card_expiry,
            'card_start' => $card_start, 'card_issue_number' => $card_issue_number, 'bank_name' => $bank_name,
            'bank_account_type' => $bank_account_type, 'bank_code' => $bank_code, 'bank_account' => $bank_account,
            'set_as_default' => $set_as_default,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function addTransaction(
        string $paymentmethod,
        null|int $userid = null,
        null|int $invoiceid = null,
        null|string $transid = null,
        null|string $date = null,
        null|int $currencyid = null,
        null|string $description = null,
        null|float $amountin = null,
        null|float $fees = null,
        null|float $amountout = null,
        null|float $rate = null,
        null|bool $credit = null,
        null|bool $allowduplicatetransid = null,
    ): array {
        return self::call('AddTransaction', self::payload([
            'paymentmethod' => $paymentmethod, 'userid' => $userid, 'invoiceid' => $invoiceid, 'transid' => $transid,
            'date' => $date, 'currencyid' => $currencyid, 'description' => $description, 'amountin' => $amountin,
            'fees' => $fees, 'amountout' => $amountout, 'rate' => $rate, 'credit' => $credit,
            'allowduplicatetransid' => $allowduplicatetransid,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function applyCredit(int $invoiceid, null|float $amount = null, null|bool $noemail = null): array
    {
        return self::call('ApplyCredit',
            self::payload(['invoiceid' => $invoiceid, 'amount' => $amount, 'noemail' => $noemail]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function capturePayment(int $invoiceid, null|string $cvv = null): array
    {
        return self::call('CapturePayment', self::payload(['invoiceid' => $invoiceid, 'cvv' => $cvv]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function createInvoice(
        int $userid,
        null|string $status = null,
        null|bool $draft = null,
        null|bool $sendinvoice = null,
        null|string $paymentmethod = null,
        null|float $taxrate = null,
        null|float $taxrate2 = null,
        null|string $date = null,
        null|string $duedate = null,
        null|string $notes = null,
        null|string $itemdescriptionx = null,
        null|float $itemamountx = null,
        null|bool $itemtaxedx = null,
        null|bool $autoapplycredit = null,
    ): array {
        return self::call('CreateInvoice', self::payload([
            'userid' => $userid, 'status' => $status, 'draft' => $draft, 'sendinvoice' => $sendinvoice,
            'paymentmethod' => $paymentmethod, 'taxrate' => $taxrate, 'taxrate2' => $taxrate2, 'date' => $date,
            'duedate' => $duedate, 'notes' => $notes, 'itemdescriptionx' => $itemdescriptionx,
            'itemamountx' => $itemamountx, 'itemtaxedx' => $itemtaxedx, 'autoapplycredit' => $autoapplycredit,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function createQuote(
        string $subject,
        string $stage,
        string $validuntil,
        null|string $datecreated = null,
        null|array $lineitems = null,
        null|string $lineitems_x__desc_ = null,
        null|int $lineitems_x__qty_ = null,
        null|float $lineitems_x__up_ = null,
        null|float $lineitems_x__discount_ = null,
        null|bool $lineitems_x__taxable_ = null,
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
        null|string $tax_id = null,
        null|int $currency = null,
        null|string $proposal = null,
        null|string $customernotes = null,
        null|string $adminnotes = null,
    ): array {
        return self::call('CreateQuote', self::payload([
            'subject' => $subject, 'stage' => $stage, 'validuntil' => $validuntil, 'datecreated' => $datecreated,
            'lineitems' => $lineitems, 'lineitems[x][desc]' => $lineitems_x__desc_,
            'lineitems[x][qty]' => $lineitems_x__qty_, 'lineitems[x][up]' => $lineitems_x__up_,
            'lineitems[x][discount]' => $lineitems_x__discount_, 'lineitems[x][taxable]' => $lineitems_x__taxable_,
            'userid' => $userid, 'firstname' => $firstname, 'lastname' => $lastname, 'companyname' => $companyname,
            'email' => $email, 'address1' => $address1, 'address2' => $address2, 'city' => $city, 'state' => $state,
            'postcode' => $postcode, 'country' => $country, 'phonenumber' => $phonenumber, 'tax_id' => $tax_id,
            'currency' => $currency, 'proposal' => $proposal, 'customernotes' => $customernotes,
            'adminnotes' => $adminnotes,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function deletePayMethod(int $clientid, int $paymethodid, null|bool $failonremotefailure = null): array
    {
        return self::call('DeletePayMethod', self::payload([
            'clientid' => $clientid, 'paymethodid' => $paymethodid, 'failonremotefailure' => $failonremotefailure,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function deleteQuote(int $quoteid): array
    {
        return self::call('DeleteQuote', self::payload(['quoteid' => $quoteid]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function genInvoices(
        null|bool $noemails = null,
        null|int $clientid = null,
        null|string $serviceids = null,
        null|string $domainids = null,
        null|string $addonids = null,
    ): array {
        return self::call('GenInvoices', self::payload([
            'noemails' => $noemails, 'clientid' => $clientid, 'serviceids' => $serviceids, 'domainids' => $domainids,
            'addonids' => $addonids,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getCredits(int $clientid): array
    {
        return self::call('GetCredits', self::payload(['clientid' => $clientid]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getInvoice(int $invoiceid): array
    {
        return self::call('GetInvoice', self::payload(['invoiceid' => $invoiceid]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getInvoices(
        null|int $limitstart = null,
        null|int $limitnum = null,
        null|int $userid = null,
        null|string $status = null,
        null|string $orderby = null,
        null|string $order = null,
    ): array {
        return self::call('GetInvoices', self::payload([
            'limitstart' => $limitstart, 'limitnum' => $limitnum, 'userid' => $userid, 'status' => $status,
            'orderby' => $orderby, 'order' => $order,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getPayMethods(int $clientid, null|int $paymethodid = null, null|string $type = null): array
    {
        return self::call('GetPayMethods',
            self::payload(['clientid' => $clientid, 'paymethodid' => $paymethodid, 'type' => $type]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getQuotes(
        null|int $limitstart = null,
        null|int $limitnum = null,
        null|int $quoteid = null,
        null|int $userid = null,
        null|string $subject = null,
        null|string $stage = null,
        null|string $datecreated = null,
        null|string $lastmodified = null,
        null|string $validuntil = null,
    ): array {
        return self::call('GetQuotes', self::payload([
            'limitstart' => $limitstart, 'limitnum' => $limitnum, 'quoteid' => $quoteid, 'userid' => $userid,
            'subject' => $subject, 'stage' => $stage, 'datecreated' => $datecreated, 'lastmodified' => $lastmodified,
            'validuntil' => $validuntil,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function getTransactions(
        null|int $invoiceid = null,
        null|int $clientid = null,
        null|string $transid = null,
    ): array {
        return self::call('GetTransactions',
            self::payload(['invoiceid' => $invoiceid, 'clientid' => $clientid, 'transid' => $transid]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function sendQuote(int $quoteid): array
    {
        return self::call('SendQuote', self::payload(['quoteid' => $quoteid]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updateInvoice(
        int $invoiceid,
        null|string $status = null,
        null|string $paymentmethod = null,
        null|float $taxrate = null,
        null|float $taxrate2 = null,
        null|float $credit = null,
        null|string $date = null,
        null|string $duedate = null,
        null|string $datepaid = null,
        null|string $notes = null,
        null|string $itemdescription = null,
        null|string $itemamount = null,
        null|string $itemtaxed = null,
        null|string $newitemdescription = null,
        null|string $newitemamount = null,
        null|string $newitemtaxed = null,
        null|string $deletelineids = null,
        null|bool $publish = null,
        null|bool $publishandsendemail = null,
    ): array {
        return self::call('UpdateInvoice', self::payload([
            'invoiceid' => $invoiceid, 'status' => $status, 'paymentmethod' => $paymentmethod, 'taxrate' => $taxrate,
            'taxrate2' => $taxrate2, 'credit' => $credit, 'date' => $date, 'duedate' => $duedate,
            'datepaid' => $datepaid, 'notes' => $notes, 'itemdescription' => $itemdescription,
            'itemamount' => $itemamount, 'itemtaxed' => $itemtaxed, 'newitemdescription' => $newitemdescription,
            'newitemamount' => $newitemamount, 'newitemtaxed' => $newitemtaxed, 'deletelineids' => $deletelineids,
            'publish' => $publish, 'publishandsendemail' => $publishandsendemail,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updatePayMethod(
        int $clientid,
        int $paymethodid,
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
            'clientid' => $clientid, 'paymethodid' => $paymethodid, 'card_number' => $card_number,
            'card_expiry' => $card_expiry, 'card_start' => $card_start, 'card_issue_number' => $card_issue_number,
            'bank_name' => $bank_name, 'bank_account_type' => $bank_account_type, 'bank_code' => $bank_code,
            'bank_account' => $bank_account, 'set_as_default' => $set_as_default,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updateQuote(
        int $quoteid,
        null|string $subject = null,
        null|string $stage = null,
        null|string $validuntil = null,
        null|string $datecreated = null,
        null|array $lineitems = null,
        null|int $lineitems_x__id_ = null,
        null|string $lineitems_x__desc_ = null,
        null|int $lineitems_x__qty_ = null,
        null|float $lineitems_x__up_ = null,
        null|float $lineitems_x__discount_ = null,
        null|bool $lineitems_x__taxable_ = null,
        null|int $userid = null,
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
            'quoteid' => $quoteid, 'subject' => $subject, 'stage' => $stage, 'validuntil' => $validuntil,
            'datecreated' => $datecreated, 'lineitems' => $lineitems, 'lineitems[x][id]' => $lineitems_x__id_,
            'lineitems[x][desc]' => $lineitems_x__desc_, 'lineitems[x][qty]' => $lineitems_x__qty_,
            'lineitems[x][up]' => $lineitems_x__up_, 'lineitems[x][discount]' => $lineitems_x__discount_,
            'lineitems[x][taxable]' => $lineitems_x__taxable_, 'userid' => $userid, 'firstname' => $firstname,
            'lastname' => $lastname, 'companyname' => $companyname, 'email' => $email, 'address1' => $address1,
            'address2' => $address2, 'city' => $city, 'state' => $state, 'country' => $country,
            'phonenumber' => $phonenumber, 'tax_id' => $tax_id, 'currency' => $currency, 'proposal' => $proposal,
            'customernotes' => $customernotes, 'adminnotes' => $adminnotes,
        ]));
    }

    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function updateTransaction(
        int $transactionid,
        null|int $refundid = null,
        null|int $userid = null,
        null|int $invoiceid = null,
        null|string $transid = null,
        null|string $date = null,
        null|string $gateway = null,
        null|int $currency = null,
        null|string $description = null,
        null|float $amountin = null,
        null|float $fees = null,
        null|float $amountout = null,
        null|float $rate = null,
        null|bool $credit = null,
    ): array {
        return self::call('UpdateTransaction', self::payload([
            'transactionid' => $transactionid, 'refundid' => $refundid, 'userid' => $userid, 'invoiceid' => $invoiceid,
            'transid' => $transid, 'date' => $date, 'gateway' => $gateway, 'currency' => $currency,
            'description' => $description, 'amountin' => $amountin, 'fees' => $fees, 'amountout' => $amountout,
            'rate' => $rate, 'credit' => $credit,
        ]));
    }
}
