<?php

declare(strict_types=1);

namespace Aon4o\WhmcsHelpers\Models;

use Aon4o\WhmcsHelpers\Enums\InvoiceItemType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use RuntimeException;

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

    /**
     * @return BelongsTo
     */
    public function invoice(): BelongsTo
    {
        return $this->belongsTo(Invoice::class, 'invoiceid');
    }

    /**
     * @return Model
     */
    public function itemable(): Model
    {
        $rel_class = match ($this->type) {
            InvoiceItemType::Hosting => Service::class,
            InvoiceItemType::Invoice => Invoice::class,
            InvoiceItemType::Domain,
            InvoiceItemType::Upgrade,
            InvoiceItemType::PromoHosting,
            InvoiceItemType::DomainTransfer,
            InvoiceItemType::DomainRegister,
            InvoiceItemType::Addon,
            InvoiceItemType::Item,
            InvoiceItemType::Project,
            InvoiceItemType::DomainAddonIDP,
            InvoiceItemType::EMPTY,
            InvoiceItemType::RCOrder,
            InvoiceItemType::PromoDomain,
            InvoiceItemType::DomainRedemptionFee => null,
        };

        if (is_null($rel_class)) {
            throw new RuntimeException("Relation class not defined for invoice item type: {$this->type->value}");
        }

        return $rel_class::find($this->relid);
    }
}
