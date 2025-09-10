<?php

namespace Aon4o\WhmcsHelpers\Enums\Hooks;

enum AdminArea: string
{
    /**
     * @link https://developers.whmcs.com/hooks-reference/admin-area/#adminareaclientsummaryactionlinks
     */
    case AdminAreaClientSummaryActionLinks = 'AdminAreaClientSummaryActionLinks';

    /**
     * @link https://developers.whmcs.com/hooks-reference/admin-area/#adminareaclientsummarypage
     */
    case AdminAreaClientSummaryPage = 'AdminAreaClientSummaryPage';

    /**
     * @link https://developers.whmcs.com/hooks-reference/admin-area/#adminareapage
     */
    case AdminAreaPage = 'AdminAreaPage';

    /**
     * @link https://developers.whmcs.com/hooks-reference/admin-area/#adminareaviewquotepage
     */
    case AdminAreaViewQuotePage = 'AdminAreaViewQuotePage';

    /**
     * @link https://developers.whmcs.com/hooks-reference/admin-area/#adminclientdomainstabfields
     */
    case AdminClientDomainsTabFields = 'AdminClientDomainsTabFields';

    /**
     * @link https://developers.whmcs.com/hooks-reference/admin-area/#adminclientdomainstabfieldssave
     */
    case AdminClientDomainsTabFieldsSave = 'AdminClientDomainsTabFieldsSave';

    /**
     * @link https://developers.whmcs.com/hooks-reference/admin-area/#adminclientfileupload
     */
    case AdminClientFileUpload = 'AdminClientFileUpload';

    /**
     * @link https://developers.whmcs.com/hooks-reference/admin-area/#adminclientprofiletabfields
     */
    case AdminClientProfileTabFields = 'AdminClientProfileTabFields';

    /**
     * @link https://developers.whmcs.com/hooks-reference/admin-area/#adminclientprofiletabfieldssave
     */
    case AdminClientProfileTabFieldsSave = 'AdminClientProfileTabFieldsSave';

    /**
     * @link https://developers.whmcs.com/hooks-reference/admin-area/#adminclientservicestabfields
     */
    case AdminClientServicesTabFields = 'AdminClientServicesTabFields';

    /**
     * @link https://developers.whmcs.com/hooks-reference/admin-area/#adminclientservicestabfieldssave
     */
    case AdminClientServicesTabFieldsSave = 'AdminClientServicesTabFieldsSave';

    /**
     * @link https://developers.whmcs.com/hooks-reference/admin-area/#adminhomepage
     */
    case AdminHomepage = 'AdminHomepage';

    /**
     * @link https://developers.whmcs.com/hooks-reference/admin-area/#adminlogin
     */
    case AdminLogin = 'AdminLogin';

    /**
     * @link https://developers.whmcs.com/hooks-reference/admin-area/#adminlogout
     */
    case AdminLogout = 'AdminLogout';

    /**
     * @link https://developers.whmcs.com/hooks-reference/admin-area/#adminpredefinedaddons
     */
    case AdminPredefinedAddons = 'AdminPredefinedAddons';

    /**
     * @link https://developers.whmcs.com/hooks-reference/admin-area/#adminproductconfigfields
     */
    case AdminProductConfigFields = 'AdminProductConfigFields';

    /**
     * @link https://developers.whmcs.com/hooks-reference/admin-area/#adminproductconfigfieldssave
     */
    case AdminProductConfigFieldsSave = 'AdminProductConfigFieldsSave';

    /**
     * @link https://developers.whmcs.com/hooks-reference/admin-area/#adminserviceedit
     */
    case AdminServiceEdit = 'AdminServiceEdit';

    /**
     * @link https://developers.whmcs.com/hooks-reference/admin-area/#authadmin
     */
    case AuthAdmin = 'AuthAdmin';

    /**
     * @link https://developers.whmcs.com/hooks-reference/admin-area/#authadminapi
     */
    case AuthAdminApi = 'AuthAdminApi';

    /**
     * @link https://developers.whmcs.com/hooks-reference/admin-area/#invoicecreationadminarea
     */
    case InvoiceCreationAdminArea = 'InvoiceCreationAdminArea';

    /**
     * @link https://developers.whmcs.com/hooks-reference/admin-area/#preadminserviceedit
     */
    case PreAdminServiceEdit = 'PreAdminServiceEdit';

    /**
     * @link https://developers.whmcs.com/hooks-reference/admin-area/#vieworderdetailspage
     */
    case ViewOrderDetailsPage = 'ViewOrderDetailsPage';
}
