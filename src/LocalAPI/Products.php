<?php

namespace Aon4o\WhmcsHelpers\LocalAPI;

use Aon4o\WhmcsHelpers\Interfaces\LocalAPI;

class Products extends LocalAPI
{
    /**
     * @link https://developers.whmcs.com/api-reference/{$slug}/
     */
    public function addProduct(
        string $name,
        int $gid,
        null|string $slug = null,
        null|string $type = null,
        null|bool $stockcontrol = null,
        null|int $qty = null,
        null|string $paytype = null,
        null|bool $hidden = null,
        null|bool $showdomainoptions = null,
        null|bool $tax = null,
        null|bool $isFeatured = null,
        null|bool $proratabilling = null,
        null|string $description = null,
        null|string $shortdescription = null,
        null|string $tagline = null,
        null|string $color = null,
        null|int $welcomeemail = null,
        null|int $proratadate = null,
        null|int $proratachargenextmonth = null,
        null|string $subdomain = null,
        null|string $autosetup = null,
        null|string $module = null,
        null|int $servergroupid = null,
        null|string $configoption1 = null,
        null|string $configoption2 = null,
        null|string $configoption3 = null,
        null|string $configoption4 = null,
        null|string $configoption5 = null,
        null|string $configoption6 = null,
        null|int $order = null,
        null|array $pricing = null,
        null|array $recommendations = null,
        null|bool $ondemandrenewalconfigurationoverride = null,
        null|bool $ondemandrenewalsenabled = null,
        null|int $ondemandrenewalperiodmonthly = null,
        null|int $ondemandrenewalperiodquarterly = null,
        null|int $ondemandrenewalperiodsemiannually = null,
        null|int $ondemandrenewalperiodannually = null,
        null|int $ondemandrenewalperiodbiennially = null,
        null|int $ondemandrenewalperiodtriennially = null,
    ): array {
        return self::call('AddProduct', self::payload([
            'name' => $name, 'gid' => $gid, 'slug' => $slug, 'type' => $type, 'stockcontrol' => $stockcontrol,
            'qty' => $qty, 'paytype' => $paytype, 'hidden' => $hidden, 'showdomainoptions' => $showdomainoptions,
            'tax' => $tax, 'isFeatured' => $isFeatured, 'proratabilling' => $proratabilling,
            'description' => $description, 'shortdescription' => $shortdescription, 'tagline' => $tagline,
            'color' => $color, 'welcomeemail' => $welcomeemail, 'proratadate' => $proratadate,
            'proratachargenextmonth' => $proratachargenextmonth, 'subdomain' => $subdomain, 'autosetup' => $autosetup,
            'module' => $module, 'servergroupid' => $servergroupid, 'configoption1' => $configoption1,
            'configoption2' => $configoption2, 'configoption3' => $configoption3, 'configoption4' => $configoption4,
            'configoption5' => $configoption5, 'configoption6' => $configoption6, 'order' => $order,
            'pricing' => $pricing, 'recommendations' => $recommendations,
            'ondemandrenewalconfigurationoverride' => $ondemandrenewalconfigurationoverride,
            'ondemandrenewalsenabled' => $ondemandrenewalsenabled,
            'ondemandrenewalperiodmonthly' => $ondemandrenewalperiodmonthly,
            'ondemandrenewalperiodquarterly' => $ondemandrenewalperiodquarterly,
            'ondemandrenewalperiodsemiannually' => $ondemandrenewalperiodsemiannually,
            'ondemandrenewalperiodannually' => $ondemandrenewalperiodannually,
            'ondemandrenewalperiodbiennially' => $ondemandrenewalperiodbiennially,
            'ondemandrenewalperiodtriennially' => $ondemandrenewalperiodtriennially,
        ]));
    }
}
