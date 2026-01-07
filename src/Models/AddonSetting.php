<?php

declare(strict_types=1);

namespace Aon4o\WhmcsHelpers\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $module
 * @property string $setting
 * @property string $value
 */
class AddonSetting extends Model
{
    protected $table = 'tbladdonmodules';

    protected $guarded = ['id'];

    public $timestamps = false;
}
