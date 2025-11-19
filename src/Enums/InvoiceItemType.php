<?php

declare(strict_types=1);

namespace Aon4o\WhmcsHelpers\Enums;

enum InvoiceItemType: string
{
    case Domain = 'Domain';
    case Hosting = 'Hosting';
    case Invoice = 'Invoice';
    case Addon = 'Addon';
    case DomainRegister = 'DomainRegister';
    case DomainTransfer = 'DomainTransfer';
    case PromoHosting = 'PromoHosting';
    case Upgrade = 'Upgrade';
    case Item = 'Item';
    case Project = 'Project';
    case DomainAddonIDP = 'DomainAddonIDP';
    case DomainRedemptionFee = 'DomainRedemptionFee';
    case PromoDomain = 'PromoDomain';
    case RCOrder = 'RCOrder';
    case EMPTY = '';
}
