<?php

namespace Aon4o\WhmcsHelpers\Enums\Hooks;

enum Contact: string
{
    /**
     * @link https://developers.whmcs.com/hooks-reference/contact/#contactadd
     */
    case ContactAdd = 'ContactAdd';

    /**
     * @link https://developers.whmcs.com/hooks-reference/contact/#contactdelete
     */
    case ContactDelete = 'ContactDelete';

    /**
     * @link https://developers.whmcs.com/hooks-reference/contact/#contactdetailsvalidation
     */
    case ContactDetailsValidation = 'ContactDetailsValidation';

    /**
     * @link https://developers.whmcs.com/hooks-reference/contact/#contactedit
     */
    case ContactEdit = 'ContactEdit';
}
