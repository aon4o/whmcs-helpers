<?php

declare(strict_types=1);

namespace Aon4o\WhmcsHelpers\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Columns (type hints reflect DB types; date/time fields are strings unless casts are defined):
 *
 * @property int $id
 * @property string $type text
 * @property int $relid
 * @property string $fieldname text
 * @property string $fieldtype text
 * @property string $description text
 * @property string $fieldoptions text
 * @property string $regexpr text
 * @property string $adminonly text
 * @property string $required text
 * @property string $showorder text
 * @property string $showinvoice text
 * @property int $sortorder
 * @property string $created_at timestamp
 * @property string $updated_at timestamp
 */
class CustomField extends Model
{
    protected $table = 'tblcustomfields';

    protected $guarded = ['id'];
}
