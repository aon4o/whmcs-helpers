<?php

declare(strict_types=1);

namespace Aon4o\WhmcsHelpers\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $invoiceid
 * @property string $type
 * @property int $relid
 * @property string $description
 * @property float $amount
 * @property bool $taxed
 * @property $duedate
 * @property string $paymentmethod
 * @property string $notes
 */
class InvoiceItem extends Model
{
    protected $table = 'tblinvoiceitems';

    protected $guarded = ['id'];

    public $timestamps = false;

    protected $casts = [
        'taxed' => 'boolean',
        'duedate' => 'date',
    ];
}
