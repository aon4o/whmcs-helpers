<?php

declare(strict_types=1);

namespace Aon4o\WhmcsHelpers\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $code
 * @property string $prefix
 * @property string $suffix
 * @property bool $format
 * @property float $rate
 * @property bool $default
 */
class Currency extends Model
{
    protected $table = 'tblcurrencies';

    protected $guarded = ['id'];

    public $timestamps = false;
}
