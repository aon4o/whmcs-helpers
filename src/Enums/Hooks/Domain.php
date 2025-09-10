<?php

namespace Aon4o\WhmcsHelpers\Enums\Hooks;

enum Domain: string
{
    /**
     * @link https://developers.whmcs.com/hooks-reference/domain/#domaindelete
     */
    case DomainDelete = 'DomainDelete';

    /**
     * @link https://developers.whmcs.com/hooks-reference/domain/#domainedit
     */
    case DomainEdit = 'DomainEdit';

    /**
     * @link https://developers.whmcs.com/hooks-reference/domain/#domaintransfercompleted
     */
    case DomainTransferCompleted = 'DomainTransferCompleted';

    /**
     * @link https://developers.whmcs.com/hooks-reference/domain/#domaintransferfailed
     */
    case DomainTransferFailed = 'DomainTransferFailed';

    /**
     * @link https://developers.whmcs.com/hooks-reference/domain/#domainvalidation
     */
    case DomainValidation = 'DomainValidation';

    /**
     * @link https://developers.whmcs.com/hooks-reference/domain/#predomainregister
     */
    case PreDomainRegister = 'PreDomainRegister';

    /**
     * @link https://developers.whmcs.com/hooks-reference/domain/#predomaintransfer
     */
    case PreDomainTransfer = 'PreDomainTransfer';

    /**
     * @link https://developers.whmcs.com/hooks-reference/domain/#preregistrarregisterdomain
     */
    case PreRegistrarRegisterDomain = 'PreRegistrarRegisterDomain';

    /**
     * @link https://developers.whmcs.com/hooks-reference/domain/#preregistrarrenewdomain
     */
    case PreRegistrarRenewDomain = 'PreRegistrarRenewDomain';

    /**
     * @link https://developers.whmcs.com/hooks-reference/domain/#preregistrartransferdomain
     */
    case PreRegistrarTransferDomain = 'PreRegistrarTransferDomain';

    /**
     * @link https://developers.whmcs.com/hooks-reference/domain/#topleveldomainadd
     */
    case TopLevelDomainAdd = 'TopLevelDomainAdd';

    /**
     * @link https://developers.whmcs.com/hooks-reference/domain/#topleveldomaindelete
     */
    case TopLevelDomainDelete = 'TopLevelDomainDelete';

    /**
     * @link https://developers.whmcs.com/hooks-reference/domain/#topleveldomainpricingupdate
     */
    case TopLevelDomainPricingUpdate = 'TopLevelDomainPricingUpdate';

    /**
     * @link https://developers.whmcs.com/hooks-reference/domain/#topleveldomainupdate
     */
    case TopLevelDomainUpdate = 'TopLevelDomainUpdate';
}
