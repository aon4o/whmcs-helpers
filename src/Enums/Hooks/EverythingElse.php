<?php

namespace Aon4o\WhmcsHelpers\Enums\Hooks;

enum EverythingElse: string
{
    /**
     * @link https://developers.whmcs.com/hooks-reference/everything-else/#affiliateactivation
     */
    case AffiliateActivation = 'AffiliateActivation';

    /**
     * @link https://developers.whmcs.com/hooks-reference/everything-else/#affiliateclickthru
     */
    case AffiliateClickthru = 'AffiliateClickthru';

    /**
     * @link https://developers.whmcs.com/hooks-reference/everything-else/#affiliatecommission
     */
    case AffiliateCommission = 'AffiliateCommission';

    /**
     * @link https://developers.whmcs.com/hooks-reference/everything-else/#affiliatewithdrawalrequest
     */
    case AffiliateWithdrawalRequest = 'AffiliateWithdrawalRequest';

    /**
     * @link https://developers.whmcs.com/hooks-reference/everything-else/#afterconfigoptionsupgrade
     */
    case AfterConfigOptionsUpgrade = 'AfterConfigOptionsUpgrade';

    /**
     * @link https://developers.whmcs.com/hooks-reference/everything-else/#ccupdate
     */
    case CCUpdate = 'CCUpdate';

    /**
     * @link https://developers.whmcs.com/hooks-reference/everything-else/#calcaffiliatecommission
     */
    case CalcAffiliateCommission = 'CalcAffiliateCommission';

    /**
     * @link https://developers.whmcs.com/hooks-reference/everything-else/#customfieldload
     */
    case CustomFieldLoad = 'CustomFieldLoad';

    /**
     * @link https://developers.whmcs.com/hooks-reference/everything-else/#customfieldsave
     */
    case CustomFieldSave = 'CustomFieldSave';

    /**
     * @link https://developers.whmcs.com/hooks-reference/everything-else/#emailprelog
     */
    case EmailPreLog = 'EmailPreLog';

    /**
     * @link https://developers.whmcs.com/hooks-reference/everything-else/#emailpresend
     */
    case EmailPreSend = 'EmailPreSend';

    /**
     * @link https://developers.whmcs.com/hooks-reference/everything-else/#emailtplmergefields
     */
    case EmailTplMergeFields = 'EmailTplMergeFields';

    /**
     * @link https://developers.whmcs.com/hooks-reference/everything-else/#fetchcurrencyexchangerates
     */
    case FetchCurrencyExchangeRates = 'FetchCurrencyExchangeRates';

    /**
     * @link https://developers.whmcs.com/hooks-reference/everything-else/#intelligentsearch
     */
    case IntelligentSearch = 'IntelligentSearch';

    /**
     * @link https://developers.whmcs.com/hooks-reference/everything-else/#linktracker
     */
    case LinkTracker = 'LinkTracker';

    /**
     * @link https://developers.whmcs.com/hooks-reference/everything-else/#logactivity
     */
    case LogActivity = 'LogActivity';

    /**
     * @link https://developers.whmcs.com/hooks-reference/everything-else/#notificationpresend
     */
    case NotificationPreSend = 'NotificationPreSend';

    /**
     * @link https://developers.whmcs.com/hooks-reference/everything-else/#paymethodmigration
     */
    case PayMethodMigration = 'PayMethodMigration';

    /**
     * @link https://developers.whmcs.com/hooks-reference/everything-else/#preemailsendreducerecipients
     */
    case PreEmailSendReduceRecipients = 'PreEmailSendReduceRecipients';

    /**
     * @link https://developers.whmcs.com/hooks-reference/everything-else/#preupgradecheckout
     */
    case PreUpgradeCheckout = 'PreUpgradeCheckout';

    /**
     * @link https://developers.whmcs.com/hooks-reference/everything-else/#premiumpriceoverride
     */
    case PremiumPriceOverride = 'PremiumPriceOverride';

    /**
     * @link https://developers.whmcs.com/hooks-reference/everything-else/#premiumpricerecalculationoverride
     */
    case PremiumPriceRecalculationOverride = 'PremiumPriceRecalculationOverride';

    /**
     * @link https://developers.whmcs.com/hooks-reference/everything-else/#vatnumberverification
     */
    case VatNumberVerification = 'VatNumberVerification';
}
