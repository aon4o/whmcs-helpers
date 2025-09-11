<?php

declare(strict_types=1);

namespace Aon4o\WhmcsHelpers\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property $created_at
 * @property $updated_at
 */
class Invoice extends Model
{
    protected $table = 'tblinvoices';

    protected $guarded = ['id'];
}
