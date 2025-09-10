<?php

namespace Aon4o\WhmcsHelpers\Enums\Hooks;

enum Authentication: string
{
    /**
     * @link https://developers.whmcs.com/hooks-reference/authentication/#clientloginshare
     */
    case ClientLoginShare = 'ClientLoginShare';

    /**
     * @link https://developers.whmcs.com/hooks-reference/authentication/#userlogin
     */
    case UserLogin = 'UserLogin';

    /**
     * @link https://developers.whmcs.com/hooks-reference/authentication/#userlogout
     */
    case UserLogout = 'UserLogout';
}
