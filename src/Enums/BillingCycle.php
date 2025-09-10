<?php

declare(strict_types=1);

namespace Aon4o\WhmcsHelpers\Enums;

enum BillingCycle: string
{
    case Monthly = 'monthly';
    case Quarterly = 'quarterly';
    case SemiAnnually = 'semiannually';
    case Annually = 'annually';
    case Biennially = 'biennially';
    case Triennially = 'triennially';
    case FreeAccount = 'free';
}
