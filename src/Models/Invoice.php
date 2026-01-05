<?php

declare(strict_types=1);

namespace Aon4o\WhmcsHelpers\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $userid
 * @property string $invoicenum
 * @property $date
 * @property $duedate
 * @property $datepaid
 * @property $last_capture_attempt
 * @property $date_refunded
 * @property $date_cancelled
 * @property float $subtotal
 * @property float $credit
 * @property float $tax
 * @property float $tax2
 * @property float $total
 * @property float $taxrate
 * @property float $taxrate2
 * @property string $status
 * @property string $paymentmethod
 * @property int $paymethodid
 * @property string $notes
 * @property $created_at
 * @property $updated_at
 */
class Invoice extends Model
{
    protected $table = 'tblinvoices';

    protected $guarded = ['id'];
}
