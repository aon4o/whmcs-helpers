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
        null|bool $stock_control = null,
        null|int $qty = null,
        null|string $pay_type = null,
        null|bool $hidden = null,
        null|bool $show_domain_options = null,
        null|bool $tax = null,
        null|bool $is_featured = null,
        null|bool $prorata_billing = null,
        null|string $description = null,
        null|string $short_description = null,
        null|string $tagline = null,
        null|string $color = null,
        null|int $welcome_email = null,
        null|int $prorata_date = null,
        null|int $prorata_charge_next_month = null,
        null|string $subdomain = null,
        null|string $auto_setup = null,
        null|string $module = null,
        null|int $server_group_id = null,
        null|string $config_option1 = null,
        null|string $config_option2 = null,
        null|string $config_option3 = null,
        null|string $config_option4 = null,
        null|string $config_option5 = null,
        null|string $config_option6 = null,
        null|int $order = null,
        null|array $pricing = null,
        null|array $recommendations = null,
        null|bool $on_demand_renewal_configuration_override = null,
        null|bool $on_demand_renewals_enabled = null,
        null|int $on_demand_renewal_period_monthly = null,
        null|int $on_demand_renewal_period_quarterly = null,
        null|int $on_demand_renewal_period_semiannually = null,
        null|int $on_demand_renewal_period_annually = null,
        null|int $on_demand_renewal_period_biennially = null,
        null|int $on_demand_renewal_period_triennially = null,
    ): array {
        return self::call('AddProduct', self::payload([
            'name' => $name, 'gid' => $gid, 'slug' => $slug, 'type' => $type, 'stockcontrol' => $stock_control,
            'qty' => $qty, 'paytype' => $pay_type, 'hidden' => $hidden, 'showdomainoptions' => $show_domain_options,
            'tax' => $tax, 'isFeatured' => $is_featured, 'proratabilling' => $prorata_billing,
            'description' => $description, 'shortdescription' => $short_description, 'tagline' => $tagline,
            'color' => $color, 'welcomeemail' => $welcome_email, 'proratadate' => $prorata_date,
            'proratachargenextmonth' => $prorata_charge_next_month, 'subdomain' => $subdomain, 'autosetup' => $auto_setup,
            'module' => $module, 'servergroupid' => $server_group_id, 'configoption1' => $config_option1,
            'configoption2' => $config_option2, 'configoption3' => $config_option3, 'configoption4' => $config_option4,
            'configoption5' => $config_option5, 'configoption6' => $config_option6, 'order' => $order,
            'pricing' => $pricing, 'recommendations' => $recommendations,
            'ondemandrenewalconfigurationoverride' => $on_demand_renewal_configuration_override,
            'ondemandrenewalsenabled' => $on_demand_renewals_enabled,
            'ondemandrenewalperiodmonthly' => $on_demand_renewal_period_monthly,
            'ondemandrenewalperiodquarterly' => $on_demand_renewal_period_quarterly,
            'ondemandrenewalperiodsemiannually' => $on_demand_renewal_period_semiannually,
            'ondemandrenewalperiodannually' => $on_demand_renewal_period_annually,
            'ondemandrenewalperiodbiennially' => $on_demand_renewal_period_biennially,
            'ondemandrenewalperiodtriennially' => $on_demand_renewal_period_triennially,
        ]));
    }
}
