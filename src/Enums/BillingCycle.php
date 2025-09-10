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

    /**
     * @param  string  $cycle
     *
     * @return self
     */
    public static function fromWord(string $cycle): self
    {
        return match ($cycle) {
            'Monthly' => self::Monthly,
            'Quarterly' => self::Quarterly,
            'Semi-Annually' => self::SemiAnnually,
            'Annually' => self::Annually,
            'Biennially' => self::Biennially,
            'Triennially' => self::Triennially,
            'Free Account' => self::FreeAccount,
        };
    }

    /**
     * @return int
     */
    public function nextDueDays(): int
    {
        return match ($this) {
            self::Monthly => 35,
            self::Quarterly => 95,
            self::SemiAnnually => 185,
            self::Annually => 370,
            self::Biennially => 735,
            self::Triennially => 1100,
            self::FreeAccount => 0,
        };
    }
}
