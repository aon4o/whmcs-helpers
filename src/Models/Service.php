<?php

declare(strict_types=1);

namespace Aon4o\WhmcsHelpers\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Represents a row from WHMCS tblhosting (Service) table.
 *
 * Columns (type hints reflect DB types; date/time fields are strings unless casts are defined):
 *
 * @property int $id
 * @property int $userid
 * @property int $orderid
 * @property int $packageid The id of the Product (tblproducts.id)
 * @property int $server
 * @property string|null $regdate date (YYYY-MM-DD)
 * @property string|null $domain text
 * @property string|null $paymentmethod text
 * @property int|null $qty
 * @property float|null $firstpaymentamount decimal(16,2)
 * @property float|null $amount decimal(16,2)
 * @property string|null $billingcycle text
 * @property string|null $nextduedate date (YYYY-MM-DD)
 * @property string|null $nextinvoicedate date (YYYY-MM-DD)
 * @property string|null $termination_date date (YYYY-MM-DD)
 * @property string|null $completed_date date (YYYY-MM-DD)
 * @property string|null $domainstatus enum('Pending','Active','Suspended','Terminated','Cancelled','Fraud','Completed')
 * @property string|null $username text
 * @property string|null $password text
 * @property string|null $notes text
 * @property string|null $subscriptionid text
 * @property int|null $promoid
 * @property int|null $promocount
 * @property string|null $suspendreason text
 * @property int|null $overideautosuspend tinyint(1)
 * @property string|null $overidesuspenduntil date (YYYY-MM-DD)
 * @property string|null $dedicatedip text
 * @property string|null $assignedips text
 * @property string|null $ns1 text
 * @property string|null $ns2 text
 * @property int|null $diskusage
 * @property int|null $disklimit
 * @property int|null $bwusage
 * @property int|null $bwlimit
 * @property string|null $lastupdate datetime (YYYY-MM-DD HH:MM:SS)
 * @property string|null $created_at timestamp
 * @property string|null $updated_at timestamp
 */
class Service extends Model
{
    protected $table = 'tblhosting';

    protected $guarded = ['id'];
}
