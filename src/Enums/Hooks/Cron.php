<?php

namespace Aon4o\WhmcsHelpers\Enums\Hooks;

enum Cron: string
{
    /**
     * @link https://developers.whmcs.com/hooks-reference/cron/#aftercronjob
     */
    case AfterCronJob = 'AfterCronJob';

    /**
     * @link https://developers.whmcs.com/hooks-reference/cron/#dailycronjob
     */
    case DailyCronJob = 'DailyCronJob';

    /**
     * @link https://developers.whmcs.com/hooks-reference/cron/#dailycronjobpreemail
     */
    case DailyCronJobPreEmail = 'DailyCronJobPreEmail';

    /**
     * @link https://developers.whmcs.com/hooks-reference/cron/#popemailcollectioncroncompleted
     */
    case PopEmailCollectionCronCompleted = 'PopEmailCollectionCronCompleted';

    /**
     * @link https://developers.whmcs.com/hooks-reference/cron/#postautomationtask
     */
    case PostAutomationTask = 'PostAutomationTask';

    /**
     * @link https://developers.whmcs.com/hooks-reference/cron/#preautomationtask
     */
    case PreAutomationTask = 'PreAutomationTask';

    /**
     * @link https://developers.whmcs.com/hooks-reference/cron/#precronjob
     */
    case PreCronJob = 'PreCronJob';
}
