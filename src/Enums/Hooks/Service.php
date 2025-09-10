<?php

namespace Aon4o\WhmcsHelpers\Enums\Hooks;

enum Service: string
{
    /**
     * @link https://developers.whmcs.com/hooks-reference/service/#cancellationrequest
     */
    case CancellationRequest = 'CancellationRequest';

    /**
     * @link https://developers.whmcs.com/hooks-reference/service/#preserviceedit
     */
    case PreServiceEdit = 'PreServiceEdit';

    /**
     * @link https://developers.whmcs.com/hooks-reference/service/#servicedelete
     */
    case ServiceDelete = 'ServiceDelete';

    /**
     * @link https://developers.whmcs.com/hooks-reference/service/#serviceedit
     */
    case ServiceEdit = 'ServiceEdit';

    /**
     * @link https://developers.whmcs.com/hooks-reference/service/#servicerecurringcompleted
     */
    case ServiceRecurringCompleted = 'ServiceRecurringCompleted';
}
