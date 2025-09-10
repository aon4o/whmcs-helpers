<?php

declare(strict_types=1);

namespace Aon4o\WhmcsHelpers\Enums;

enum ProductType: string
{
    case HostingAccount = 'hostingaccount';
    case ResellerAccount = 'reselleraccount';
    case Server = 'server';
    case Other = 'other';
}
