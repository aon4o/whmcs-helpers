<?php

namespace Aon4o\WhmcsHelpers\Enums\Hooks;

enum User: string
{
    /**
     * @link https://developers.whmcs.com/hooks-reference/user/#useradd
     */
    case UserAdd = 'UserAdd';

    /**
     * @link https://developers.whmcs.com/hooks-reference/user/#userchangepassword
     */
    case UserChangePassword = 'UserChangePassword';

    /**
     * @link https://developers.whmcs.com/hooks-reference/user/#useredit
     */
    case UserEdit = 'UserEdit';

    /**
     * @link https://developers.whmcs.com/hooks-reference/user/#useremailverificationcomplete
     */
    case UserEmailVerificationComplete = 'UserEmailVerificationComplete';
}
