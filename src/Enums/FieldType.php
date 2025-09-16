<?php

declare(strict_types=1);

namespace Aon4o\WhmcsHelpers\Enums;

enum FieldType: string
{
    case TEXT_BOX = 'text';
    case LINK = 'link'; // TODO: verify that this is correct
    case PASSWORD = 'password';
    case DROPDOWN = 'dropdown';
    case CHECKBOX = 'tickbox';
    case TEXT_AREA = 'textarea';
}
