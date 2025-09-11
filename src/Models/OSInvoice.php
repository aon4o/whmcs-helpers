<?php

declare(strict_types=1);

namespace Aon4o\WhmcsHelpers\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $invoiceid
 * @property $serviceid
 * @property $fieldid
 * @property $optionid
 * @property $paid
 * @property $created_at
 * @property $updated_at
 */
class OSInvoice extends Model
{
    protected $table = 'tblosinvoices';

    protected $guarded = ['id'];
}
