<?php

namespace Aon4o\WhmcsHelpers\Enums\Hooks;

enum Module: string
{
    /**
     * @link https://developers.whmcs.com/hooks-reference/module/#aftermodulechangepackage
     */
    case AfterModuleChangePackage = 'AfterModuleChangePackage';

    /**
     * @link https://developers.whmcs.com/hooks-reference/module/#aftermodulechangepackagefailed
     */
    case AfterModuleChangePackageFailed = 'AfterModuleChangePackageFailed';

    /**
     * @link https://developers.whmcs.com/hooks-reference/module/#aftermodulechangepassword
     */
    case AfterModuleChangePassword = 'AfterModuleChangePassword';

    /**
     * @link https://developers.whmcs.com/hooks-reference/module/#aftermodulechangepasswordfailed
     */
    case AfterModuleChangePasswordFailed = 'AfterModuleChangePasswordFailed';

    /**
     * @link https://developers.whmcs.com/hooks-reference/module/#aftermodulecreate
     */
    case AfterModuleCreate = 'AfterModuleCreate';

    /**
     * @link https://developers.whmcs.com/hooks-reference/module/#aftermodulecreatefailed
     */
    case AfterModuleCreateFailed = 'AfterModuleCreateFailed';

    /**
     * @link https://developers.whmcs.com/hooks-reference/module/#aftermodulecustom
     */
    case AfterModuleCustom = 'AfterModuleCustom';

    /**
     * @link https://developers.whmcs.com/hooks-reference/module/#aftermodulecustomfailed
     */
    case AfterModuleCustomFailed = 'AfterModuleCustomFailed';

    /**
     * @link https://developers.whmcs.com/hooks-reference/module/#aftermoduledeprovisionaddonfeature
     */
    case AfterModuleDeprovisionAddOnFeature = 'AfterModuleDeprovisionAddOnFeature';

    /**
     * @link https://developers.whmcs.com/hooks-reference/module/#aftermoduledeprovisionaddonfeaturefailed
     */
    case AfterModuleDeprovisionAddOnFeatureFailed = 'AfterModuleDeprovisionAddOnFeatureFailed';

    /**
     * @link https://developers.whmcs.com/hooks-reference/module/#aftermoduleprovisionaddonfeature
     */
    case AfterModuleProvisionAddOnFeature = 'AfterModuleProvisionAddOnFeature';

    /**
     * @link https://developers.whmcs.com/hooks-reference/module/#aftermoduleprovisionaddonfeaturefailed
     */
    case AfterModuleProvisionAddOnFeatureFailed = 'AfterModuleProvisionAddOnFeatureFailed';

    /**
     * @link https://developers.whmcs.com/hooks-reference/module/#aftermodulesuspend
     */
    case AfterModuleSuspend = 'AfterModuleSuspend';

    /**
     * @link https://developers.whmcs.com/hooks-reference/module/#aftermodulesuspendaddonfeature
     */
    case AfterModuleSuspendAddOnFeature = 'AfterModuleSuspendAddOnFeature';

    /**
     * @link https://developers.whmcs.com/hooks-reference/module/#aftermodulesuspendaddonfeaturefailed
     */
    case AfterModuleSuspendAddOnFeatureFailed = 'AfterModuleSuspendAddOnFeatureFailed';

    /**
     * @link https://developers.whmcs.com/hooks-reference/module/#aftermodulesuspendfailed
     */
    case AfterModuleSuspendFailed = 'AfterModuleSuspendFailed';

    /**
     * @link https://developers.whmcs.com/hooks-reference/module/#aftermoduleterminate
     */
    case AfterModuleTerminate = 'AfterModuleTerminate';

    /**
     * @link https://developers.whmcs.com/hooks-reference/module/#aftermoduleterminatefailed
     */
    case AfterModuleTerminateFailed = 'AfterModuleTerminateFailed';

    /**
     * @link https://developers.whmcs.com/hooks-reference/module/#aftermoduleunsuspend
     */
    case AfterModuleUnsuspend = 'AfterModuleUnsuspend';

    /**
     * @link https://developers.whmcs.com/hooks-reference/module/#aftermoduleunsuspendaddonfeature
     */
    case AfterModuleUnsuspendAddOnFeature = 'AfterModuleUnsuspendAddOnFeature';

    /**
     * @link https://developers.whmcs.com/hooks-reference/module/#aftermoduleunsuspendaddonfeaturefailed
     */
    case AfterModuleUnsuspendAddOnFeatureFailed = 'AfterModuleUnsuspendAddOnFeatureFailed';

    /**
     * @link https://developers.whmcs.com/hooks-reference/module/#aftermoduleunsuspendfailed
     */
    case AfterModuleUnsuspendFailed = 'AfterModuleUnsuspendFailed';

    /**
     * @link https://developers.whmcs.com/hooks-reference/module/#overridemoduleusernamegeneration
     */
    case OverrideModuleUsernameGeneration = 'OverrideModuleUsernameGeneration';

    /**
     * @link https://developers.whmcs.com/hooks-reference/module/#premodulechangepackage
     */
    case PreModuleChangePackage = 'PreModuleChangePackage';

    /**
     * @link https://developers.whmcs.com/hooks-reference/module/#premodulechangepassword
     */
    case PreModuleChangePassword = 'PreModuleChangePassword';

    /**
     * @link https://developers.whmcs.com/hooks-reference/module/#premodulecreate
     */
    case PreModuleCreate = 'PreModuleCreate';

    /**
     * @link https://developers.whmcs.com/hooks-reference/module/#premodulecustom
     */
    case PreModuleCustom = 'PreModuleCustom';

    /**
     * @link https://developers.whmcs.com/hooks-reference/module/#premoduledeprovisionaddonfeature
     */
    case PreModuleDeprovisionAddOnFeature = 'PreModuleDeprovisionAddOnFeature';

    /**
     * @link https://developers.whmcs.com/hooks-reference/module/#premoduleprovisionaddonfeature
     */
    case PreModuleProvisionAddOnFeature = 'PreModuleProvisionAddOnFeature';

    /**
     * @link https://developers.whmcs.com/hooks-reference/module/#premodulerenew
     */
    case PreModuleRenew = 'PreModuleRenew';

    /**
     * @link https://developers.whmcs.com/hooks-reference/module/#premodulesuspend
     */
    case PreModuleSuspend = 'PreModuleSuspend';

    /**
     * @link https://developers.whmcs.com/hooks-reference/module/#premodulesuspendaddonfeature
     */
    case PreModuleSuspendAddOnFeature = 'PreModuleSuspendAddOnFeature';

    /**
     * @link https://developers.whmcs.com/hooks-reference/module/#premoduleterminate
     */
    case PreModuleTerminate = 'PreModuleTerminate';

    /**
     * @link https://developers.whmcs.com/hooks-reference/module/#premoduleunsuspend
     */
    case PreModuleUnsuspend = 'PreModuleUnsuspend';

    /**
     * @link https://developers.whmcs.com/hooks-reference/module/#premoduleunsuspendaddonfeature
     */
    case PreModuleUnsuspendAddOnFeature = 'PreModuleUnsuspendAddOnFeature';
}
