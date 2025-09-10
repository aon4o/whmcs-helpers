<?php

namespace Aon4o\WhmcsHelpers\Enums\Hooks;

enum ClientAreaInterface: string
{
    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareadomaindetails
     */
    case ClientAreaDomainDetails = 'ClientAreaDomainDetails';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareahomepage
     */
    case ClientAreaHomepage = 'ClientAreaHomepage';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareahomepagepanels
     */
    case ClientAreaHomepagePanels = 'ClientAreaHomepagePanels';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareanavbars
     */
    case ClientAreaNavbars = 'ClientAreaNavbars';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapage
     */
    case ClientAreaPage = 'ClientAreaPage';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapageaddcontact
     */
    case ClientAreaPageAddContact = 'ClientAreaPageAddContact';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapageaddfunds
     */
    case ClientAreaPageAddFunds = 'ClientAreaPageAddFunds';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapageaddonmodule
     */
    case ClientAreaPageAddonModule = 'ClientAreaPageAddonModule';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapageaffiliates
     */
    case ClientAreaPageAffiliates = 'ClientAreaPageAffiliates';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapageannouncements
     */
    case ClientAreaPageAnnouncements = 'ClientAreaPageAnnouncements';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapagebanned
     */
    case ClientAreaPageBanned = 'ClientAreaPageBanned';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapagebulkdomainmanagement
     */
    case ClientAreaPageBulkDomainManagement = 'ClientAreaPageBulkDomainManagement';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapagecancellation
     */
    case ClientAreaPageCancellation = 'ClientAreaPageCancellation';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapagecart
     */
    case ClientAreaPageCart = 'ClientAreaPageCart';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapagechangepassword
     */
    case ClientAreaPageChangePassword = 'ClientAreaPageChangePassword';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapageconfiguressl
     */
    case ClientAreaPageConfigureSSL = 'ClientAreaPageConfigureSSL';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapagecontact
     */
    case ClientAreaPageContact = 'ClientAreaPageContact';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapagecontacts
     */
    case ClientAreaPageContacts = 'ClientAreaPageContacts';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapagecreditcard
     */
    case ClientAreaPageCreditCard = 'ClientAreaPageCreditCard';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapagecreditcardcheckout
     */
    case ClientAreaPageCreditCardCheckout = 'ClientAreaPageCreditCardCheckout';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientarepagedomainaddons
     */
    case ClientAreaPageDomainAddons = 'ClientAreaPageDomainAddons';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientarepagedomaincontacts
     */
    case ClientAreaPageDomainContacts = 'ClientAreaPageDomainContacts';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientarepagedomaindnsmanagement
     */
    case ClientAreaPageDomainDNSManagement = 'ClientAreaPageDomainDNSManagement';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientarepagedomaindetails
     */
    case ClientAreaPageDomainDetails = 'ClientAreaPageDomainDetails';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientarepagedomaineppcode
     */
    case ClientAreaPageDomainEPPCode = 'ClientAreaPageDomainEPPCode';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientarepagedomainemailforwarding
     */
    case ClientAreaPageDomainEmailForwarding = 'ClientAreaPageDomainEmailForwarding';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientarepagedomainregisternameservers
     */
    case ClientAreaPageDomainRegisterNameservers = 'ClientAreaPageDomainRegisterNameservers';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientarepagedomains
     */
    case ClientAreaPageDomains = 'ClientAreaPageDomains';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientarepagedownloads
     */
    case ClientAreaPageDownloads = 'ClientAreaPageDownloads';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapageemails
     */
    case ClientAreaPageEmails = 'ClientAreaPageEmails';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapagehome
     */
    case ClientAreaPageHome = 'ClientAreaPageHome';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapageinvoices
     */
    case ClientAreaPageInvoices = 'ClientAreaPageInvoices';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapageknowledgebase
     */
    case ClientAreaPageKnowledgebase = 'ClientAreaPageKnowledgebase';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapagelogin
     */
    case ClientAreaPageLogin = 'ClientAreaPageLogin';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapagelogout
     */
    case ClientAreaPageLogout = 'ClientAreaPageLogout';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapagemasspay
     */
    case ClientAreaPageMassPay = 'ClientAreaPageMassPay';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapagenetworkissues
     */
    case ClientAreaPageNetworkIssues = 'ClientAreaPageNetworkIssues';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapagepasswordreset
     */
    case ClientAreaPagePasswordReset = 'ClientAreaPagePasswordReset';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapageproductdetails
     */
    case ClientAreaPageProductDetails = 'ClientAreaPageProductDetails';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapageproductsservices
     */
    case ClientAreaPageProductsServices = 'ClientAreaPageProductsServices';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapageprofile
     */
    case ClientAreaPageProfile = 'ClientAreaPageProfile';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapagequotes
     */
    case ClientAreaPageQuotes = 'ClientAreaPageQuotes';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapageregister
     */
    case ClientAreaPageRegister = 'ClientAreaPageRegister';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapagesecurity
     */
    case ClientAreaPageSecurity = 'ClientAreaPageSecurity';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapageserverstatus
     */
    case ClientAreaPageServerStatus = 'ClientAreaPageServerStatus';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapageunsubscribe
     */
    case ClientAreaPageUnsubscribe = 'ClientAreaPageUnsubscribe';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapageupgrade
     */
    case ClientAreaPageUpgrade = 'ClientAreaPageUpgrade';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapageviewemail
     */
    case ClientAreaPageViewEmail = 'ClientAreaPageViewEmail';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapageviewinvoice
     */
    case ClientAreaPageViewInvoice = 'ClientAreaPageViewInvoice';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapageviewquote
     */
    case ClientAreaPageViewQuote = 'ClientAreaPageViewQuote';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareapaymentmethods
     */
    case ClientAreaPaymentMethods = 'ClientAreaPaymentMethods';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareaprimarynavbar
     */
    case ClientAreaPrimaryNavbar = 'ClientAreaPrimaryNavbar';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareaprimarysidebar
     */
    case ClientAreaPrimarySidebar = 'ClientAreaPrimarySidebar';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareaproductdetails
     */
    case ClientAreaProductDetails = 'ClientAreaProductDetails';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareaproductdetailspremoduletemplate
     */
    case ClientAreaProductDetailsPreModuleTemplate = 'ClientAreaProductDetailsPreModuleTemplate';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientarearegister
     */
    case ClientAreaRegister = 'ClientAreaRegister';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareasecondarynavbar
     */
    case ClientAreaSecondaryNavbar = 'ClientAreaSecondaryNavbar';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareasecondarysidebar
     */
    case ClientAreaSecondarySidebar = 'ClientAreaSecondarySidebar';

    /**
     * @link https://developers.whmcs.com/hooks-reference/client-area-interface/#clientareasidebars
     */
    case ClientAreaSidebars = 'ClientAreaSidebars';
}
