<?php

declare(strict_types=1);

namespace Aon4o\WhmcsHelpers\Enums;

enum AdminEmailType: string
{
    case SYSTEM = 'system';
    case ACCOUNT = 'account';
    case SUPPORT = 'support';
}
