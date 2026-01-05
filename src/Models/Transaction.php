<?php

declare(strict_types=1);

namespace Aon4o\WhmcsHelpers\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $userid
 * @property int $currency Currency ID
 * @property string $gateway
 * @property string $date
 * @property string $description
 * @property float $amountin
 * @property float $fees
 * @property float $amountout
 * @property float $rate
 * @property string $transid
 * @property int $invoiceid
 * @property int $refundid
 */
class Transaction extends Model
{
    public $table = 'tblaccounts';

    protected $guarded = ['id'];

    public $timestamps = false;

    public function invoice(): BelongsTo
    {
        return $this->belongsTo(Invoice::class, 'invoiceid');
    }

    /**
     * @return BelongsTo
     */
    public function currencyModel(): BelongsTo
    {
        return $this->belongsTo(Currency::class, 'currency');
    }
}
