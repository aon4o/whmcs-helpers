<?php

declare(strict_types=1);

namespace Aon4o\WhmcsHelpers\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Client entity representing a customer record.
 *
 * @property int $id Auto-incrementing primary key
 * @property string $uuid Universally unique identifier
 * @property string $firstname Client's first name
 * @property string $lastname Client's last name
 * @property string $companyname Company name
 * @property string $email Email address
 * @property string $address1 Primary address line
 * @property string $address2 Secondary address line
 * @property string $city City
 * @property string $state State/Province
 * @property string $postcode Postal/ZIP code
 * @property string $country Country
 * @property string $phonenumber Phone number
 * @property string $tax_id Tax identification number
 * @property string $password Hashed password
 * @property string $authmodule Authentication module
 * @property string $authdata Authentication data
 * @property int $currency Currency ID
 * @property string $defaultgateway Default payment gateway
 * @property float $credit Account credit balance
 * @property bool $taxexempt Tax exemption status
 * @property bool $latefeeoveride Late fee override flag
 * @property bool $overideduenotices Override due notices flag
 * @property bool $separateinvoices Separate invoices flag
 * @property bool $disableautocc Disable automatic credit card charging
 * @property string $datecreated Account creation date
 * @property string $notes Admin notes
 * @property int $billingcid Billing contact ID
 * @property int $securityqid Security question ID
 * @property string $securityqans Security question answer
 * @property string $security_pin Security PIN
 * @property int $groupid Client group ID
 * @property string $cardtype Credit card type
 * @property string $cardlastfour Last four digits of card
 * @property string $cardnum Encrypted card number
 * @property string $startdate Card start date (encrypted)
 * @property string $expdate Card expiration date (encrypted)
 * @property string $issuenumber Card issue number (encrypted)
 * @property string $bankname Bank name
 * @property string $banktype Bank account type
 * @property string $bankcode Bank code (encrypted)
 * @property string $bankacct Bank account number (encrypted)
 * @property string $gatewayid Payment gateway customer ID
 * @property string|null $lastlogin Last login timestamp
 * @property string $ip Last known IP address
 * @property string $host Last known hostname
 * @property string $status Account status (Active|Inactive|Closed)
 * @property string $language Preferred language
 * @property string $pwresetkey Password reset key
 * @property bool $emailoptout Email opt-out flag
 * @property bool $marketing_emails_opt_in Marketing emails opt-in status
 * @property bool $overrideautoclose Override auto-close flag
 * @property bool $allow_sso Allow single sign-on
 * @property bool $email_verified Email verification status
 * @property string|null $email_preferences Email preferences JSON
 * @property string $created_at Record creation timestamp
 * @property string $updated_at Record last update timestamp
 * @property string $pwresetexpiry Password reset expiry timestamp
 * @property bool $fullcredit Full credit flag
 */
class Client extends Model
{
    public $table = 'tblclients';

    /**
     * @return BelongsTo
     */
    public function currencyModel(): BelongsTo
    {
        return $this->belongsTo(Currency::class, 'currency');
    }

    /**
     * @return string
     */
    public function getNameAttribute(): string
    {
        return "$this->firstname $this->lastname";
    }
}
