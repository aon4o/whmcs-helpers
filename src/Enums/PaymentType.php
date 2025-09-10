<?php

declare(strict_types=1);

namespace Aon4o\WhmcsHelpers\Enums;

enum PaymentType: string
{
    case Free = 'free';
    case OneTime = 'onetime';
    case Recurring = 'recurring';
}
