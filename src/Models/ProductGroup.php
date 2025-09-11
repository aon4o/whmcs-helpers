<?php

declare(strict_types=1);

namespace Aon4o\WhmcsHelpers\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $headline
 * @property string $tagline
 * @property string $orderfrmtpl
 * @property string $disabledgateways
 * @property bool $hidden
 * @property int $order
 * @property $created_at
 * @property $updated_at
 */
class ProductGroup extends Model
{
    protected $table = 'tblproductgroups';

    protected $guarded = ['id'];
}
