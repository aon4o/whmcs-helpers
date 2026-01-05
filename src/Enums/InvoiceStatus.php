<?php

declare(strict_types=1);

namespace Aon4o\WhmcsHelpers\Enums;

enum InvoiceStatus: string
{
    case Paid = 'Paid';
    case Cancelled = 'Cancelled';
    case Refunded = 'Refunded';
    case Unpaid = 'Unpaid';
    case Draft = 'Draft';
}
