<?php

declare(strict_types=1);

namespace Aon4o\WhmcsHelpers\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $gid Configurable Option ID
 * @property int $pid Product ID
 */
class ProductConfigurableOption extends Model
{
    protected $table = 'tblproductconfiglinks';

    protected $guarded = ['id'];

    public $timestamps = false;
}
