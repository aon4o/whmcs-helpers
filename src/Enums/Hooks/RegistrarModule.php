<?php

namespace Aon4o\WhmcsHelpers\Enums\Hooks;

enum RegistrarModule: string
{
    /**
     * @link https://developers.whmcs.com/hooks-reference/registrar-module/#afterregistrargetcontactdetails
     */
    case AfterRegistrarGetContactDetails = 'AfterRegistrarGetContactDetails';

    /**
     * @link https://developers.whmcs.com/hooks-reference/registrar-module/#afterregistrargetdns
     */
    case AfterRegistrarGetDNS = 'AfterRegistrarGetDNS';

    /**
     * @link https://developers.whmcs.com/hooks-reference/registrar-module/#afterregistrargeteppcode
     */
    case AfterRegistrarGetEPPCode = 'AfterRegistrarGetEPPCode';

    /**
     * @link https://developers.whmcs.com/hooks-reference/registrar-module/#afterregistrargetnameservers
     */
    case AfterRegistrarGetNameservers = 'AfterRegistrarGetNameservers';

    /**
     * @link https://developers.whmcs.com/hooks-reference/registrar-module/#afterregistrarregister
     */
    case AfterRegistrarRegister = 'AfterRegistrarRegister';

    /**
     * @link https://developers.whmcs.com/hooks-reference/registrar-module/#afterregistrarregistration
     */
    case AfterRegistrarRegistration = 'AfterRegistrarRegistration';

    /**
     * @link https://developers.whmcs.com/hooks-reference/registrar-module/#afterregistrarregistrationfailed
     */
    case AfterRegistrarRegistrationFailed = 'AfterRegistrarRegistrationFailed';

    /**
     * @link https://developers.whmcs.com/hooks-reference/registrar-module/#afterregistrarrenew
     */
    case AfterRegistrarRenew = 'AfterRegistrarRenew';

    /**
     * @link https://developers.whmcs.com/hooks-reference/registrar-module/#afterregistrarrenewal
     */
    case AfterRegistrarRenewal = 'AfterRegistrarRenewal';

    /**
     * @link https://developers.whmcs.com/hooks-reference/registrar-module/#afterregistrarrenewalfailed
     */
    case AfterRegistrarRenewalFailed = 'AfterRegistrarRenewalFailed';

    /**
     * @link https://developers.whmcs.com/hooks-reference/registrar-module/#afterregistrarrequestdelete
     */
    case AfterRegistrarRequestDelete = 'AfterRegistrarRequestDelete';

    /**
     * @link https://developers.whmcs.com/hooks-reference/registrar-module/#afterregistrarsavecontactdetails
     */
    case AfterRegistrarSaveContactDetails = 'AfterRegistrarSaveContactDetails';

    /**
     * @link https://developers.whmcs.com/hooks-reference/registrar-module/#afterregistrarsavedns
     */
    case AfterRegistrarSaveDNS = 'AfterRegistrarSaveDNS';

    /**
     * @link https://developers.whmcs.com/hooks-reference/registrar-module/#afterregistrarsavenameservers
     */
    case AfterRegistrarSaveNameservers = 'AfterRegistrarSaveNameservers';

    /**
     * @link https://developers.whmcs.com/hooks-reference/registrar-module/#afterregistrartransfer
     */
    case AfterRegistrarTransfer = 'AfterRegistrarTransfer';

    /**
     * @link https://developers.whmcs.com/hooks-reference/registrar-module/#afterregistrartransferfailed
     */
    case AfterRegistrarTransferFailed = 'AfterRegistrarTransferFailed';

    /**
     * @link https://developers.whmcs.com/hooks-reference/registrar-module/#preregistrargetcontactdetails
     */
    case PreRegistrarGetContactDetails = 'PreRegistrarGetContactDetails';

    /**
     * @link https://developers.whmcs.com/hooks-reference/registrar-module/#preregistrargetdns
     */
    case PreRegistrarGetDNS = 'PreRegistrarGetDNS';

    /**
     * @link https://developers.whmcs.com/hooks-reference/registrar-module/#preregistrargeteppcode
     */
    case PreRegistrarGetEPPCode = 'PreRegistrarGetEPPCode';

    /**
     * @link https://developers.whmcs.com/hooks-reference/registrar-module/#preregistrargetnameservers
     */
    case PreRegistrarGetNameservers = 'PreRegistrarGetNameservers';

    /**
     * @link https://developers.whmcs.com/hooks-reference/registrar-module/#preregistrarrequestdelete
     */
    case PreRegistrarRequestDelete = 'PreRegistrarRequestDelete';

    /**
     * @link https://developers.whmcs.com/hooks-reference/registrar-module/#preregistrarsavecontactdetails
     */
    case PreRegistrarSaveContactDetails = 'PreRegistrarSaveContactDetails';

    /**
     * @link https://developers.whmcs.com/hooks-reference/registrar-module/#preregistrarsavedns
     */
    case PreRegistrarSaveDNS = 'PreRegistrarSaveDNS';

    /**
     * @link https://developers.whmcs.com/hooks-reference/registrar-module/#preregistrarsavenameservers
     */
    case PreRegistrarSaveNameservers = 'PreRegistrarSaveNameservers';
}
