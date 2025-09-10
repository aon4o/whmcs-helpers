<?php

namespace Aon4o\WhmcsHelpers\Enums\Hooks;

enum Addon: string
{
    /**
     * @link https://developers.whmcs.com/hooks-reference/addon/#addonactivation
     */
    case AddonActivation = 'AddonActivation';

    /**
     * @link https://developers.whmcs.com/hooks-reference/addon/#addonactivated
     */
    case AddonActivated = 'AddonActivated';

    /**
     * @link https://developers.whmcs.com/hooks-reference/addon/#addonadd
     */
    case AddonAdd = 'AddonAdd';

    /**
     * @link https://developers.whmcs.com/hooks-reference/addon/#addoncancelled
     */
    case AddonCancelled = 'AddonCancelled';

    /**
     * @link https://developers.whmcs.com/hooks-reference/addon/#addonconfig
     */
    case AddonConfig = 'AddonConfig';

    /**
     * @link https://developers.whmcs.com/hooks-reference/addon/#addonconfigsave
     */
    case AddonConfigSave = 'AddonConfigSave';

    /**
     * @link https://developers.whmcs.com/hooks-reference/addon/#addondeleted
     */
    case AddonDeleted = 'AddonDeleted';

    /**
     * @link https://developers.whmcs.com/hooks-reference/addon/#addonedit
     */
    case AddonEdit = 'AddonEdit';

    /**
     * @link https://developers.whmcs.com/hooks-reference/addon/#addonrenewal
     */
    case AddonRenewal = 'AddonRenewal';

    /**
     * @link https://developers.whmcs.com/hooks-reference/addon/#addonsuspended
     */
    case AddonSuspended = 'AddonSuspended';

    /**
     * @link https://developers.whmcs.com/hooks-reference/addon/#addonterminated
     */
    case AddonTerminated = 'AddonTerminated';

    /**
     * @link https://developers.whmcs.com/hooks-reference/addon/#addonunsuspended
     */
    case AddonUnsuspended = 'AddonUnsuspended';

    /**
     * @link https://developers.whmcs.com/hooks-reference/addon/#afteraddonupgrade
     */
    case AfterAddonUpgrade = 'AfterAddonUpgrade';

    /**
     * @link https://developers.whmcs.com/hooks-reference/addon/#licensingaddonreissue
     */
    case LicensingAddonReissue = 'LicensingAddonReissue';

    /**
     * @link https://developers.whmcs.com/hooks-reference/addon/#licensingaddonverify
     */
    case LicensingAddonVerify = 'LicensingAddonVerify';

    /**
     * @link https://developers.whmcs.com/hooks-reference/addon/#productaddondelete
     */
    case ProductAddonDelete = 'ProductAddonDelete';
}
