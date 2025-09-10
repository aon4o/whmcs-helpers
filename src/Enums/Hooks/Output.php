<?php

namespace Aon4o\WhmcsHelpers\Enums\Hooks;

enum Output: string
{
    /**
     * @link https://developers.whmcs.com/hooks-reference/output/#adminareafooteroutput
     */
    case AdminAreaFooterOutput = 'AdminAreaFooterOutput';

    /**
     * @link https://developers.whmcs.com/hooks-reference/output/#adminareaheadoutput
     */
    case AdminAreaHeadOutput = 'AdminAreaHeadOutput';

    /**
     * @link https://developers.whmcs.com/hooks-reference/output/#adminareaheaderoutput
     */
    case AdminAreaHeaderOutput = 'AdminAreaHeaderOutput';

    /**
     * @link https://developers.whmcs.com/hooks-reference/output/#admininvoicescontrolsoutput
     */
    case AdminInvoicesControlsOutput = 'AdminInvoicesControlsOutput';

    /**
     * @link https://developers.whmcs.com/hooks-reference/output/#clientareadomaindetailsoutput
     */
    case ClientAreaDomainDetailsOutput = 'ClientAreaDomainDetailsOutput';

    /**
     * @link https://developers.whmcs.com/hooks-reference/output/#clientareafooteroutput
     */
    case ClientAreaFooterOutput = 'ClientAreaFooterOutput';

    /**
     * @link https://developers.whmcs.com/hooks-reference/output/#clientareaheadoutput
     */
    case ClientAreaHeadOutput = 'ClientAreaHeadOutput';

    /**
     * @link https://developers.whmcs.com/hooks-reference/output/#clientareaheaderoutput
     */
    case ClientAreaHeaderOutput = 'ClientAreaHeaderOutput';

    /**
     * @link https://developers.whmcs.com/hooks-reference/output/#clientareaproductdetailsoutput
     */
    case ClientAreaProductDetailsOutput = 'ClientAreaProductDetailsOutput';

    /**
     * @link https://developers.whmcs.com/hooks-reference/output/#formatdateforclientareaoutput
     */
    case FormatDateForClientAreaOutput = 'FormatDateForClientAreaOutput';

    /**
     * @link https://developers.whmcs.com/hooks-reference/output/#formatdatetimeforclientareaoutput
     */
    case FormatDateTimeForClientAreaOutput = 'FormatDateTimeForClientAreaOutput';

    /**
     * @link https://developers.whmcs.com/hooks-reference/output/#reportviewpostoutput
     */
    case ReportViewPostOutput = 'ReportViewPostOutput';

    /**
     * @link https://developers.whmcs.com/hooks-reference/output/#reportviewpreoutput
     */
    case ReportViewPreOutput = 'ReportViewPreOutput';

    /**
     * @link https://developers.whmcs.com/hooks-reference/output/#shoppingcartcheckoutoutput
     */
    case ShoppingCartCheckoutOutput = 'ShoppingCartCheckoutOutput';

    /**
     * @link https://developers.whmcs.com/hooks-reference/output/#shoppingcartconfigureproductaddonsoutput
     */
    case ShoppingCartConfigureProductAddonsOutput = 'ShoppingCartConfigureProductAddonsOutput';

    /**
     * @link https://developers.whmcs.com/hooks-reference/output/#shoppingcartviewcartoutput
     */
    case ShoppingCartViewCartOutput = 'ShoppingCartViewCartOutput';
}
