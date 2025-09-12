<?php

declare(strict_types=1);

namespace Aon4o\WhmcsHelpers\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $type
 * @property int $group_id group id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property bool $hidden
 * @property bool $showdomainoptions
 * @property int $welcomeemail
 * @property bool $stockcontrol
 * @property int $quantity
 * @property bool $proratabilling
 * @property int $proratadate
 * @property int $proratachargenextmonth
 * @property string $paytype
 * @property $allowqty int(1)
 * @property string $subdomain
 * @property string $autosetup
 * @property string $servertype
 * @property int $servergroup
 * @property string $configoption1
 * @property string $configoption2
 * @property string $configoption3
 * @property string $configoption4
 * @property string $configoption5
 * @property string $configoption6
 * @property string $configoption7
 * @property string $configoption8
 * @property string $configoption9
 * @property string $configoption10
 * @property string $configoption11
 * @property string $configoption12
 * @property string $configoption13
 * @property string $configoption14
 * @property string $configoption15
 * @property string $configoption16
 * @property string $configoption17
 * @property string $configoption18
 * @property string $configoption19
 * @property string $configoption20
 * @property string $configoption21
 * @property string $configoption22
 * @property string $configoption23
 * @property string $configoption24
 * @property string $freedomain
 * @property string $freedomainpaymentterms
 * @property string $freedomaintlds
 * @property int $recurringcycles
 * @property int $autoterminatedays
 * @property int $autoterminateemail
 * @property bool $config_optionsupgrade
 * @property string $billing_cycleupgrade
 * @property int $upgradeemail
 * @property string $overagesenabled
 * @property int $overagesdisklimit
 * @property int $overagesbwlimit
 * @property float $overagesdiskprice
 * @property float $overagesbwprice
 * @property bool $tax
 * @property bool $affiliateonetime
 * @property string $affiliatepaytype
 * @property float $affiliatepayamount
 * @property int $order
 * @property bool $retired
 * @property bool $is_featured
 * @property string $color
 * @property string $tagline
 * @property string $short_description
 * @property $created_at
 * @property $updated_at
 */
class Product extends Model
{
    protected $table = 'tblproducts';

    protected $guarded = ['id'];
}
