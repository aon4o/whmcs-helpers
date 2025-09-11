<?php

declare(strict_types=1);

namespace Aon4o\WhmcsHelpers\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $type enum('product', 'addon', 'configoptions', 'domainregister', 'domaintransfer', 'domainrenew',
 *                        'domainaddons', 'usage')
 * @property int $currency
 * @property int $relid
 * @property float $msetupfee
 * @property float $qsetupfee
 * @property float $ssetupfee
 * @property float $asetupfee
 * @property float $bsetupfee
 * @property float $tsetupfee
 * @property float $monthly
 * @property float $quarterly
 * @property float $semiannually
 * @property float $annually
 * @property float $biennially
 * @property float $triennially
 */
class Pricing extends Model
{
    protected $table = 'tblpricing';

    protected $guarded = ['id'];

    public $timestamps = false;
}
