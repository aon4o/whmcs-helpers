<?php

declare(strict_types=1);

namespace Aon4o\WhmcsHelpers;

class LocalAPI
{
    /**
     * @param  string  $command
     * @param  array  $data
     * @param  string|null  $admin_username
     *
     * @return array
     *
     * @link https://developers.whmcs.com/api/internal-api/
     */
    public static function call(string $command, array $data = [], string|null $admin_username = null): array
    {
        if ($admin_username) {
            return localAPI($command, $data, $admin_username);
        }

        return localAPI($command, $data);
    }

    /**
     * @return array
     *
     * @link https://developers.whmcs.com/api-reference/getcurrencies/
     */
    public static function getCurrencies(): array
    {
        return self::call('GetCurrencies');
    }

    /**
     * @param  string  $subject
     * @param  string  $body
     * @param  string|null  $admin_username
     *
     * @return void
     *
     * @link https://developers.whmcs.com/api-reference/sendadminemail/
     */
    public static function sendAdminEmail(string $subject, string $body, string|null $admin_username = null): void
    {
        $request = [
            'custommessage' => $body,
            'customsubject' => $subject,
            'type' => 'account',
            // 'deptid' => 'Service Unsuspension Successful',
        ];

        $response = self::call('SendAdminEmail', $request, $admin_username);

        WHMCSHelper::log('send admin email', $request, $response);
    }

    /**
     * @param  int  $service_id  The ID of the service to upgrade
     * @param  string  $payment_method  The upgrade payment method in system format (e.g. 'paypal')
     * @param  string  $type  The type of upgrade ('product', 'configoptions')
     * @param  bool  $calc_only  Only calculate the upgrade amount
     * @param  int|null  $new_product_id  The ID of the new product
     * @param  string|null  $new_product_billing_cycle  The new products billing cycle
     * @param  string|null  $promo_code  The promotion code to apply to the upgrade
     * @param  array|null  $config_options  If type=configoptions - Config options to include in the upgrade. Keys
     *                                      represent config option IDs while their values represent the config option
     *                                      choice ID or value (depending on type). In the example provided, config
     *                                      option ID=1 is a dropdown specifying option ID 4, and config option ID=2 is
     *                                      a quantity specifying a desire for 5 units.
     *
     * @return array
     *
     * @link https://developers.whmcs.com/api-reference/upgradeproduct/
     */
    public static function upgradeProduct(
        int $service_id,
        string $payment_method,
        string $type,
        bool $calc_only = false,
        int|null $new_product_id = null,
        string|null $new_product_billing_cycle = null,
        string|null $promo_code = null,
        array|null $config_options = null,
    ): array {
        $request_data = [
            'serviceid' => $service_id,
            'calconly' => $calc_only,
            'paymentmethod' => $payment_method,
            'type' => $type,
        ];

        if ($new_product_id) {
            $request_data['newproductid'] = $new_product_id;
        }

        if ($new_product_billing_cycle) {
            $request_data['newproductbillingcycle'] = $new_product_billing_cycle;
        }

        if ($promo_code) {
            $request_data['promocode'] = $promo_code;
        }

        if ($config_options) {
            $request_data['configoptions'] = $config_options;
        }

        return self::call('UpgradeProduct', $request_data);
    }

    /**
     * @param  int  $service_id
     * @param  array  $optional_params
     * @param  string|null  $admin_username
     *
     * @return array
     *
     * @link https://developers.whmcs.com/api-reference/updateclientproduct/
     */
    public static function updateClientProduct(
        int $service_id,
        array $optional_params = [],
        string|null $admin_username = null,
    ): array {
        $request_data = [
            'serviceid' => $service_id,
            ...$optional_params,
        ];

        return self::call('UpdateClientProduct', $request_data, $admin_username);
    }

    /**
     * @param  int|null  $limit_start
     * @param  int|null  $limit_num
     * @param  int|null  $client_id
     * @param  int|null  $service_id
     * @param  int|null  $product_id
     * @param  string|null  $domain
     * @param  string|null  $username
     * @param  string|null  $admin_username
     *
     * @return array
     *
     * @link https://developers.whmcs.com/api-reference/getclientsproducts/
     */
    public static function getClientsProducts(
        int|null $limit_start = null,
        int|null $limit_num = null,
        int|null $client_id = null,
        int|null $service_id = null,
        int|null $product_id = null,
        string|null $domain = null,
        string|null $username = null,
        string|null $admin_username = null,
    ): array {
        $request_data = [];

        if ($limit_start) {
            $request_data['limitstart'] = $limit_start;
        }

        if ($limit_num) {
            $request_data['limitnum'] = $limit_num;
        }

        if ($client_id) {
            $request_data['clientid'] = $client_id;
        }

        if ($service_id) {
            $request_data['serviceid'] = $service_id;
        }

        if ($product_id) {
            $request_data['pid'] = $product_id;
        }

        if ($domain) {
            $request_data['domain'] = $domain;
        }

        if ($username) {
            $request_data['username2'] = $username;
        }

        if ($admin_username) {
            return self::call('GetClientsProducts', $request_data, $admin_username);
        }

        return self::call('GetClientsProducts', $request_data);
    }

    /**
     * @param  int  $department_id
     * @param  string  $subject
     * @param  string  $message
     * @param  int|null  $client_id
     * @param  int|null  $user_id
     * @param  int|null  $contact_id
     * @param  string|null  $name
     * @param  string|null  $email
     * @param  string|null  $priority
     * @param  string|null  $created  Date of creation in the format YYYY-MM-DD HH:mm:ss
     * @param  int|null  $service_id
     * @param  int|null  $domain_id
     * @param  bool  $admin  Weather the opener is an admin
     * @param  bool  $no_email
     * @param  bool  $markdown
     * @param  array|null  $custom_fields
     * @param  array|null  $attachments
     * @param  bool|null  $prevent_client_closure
     * @param  string|null  $admin_username
     *
     * @return array
     *
     * @link https://developers.whmcs.com/api-reference/openticket/
     */
    public static function openTicket(
        int $department_id,
        string $subject,
        string $message,
        int|null $client_id = null,
        int|null $user_id = null,
        int|null $contact_id = null,
        string|null $name = null,
        string|null $email = null,
        string|null $priority = null,
        string|null $created = null,
        int|null $service_id = null,
        int|null $domain_id = null,
        bool $admin = false,
        bool $no_email = false,
        bool $markdown = false,
        array|null $custom_fields = null,
        array|null $attachments = null,
        bool|null $prevent_client_closure = null,
        string|null $admin_username = null,
    ): array {
        $request_data = [
            'deptid' => $department_id,
            'subject' => $subject,
            'message' => $message,
            'admin' => $admin,
            'noemail' => $no_email,
            'markdown' => $markdown,
        ];

        if ($client_id) {
            $request_data['clientid'] = $client_id;
        }

        if ($user_id) {
            $request_data['userid'] = $user_id;
        }

        if ($contact_id) {
            $request_data['contactid'] = $contact_id;
        }

        if ($name) {
            $request_data['name'] = $name;
        }

        if ($email) {
            $request_data['email'] = $email;
        }

        if ($priority) {
            $request_data['priority'] = $priority;
        }

        if ($created) {
            $request_data['created'] = $created;
        }

        if ($service_id) {
            $request_data['serviceid'] = $service_id;
        }

        if ($domain_id) {
            $request_data['domainid'] = $domain_id;
        }

        if ($custom_fields) {
            $request_data['customfields'] = base64_encode(serialize($custom_fields));
        }

        if ($attachments) {
            $request_data['attachments'] = $attachments;
        }

        if (! empty($prevent_client_closure)) {
            $request_data['preventClientClosure'] = $prevent_client_closure;
        }

        return LocalAPI::call('OpenTicket', $request_data, $admin_username);
    }

    /**
     * @param  int  $user_id
     * @param  array  $optional_params
     * @param  string|null  $admin_username
     *
     * @return array
     *
     * @link https://developers.whmcs.com/api-reference/createinvoice/
     */
    public static function createInvoice(
        int $user_id,
        array $optional_params = [],
        string|null $admin_username = null,
    ): array {
        $request_data = [
            'userid' => $user_id,
            ...$optional_params,
        ];

        return self::call('CreateInvoice', $request_data, $admin_username);
    }

    /**
     * Add a product to the system to be available for purchase.
     *
     * Parameters are listed in the exact order of the WHMCS documentation.
     *
     * @param  string  $action  "AddProduct" Required
     * @param  string  $name  The name of the product to be added Required
     * @param  int  $group_id  The id of the product group to add the product Required
     * @param  string|null  $slug  The friendly name of the product. Will be generated if not supplied. Optional
     * @param  string|null  $type  One of 'hostingaccount', 'reselleraccount', 'server' or 'other' Optional
     * @param  bool  $stock_control  Set to true to enable stock control on the product Optional
     * @param  int|null  $quantity  How much of this product is in stock Optional
     * @param  string|null  $pay_type  The payment type of the product. One of 'free', 'onetime', 'recurring' Optional
     * @param  bool  $hidden  Should the product be hidden from the client order form Optional
     * @param  bool  $show_domain_options  Should the product show the domain registration options. Optional
     * @param  bool  $tax  Does tax apply to the product. Optional
     * @param  bool  $is_featured  Should the product be featured in the Product Group. Optional
     * @param  bool  $prorata_billing  Is pro-rata billing enabled for this product. Optional
     * @param  string|null  $description  The description of the product to show on the product listing in the cart
     *                                    Optional
     * @param  string|null  $short_description  The short description of the product to show in specific areas of the
     *                                          cart. Optional
     * @param  string|null  $tagline  The tagline of the product to show in specific areas of the cart. Optional
     * @param  string|null  $color  The color to associate with the product in specific areas of the cart. Optional
     * @param  int|null  $welcome_email  The id of the Email Template to use as the welcome email. Product/Service
     *                                   Messages only Optional
     * @param  int|null  $prorata_date  See https://go.whmcs.com/1981/products#pricing Optional
     * @param  int|null  $prorata_charge_next_month  See https://go.whmcs.com/1981/products#pricing Optional
     * @param  string|null  $subdomain  A comma separated list of subdomains to offer on the domain register page. eg:
     *                                  .domain1.com,.domain2.com Optional
     * @param  string|null  $auto_setup  When should the product be automatically setup. One of '' (never), 'on'
     *                                   (pending order), 'payment' (on payment), 'order' (on order) Optional
     * @param  string|null  $module  The server module system name to associate with the product. eg: cpanel,
     *                               autorelease, plesk Optional
     * @param  int|null  $server_group_id  The server group id used on product creation to associate an appropriate
     *                                     server Optional
     * @param  mixed|null  $configoption1  The first module configuration value Optional
     * @param  mixed|null  $configoption2  The second module configuration value Optional
     * @param  mixed|null  $configoption3  The third module configuration value Optional
     * @param  mixed|null  $configoption4  The fourth module configuration value Optional
     * @param  mixed|null  $configoption5  The fifth module configuration value Optional
     * @param  mixed|null  $configoption6  The sixth module configuration value Optional
     * @param  int|null  $order  The order to in which to display on the order form Optional
     * @param  array|null  $pricing  The pricing array to associate with the product. Format:
     *                               $pricing[currencyid][cycle]. See Example. Optional
     * @param  array|null  $recommendations  The recommendations array to associate with the product in the following
     *                                       format: ['id' => productid, 'order' => integer] (See example.) Optional
     * @param  bool  $ondemandrenewalconfigurationoverride  Whether the product uses custom on-demand renewal settings.
     *                                                      Optional
     * @param  bool  $ondemandrenewalsenabled  Whether on-demand renewals are enabled for the product. Requires
     *                                         $ondemandrenewalconfigurationoverride be set to true. Optional
     * @param  int|null  $ondemandrenewalperiodmonthly  The period (in days) during which clients can place early
     *                                                  renewal orders for the monthly billing cycle. Requires
     *                                                  $ondemandrenewalconfigurationoverride be set to true. Optional
     * @param  int|null  $ondemandrenewalperiodquarterly  The period (in days) during which clients can place early
     *                                                    renewal orders for the quarterly billing cycle. Requires
     *                                                    $ondemandrenewalconfigurationoverride be set to true.
     *                                                    Optional
     * @param  int|null  $ondemandrenewalperiodsemiannually  The period (in days) during which clients can place early
     *                                                       renewal orders for the semi-annually billing cycle.
     *                                                       Requires $ondemandrenewalconfigurationoverride be set to
     *                                                       true. Optional
     * @param  int|null  $ondemandrenewalperiodannually  The period (in days) during which clients can place early
     *                                                   renewal orders for the annually billing cycle. Requires
     *                                                   $ondemandrenewalconfigurationoverride be set to true. Optional
     * @param  int|null  $ondemandrenewalperiodbiennially  The period (in days) during which clients can place early
     *                                                     renewal orders for the biennially billing cycle. Requires
     *                                                     $ondemandrenewalconfigurationoverride be set to true.
     *                                                     Optional
     * @param  int|null  $ondemandrenewalperiodtriennially  The period (in days) during which clients can place early
     *                                                      renewal orders for the triennially billing cycle. Requires
     *                                                      $ondemandrenewalconfigurationoverride be set to true.
     *                                                      Optional
     * @param  string|null  $admin_username  Optional admin username for localAPI context
     *
     * @return array {result: string, pid?: int}
     *
     * @link https://developers.whmcs.com/api-reference/addproduct/
     */
    public static function addProduct(
        string $name,
        int $group_id,
        string|null $slug = null,
        string|null $type = null,
        bool $stock_control = false,
        int|null $quantity = null,
        string|null $pay_type = null,
        bool $hidden = false,
        bool $show_domain_options = false,
        bool $tax = true,
        bool $is_featured = false,
        bool $prorata_billing = false,
        string|null $description = null,
        string|null $short_description = null,
        string|null $tagline = null,
        string|null $color = null,
        int|null $welcome_email = null,
        int|null $prorata_date = null,
        int|null $prorata_charge_next_month = null,
        string|null $subdomain = null,
        string|null $auto_setup = null,
        string|null $module = null,
        int|null $server_group_id = null,
        mixed $configoption1 = null,
        mixed $configoption2 = null,
        mixed $configoption3 = null,
        mixed $configoption4 = null,
        mixed $configoption5 = null,
        mixed $configoption6 = null,
        int|null $order = null,
        array|null $pricing = null,
        array|null $recommendations = null,
        bool $ondemandrenewalconfigurationoverride = false,
        bool $ondemandrenewalsenabled = false,
        int|null $ondemandrenewalperiodmonthly = null,
        int|null $ondemandrenewalperiodquarterly = null,
        int|null $ondemandrenewalperiodsemiannually = null,
        int|null $ondemandrenewalperiodannually = null,
        int|null $ondemandrenewalperiodbiennially = null,
        int|null $ondemandrenewalperiodtriennially = null,
        string|null $admin_username = null,
    ): array {
        $request_data = [
            'name' => $name,
            'gid' => $group_id,
            'stockcontrol' => $stock_control,
            'hidden' => $hidden,
            'showdomainoptions' => $show_domain_options,
            'tax' => $tax,
            'isFeatured' => $is_featured,
            'proratabilling' => $prorata_billing,
        ];

        if ($slug !== null) {
            $request_data['slug'] = $slug;
        }
        if ($type !== null) {
            $request_data['type'] = $type;
        }
        if ($quantity !== null) {
            $request_data['qty'] = $quantity;
        }
        if ($pay_type !== null) {
            $request_data['paytype'] = $pay_type;
        }
        if ($description !== null) {
            $request_data['description'] = $description;
        }
        if ($short_description !== null) {
            $request_data['shortdescription'] = $short_description;
        }
        if ($tagline !== null) {
            $request_data['tagline'] = $tagline;
        }
        if ($color !== null) {
            $request_data['color'] = $color;
        }
        if ($welcome_email !== null) {
            $request_data['welcomeemail'] = $welcome_email;
        }
        if ($prorata_date !== null) {
            $request_data['proratadate'] = $prorata_date;
        }
        if ($prorata_charge_next_month !== null) {
            $request_data['proratachargenextmonth'] = $prorata_charge_next_month;
        }
        if ($subdomain !== null) {
            $request_data['subdomain'] = $subdomain;
        }
        if ($auto_setup !== null) {
            $request_data['autosetup'] = $auto_setup;
        }
        if ($module !== null) {
            $request_data['module'] = $module;
        }
        if ($server_group_id !== null) {
            $request_data['servergroupid'] = $server_group_id;
        }
        if ($configoption1 !== null) {
            $request_data['configoption1'] = $configoption1;
        }
        if ($configoption2 !== null) {
            $request_data['configoption2'] = $configoption2;
        }
        if ($configoption3 !== null) {
            $request_data['configoption3'] = $configoption3;
        }
        if ($configoption4 !== null) {
            $request_data['configoption4'] = $configoption4;
        }
        if ($configoption5 !== null) {
            $request_data['configoption5'] = $configoption5;
        }
        if ($configoption6 !== null) {
            $request_data['configoption6'] = $configoption6;
        }
        if ($order !== null) {
            $request_data['order'] = $order;
        }
        if ($pricing !== null) {
            $request_data['pricing'] = $pricing;
        }
        if ($recommendations !== null) {
            $request_data['recommendations'] = $recommendations;
        }
        if ($ondemandrenewalconfigurationoverride) {
            $request_data['ondemandrenewalconfigurationoverride'] = $ondemandrenewalconfigurationoverride;
        }
        if ($ondemandrenewalsenabled) {
            $request_data['ondemandrenewalsenabled'] = $ondemandrenewalsenabled;
        }
        if ($ondemandrenewalperiodmonthly !== null) {
            $request_data['ondemandrenewalperiodmonthly'] = $ondemandrenewalperiodmonthly;
        }
        if ($ondemandrenewalperiodquarterly !== null) {
            $request_data['ondemandrenewalperiodquarterly'] = $ondemandrenewalperiodquarterly;
        }
        if ($ondemandrenewalperiodsemiannually !== null) {
            $request_data['ondemandrenewalperiodsemiannually'] = $ondemandrenewalperiodsemiannually;
        }
        if ($ondemandrenewalperiodannually !== null) {
            $request_data['ondemandrenewalperiodannually'] = $ondemandrenewalperiodannually;
        }
        if ($ondemandrenewalperiodbiennially !== null) {
            $request_data['ondemandrenewalperiodbiennially'] = $ondemandrenewalperiodbiennially;
        }
        if ($ondemandrenewalperiodtriennially !== null) {
            $request_data['ondemandrenewalperiodtriennially'] = $ondemandrenewalperiodtriennially;
        }

        return self::call('AddProduct', $request_data, $admin_username);
    }
}
