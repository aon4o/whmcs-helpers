<?php

declare(strict_types=1);

namespace Aon4o\WhmcsHelpers\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
 * @property mixed $left_to_pay
 */
class Invoice extends Model
{
    protected $table = 'tblinvoices';

    protected $guarded = ['id'];

    /**
     * @return BelongsTo
     */
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class, 'userid', 'id');
    }

    /**
     * @return HasMany
     */
    public function invoiceItems(): HasMany
    {
        return $this->hasMany(InvoiceItem::class, 'invoiceid');
    }

    /**
     * @return HasMany
     */
    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class, 'invoiceid');
    }

    /**
     * @return float|int|mixed
     */
    public function getLeftToPayAttribute(): mixed
    {
        return $this->total - $this->transactions()->sum('amountin');
    }
}
